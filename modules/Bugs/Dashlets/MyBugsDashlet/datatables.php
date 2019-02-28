
    
    <?php
    include_once('modules/ACLRoles/ACLRole.php');
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    
        $roles=new ACLRole();
        global $mod_strings,$current_user,$app_list_strings;
        $returnArray = array();
        $db = DBManagerFactory::getInstance();
          $mysqlQueryUser ="
            SELECT
          users.id,
          users.user_name
        FROM
          users
        WHERE
          users.reports_to_id = $current_user->id and users.deleted = 0";
          
          
          $resultUser = $db->query($mysqlQueryUser);
        $xc='';
        while ($row = $db->fetchByAssoc($resultUser)) {
            $xc .="'".$row['id']."',"; 
           // return $xc;
        }
        
        $custom_where="";
        if(!$current_user->isAdmin()){
            foreach($roles->getUserRoleNames($current_user->id) as $roleName){


        if($roleName=='FLM'){
       $custom_where.= "cp.assigned_user_id IN (".$xc."'') AND ";
            
        }
        }
        }
        
    $myOwnSqlQuery="
    SELECT
  cpts.id_c,
  cpts.week_c,
  cp.id,
  users.first_name AS user_first_name,
  users.last_name AS user_last_name,
  cp.start_date,
  cpt_contacts.id,
  contacts.first_name,
  contacts.last_name,
  cp.assigned_user_id,
  cp.name,
  cp.active,
  cpt.customer_tier,
  cp_cpt.thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida,
  cp_cpt.id,
  contacts_cstm.specialty_c,
  contacts_cstm.gender_c,
  contacts_cstm.brick_c,
  contacts_cstm.city_c,
  securitygroups.name AS name1,
  securitygroups.id AS id1,
  contacts.id AS id2
FROM
  thin_cycleplans AS cp
  INNER JOIN thin_cycleplans_thin_cycleplantargets_c AS cp_cpt ON
    cp_cpt.thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida = cp.id
  INNER JOIN thin_cycleplantargets AS cpt ON cp_cpt.thin_cycleplans_thin_cycleplantargetsthin_cycleplantargets_idb =
    cpt.id
  INNER JOIN thin_cycleplantargets_cstm AS cpts ON cpts.id_c = cpt.id
  INNER JOIN thin_cycleplantargets_contacts_c AS cpt_contacts ON
    cpts.id_c = cpt_contacts.thin_cycleplantargets_contactsthin_cycleplantargets_idb
  INNER JOIN contacts ON contacts.id = cpt_contacts.thin_cycleplantargets_contactscontacts_ida
  INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
  INNER JOIN users ON cp.assigned_user_id = users.id
  INNER JOIN securitygroups_users ON securitygroups_users.user_id = users.id
  INNER JOIN securitygroups ON securitygroups_users.securitygroup_id = securitygroups.id

  WHERE cp.start_date='2018/08/01'  AND ".$custom_where." contacts.id NOT IN (SELECT calls.parent_id FROM calls WHERE calls.assigned_user_id=cp.assigned_user_id AND calls.date_start BETWEEN cp.start_date AND cp.end_date )
  ORDER BY
  cp.start_date
";
// WHERE cp.start_date='".(new DateTime('first day of this month'))->format('Y/m/d')."'  AND ".$custom_where." contacts.id NOT IN (SELECT calls.parent_id FROM calls WHERE calls.assigned_user_id=cp.assigned_user_id AND calls.date_start BETWEEN cp.start_date AND cp.end_date )
  
        $result = $db->query($myOwnSqlQuery);

        while ($row = $db->fetchByAssoc($result)) {
            $x =  array();
            $x[] = date("Y", strtotime($row['start_date']))."-".date("F", strtotime($row['start_date']));
            $x[] = $row['first_name']." ".$row['last_name'];
            $x[] = $app_list_strings["thin_specialty_list"][$row['specialty_c']];
             $x[] = $row['week_c'];
            $x[] = $row['customer_tier'];
            $x[]= $row['user_first_name']." ".$row['user_last_name'];
            $returnArray[] = $x;
        }
//        echo (new DateTime('first day of this month'))->format('Y/m/d');
echo json_encode($returnArray);
//echo json_encode($app_list_strings["thin_specialty_list"]);