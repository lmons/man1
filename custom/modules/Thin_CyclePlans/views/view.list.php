<?php

require_once('include/MVC/View/views/view.list.php');

class Thin_CyclePlansViewList extends ViewList {

    function listViewProcess() {
         global $current_user;

        $this->processSearchForm();
         if(!$current_user->is_admin){
            $this->params['custom_where'] = ' AND thin_cycleplans.active = "1" ';
        }
            

        if (empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false) {
            $this->lv->setup($this->seed, 'include/ListView/ListViewGeneric.tpl', $this->where, $this->params);
            $savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
            echo $this->lv->display();
        }
    }

}