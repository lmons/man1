$( document ).ready(function() {
    function showHideAccountContactDependency(){
        if($('#parent_type').val()=='Contacts'){
            $("#call_location_c").parent().show();
            $("#call_location_c_label").show();
            $("#detailpanel_5").hide();
        }
        if($('#parent_type').val()=='Accounts'){
            $("#detailpanel_5").show();
            $("#call_location_c").parent().hide();
            $("#call_location_c_label").hide();
        }
    }
   // removeFromValidate('EditView','accompanying_c')
   showHideAccountContactDependency();
    $('#parent_type').bind('change', function(obj) {
        showHideAccountContactDependency()
    });
    $('#parent_type').find('option[value!="Accounts"][value!="Contacts"]').remove()
    $('#direction').remove()
    $('#status').attr('disabled', 'disabled');
   // if($("#call_type_c").val()!=='accompanied_call'){
     //   $("#accompanying_c_label").parent().hide();
//    }

});