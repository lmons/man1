<?php
$viewdefs ['Calls'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'includes' => 
      array (
      /*  0 =>
        array (
          'file' => 'modules/Reminders/Reminders.js',
        ),*/
          /*0=>
              array (
                  'file' => 'custom/modules/Calls/contactsAccount.js'
              ),*/
        1 =>
        array (
          'file' => 'custom/modules/Calls/getAccountName.js',
        ),
        2 =>
        array (
            'file' => 'custom/modules/Calls/products.js',
        ),
        3 =>
            array (
                'file' => 'custom/modules/Calls/removeUnusedFields.js',
            ),/*4 =>
          array (
              'file' => 'custom/modules/Calls/checkInCyclePlan.js',
          ),*/5 =>
          array (
              'file' => 'include/javascript/node_modules/moment/moment.js',
          ),
            6 =>
          array (
              'file' => 'custom/modules/Calls/checkInRestriction.js',
          ),
           7 =>
              array (
                  'file' => 'custom/modules/Calls/showHideAccompanying.js',
              ),
      ),
      'maxColumns' => '2',
      'form' =>
      array (
        'hidden' =>
        array (
          0 => '<input type="hidden" name="isSaveAndNew" value="false">',
          1 => '<input type="hidden" name="send_invites">',
          2 => '<input type="hidden" name="user_invitees">',
          3 => '<input type="hidden" name="lead_invitees">',
          4 => '<input type="hidden" name="contact_invitees">',
          5 => '<input type="hidden" name="products" id="Products" value="">',
            6 => '<input type="hidden" name="key-messages-reaction" id="key-messages-reaction" value="">',
            7 => '<input type="hidden" name="current_module" id="current_module" value="{$smarty.request.module}">',
             8 => '<input type="hidden" name="call_location_id" id="call_location_id" value="{$call_location_id}">',
            9 => '<input type="hidden" name="call_location_id_c" id="call_location_id_c" value="">',
        ),
        'buttons' =>
        array (
          0 =>
          array (
            'customCode' => '<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" id="SAVE_HEADER" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="document.getElementById(\'status\').disabled = false;document.getElementById(\'status\').value=\'Planned\';document.EditView.action.value=\'Save\'; document.EditView.return_action.value=\'DetailView\'; {if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}document.EditView.return_id.value=\'\';  {/if} if(check_form(\'EditView\')) document.EditView.submit();" type="button" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">',
          ),
          1 =>
          array (
            'customCode' => '<input title="Submit" id="SUBMIT_HEADER"  class="button primary"  onclick="document.getElementById(\'status\').disabled = false;document.getElementById(\'status\').value=\'Held\';document.EditView.action.value=\'Save\'; document.EditView.return_action.value=\'DetailView\'; {if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}document.EditView.return_id.value=\'\';  {/if} if(check_form(\'EditView\')) document.EditView.submit();" type="button" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" type="button" name="button" value="Submit">',
          ),
          2 => 'CANCEL',
          /*3 =>
          array (
            'customCode' => '<input title="{$MOD.LBL_SEND_BUTTON_TITLE}" id="SAVE_SEND_HEADER" class="button" onclick="document.EditView.send_invites.value=\'1\';document.EditView.action.value=\'Save\';document.EditView.return_action.value=\'EditView\';document.EditView.return_module.value=\'{$smarty.request.return_module}\';" type="button" name="button" value="{$MOD.LBL_SEND_BUTTON_LABEL}">',
          ),
          4 =>
          array (
            'customCode' => '{if $fields.status.value != "Held"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" id="CLOSE_CREATE_HEADER" accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}" class="button" onclick=" document.EditView.status.value=\'Held\'; document.EditView.action.value=\'Save\'; document.EditView.return_module.value=\'Calls\'; document.EditView.isDuplicate.value=true; document.EditView.isSaveAndNew.value=true; document.EditView.return_action.value=\'EditView\'; document.EditView.return_id.value=\'{$fields.id.value}\' ; if(check_form(\'EditView\')) document.EditView.submit(); " type="button" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
          ),*/
        ),
        'buttons_footer' =>
            array (
                0 =>
                    array (
                        'customCode' => '<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" id="SAVE_HEADER" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="document.getElementById(\'status\').disabled = false;document.getElementById(\'status\').value=\'Planned\';document.EditView.action.value=\'Save\'; document.EditView.return_action.value=\'DetailView\'; {if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}document.EditView.return_id.value=\'\';  {/if} if(check_form(\'EditView\')) document.EditView.submit();" type="button" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">',
                    ),
                1 =>
                    array (
                        'customCode' => '<input title="Submit" id="SUBMIT_HEADER"  class="button primary"  onclick="document.getElementById(\'status\').disabled = false;document.getElementById(\'status\').value=\'Held\';document.EditView.action.value=\'Save\'; document.EditView.return_action.value=\'DetailView\'; {if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}document.EditView.return_id.value=\'\';  {/if} if(check_form(\'EditView\')) document.EditView.submit();" type="button" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" type="button" name="button" value="Submit">',
                    ),
                2 => 'CANCEL',
                /*3 =>
                array (
                  'customCode' => '<input title="{$MOD.LBL_SEND_BUTTON_TITLE}" id="SAVE_SEND_HEADER" class="button" onclick="document.EditView.send_invites.value=\'1\';document.EditView.action.value=\'Save\';document.EditView.return_action.value=\'EditView\';document.EditView.return_module.value=\'{$smarty.request.return_module}\';" type="button" name="button" value="{$MOD.LBL_SEND_BUTTON_LABEL}">',
                ),
                4 =>
                    array (
                        'customCode' => '{if $fields.status.value != "Held"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" id="CLOSE_CREATE_HEADER" accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}" class="button" onclick=" document.EditView.status.value=\'Held\'; document.EditView.action.value=\'Save\'; document.EditView.return_module.value=\'Calls\'; document.EditView.isDuplicate.value=true; document.EditView.isSaveAndNew.value=true; document.EditView.return_action.value=\'EditView\'; document.EditView.return_id.value=\'{$fields.id.value}\' ; if(check_form(\'EditView\')) document.EditView.submit(); " type="button" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
                    ),*/
            ),
        'footerTpl' => 'modules/Calls/tpls/footer.tpl',
      ),
      'widths' =>
      array (
        0 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
<script type="text/javascript">{$JSON_CONFIG_JAVASCRIPT}</script>
<script>toggle_portal_flag();function toggle_portal_flag()  {ldelim} {$TOGGLE_JS} {rdelim}
function formSubmitCheck(){ldelim}var duration=true;if(typeof(isValidDuration)!="undefined"){ldelim}duration=isValidDuration();{rdelim}if(check_form(\'EditView\') && duration){ldelim}SUGAR.ajaxUI.submitForm("EditView");{rdelim}{rdelim}</script>',
      'useTabs' => false,
      'tabDefs' =>
      array (
        'LBL_CALL_INFORMATION' =>
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' =>
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' =>
    array (
      'lbl_call_information' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'parent_name',
            'label' => 'LBL_LIST_RELATED_TO',
          ),
          1 =>
          array (
            'name' => 'status',
            'fields' =>
            array (
              0 =>
              array (
                'name' => 'direction',
              ),
              1 =>
              array (
                'name' => 'status',
              ),
            ),
          ),
        ),
        1 =>
          array (
              0 =>
                  array (
                      'name' => 'call_location_c',
                      'studio' => 'visible',
                      'label' => 'LBL_CALL_LOCATION',
                  ),
              1 =>  array (
                  'name' => 'call_type_c',
                  'studio' => 'visible',
                  'label' => 'LBL_CALL_TYPE',
                  'displayParams' =>
                      array ('field' =>
                          array(
                          'onChange' => 'showHideAccompanying()',
                      ))
                      ,
              ),
          ),
          2 =>
              array (
                  0 =>'<input type="hidden" name="adjust_view">',
                  1 => array (
                      'name' => 'accompanying_c',
                      'studio' => 'visible',
                      'label' => 'LBL_ACCOMPANYING',
                      'displayParams' =>
                          array (
                              'readOnly' => 'true',
                          ),
                  ),
              ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'date_start',
            'displayParams' =>
            array (
              'updateCallback' => 'SugarWidgetScheduler.update_time();',
            ),
            'label' => 'LBL_DATE_TIME',
          ),
          1 =>
          array (
            'name' => 'duration_hours',
            'label' => 'LBL_DURATION',
            'customCode' => '{literal}<script type="text/javascript">function isValidDuration() { form = document.getElementById(\'EditView\'); if ( form.duration_hours.value + form.duration_minutes.value <= 0 ) { alert(\'{/literal}{$MOD.NOTICE_DURATION_TIME}{literal}\'); return false; } return true; }</script>{/literal}<input id="duration_hours" name="duration_hours" size="2" maxlength="2" type="text" value="{$fields.duration_hours.value}" onkeyup="SugarWidgetScheduler.update_time();"/>{$fields.duration_minutes.value}&nbsp;<span class="dateFormat">{$MOD.LBL_HOURS_MINUTES}</span>',
          ),
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        5 =>
        array (
          0 =>
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
      'lbl_editview_panel1' =>
      array (
        0 =>
        array (
            0 =>
                array (
                    'customCode' => '{include file="custom/modules/Calls/tpls/productOrder.tpl"}',
                ),
            1 =>
            array (
                'customCode' => '{include file="custom/modules/Calls/tpls/products.tpl"}',
            ),
        ),
      ),
      'lbl_editview_panel2' =>
          array (
              0 =>
                  array (
                      0 =>
                          array (
                              'customCode' => '{include file="custom/modules/Calls/tpls/samples.tpl"}',
                          )
                  ),
          ),
        'lbl_editview_panel3' =>
            array (
                0 =>
                    array (
                        0 =>
                            array (
                                'customCode' => '{include file="custom/modules/Calls/tpls/keyMessages.tpl"}',
                            )
                    ),
            ),
        'Conatcts' =>
            array (
                0 =>
                    array (
                        0 =>
                            array (
                                'customCode' => '{include file="custom/modules/Calls/tpls/contactsInAccount.tpl"}',
                            )
                    ),
            ),
    ),
  ),
);
?>
