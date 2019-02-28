<?php

$layout_defs['Contacts']['subpanel_setup']['history_planned_held'] =
    array('order' => 20,
        'module' => 'Calls',
        'subpanel_name' => 'ForActivities_1',
        'get_subpanel_data' => 'calls',
        'generate_select' => true,
        'title_key' => 'LBL_CALLS_WITH_PLANNED_HELD',
        'top_buttons' => array(),

    );