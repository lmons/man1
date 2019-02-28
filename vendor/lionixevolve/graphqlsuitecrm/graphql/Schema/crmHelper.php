<?php
class crmHelper{
    /* This saveBean is an adapted copy of the set_entry sugar rest/soap service
*/
public function saveBean($module_name, $class_name, $name_value_list){
    session_start();
    global  $beanList, $beanFiles, $current_user;
    if(isset($_SESSION['user_id'])  && $_SESSION['user_id']!=$current_user->id){
        $current_user=new User();
        $current_user->retrieve($_SESSION['user_id']);

    }
    $seed = new $class_name();
    // $name_value_list=$args;
    foreach ($name_value_list as $name => $value) {
        if (is_array($value) &&  $value['name'] == 'id') {
            $seed->retrieve($value['value']);
            break;
        } elseif ($name === 'id') {
            $seed->retrieve($value);
        }
    }
    $seed->notifyonsave=false;
    foreach ($name_value_list as $name => $value) {
        if ($module_name == 'Users' && !empty($seed->id) && ($seed->id != $current_user->id) && $name == 'user_hash') {
            continue;
        }
        if (!empty($seed->field_name_map[$name]['sensitive'])) {
            continue;
        }
        if($name=="related_bean"){
            $seed->new_rel_relname=$value;
        }
        if($name=="related_beans"){
            $related_beans=$value;
        }
        if($name=="related_id"){
            $seed->new_rel_id=$value;
        }
        if (!is_array($value)) {
            $seed->$name = $value;
        } elseif ($name!="related_beans") {
            $seed->$value['name'] = $value['value'];
        }

    }


    if ($seed->ACLAccess('Save')) {
        $seed->not_use_rel_in_req=true;
        $seed->save($seed->notifyonsave);
        if ($seed->deleted == 1) {
            $seed->mark_deleted($seed->id);
        }
        if(isset($related_beans)){
             $deleteCallsContactsQuery = "update calls_aos_products_1_c set deleted='1' where calls_aos_products_1calls_ida='" . $seed->id . "'";
            $seed->db->query($deleteCallsContactsQuery);
            foreach ($related_beans as $key => $value) {
                if($class_name=="Call" && isset($value['module']) && strtolower($value['module'])=="notes"){
                    $note= new Note();
                    $note->retrieve($value['id']);
                    if(!empty($note->id)){
                        $note->load_relationship('calls');
                        $note->calls->add($seed->id);
                    }
                }
                 elseif(isset($value['module']) && $value['module']=="calls_aos_products_1"){
                    
                     $callsContactsQuery = "insert into calls_aos_products_1_c (id,calls_aos_products_1calls_ida,calls_aos_products_1aos_products_idb,priority) VALUES ('" . create_guid() . "','" . $seed->id . "','" . $value['id'] . "','" . ($key+1) . "');";
                $seed->db->query($callsContactsQuery);
                }
                elseif(isset($value['module']) && $value['module']=="calls_thin_key_messages_1"){
                   $callsKeyMessagesQuery = "insert into calls_thin_key_messages_1_c (id,calls_thin_key_messages_1calls_ida,calls_thin_key_messages_1thin_key_messages_idb,reaction) VALUES ('" . create_guid() . "','" . $seed->id . "','" . $value['id'] . "','" . $value['reaction'] . "');";
                $seed->db->query($callsKeyMessagesQuery);
                }
				elseif(isset($value['module']) && $value['module']=="fp_events_contacts" && isset($value['deleted'])){
                $seed->load_relationship('fp_events_contacts');
$seed->fp_events_contacts->delete($seed->id,$value['id']); 
                }
				else{
                    $relatedModule=strtolower($value['module']);
                    $seed->load_relationship($relatedModule);
                    $seed->$relatedModule->add($value['id']);
                }
            }
        }
        return array('id' => $seed->id);

    }else{
        error_log(__METHOD__." ERROR SAVING");
        return "ERROR SAVING";
    }
    }
}
