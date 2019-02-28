function showHideAccompanying(){
if($("#call_type_c").val()=='accompanied_call'){
    console.log('ere');
    addToValidate('form_SubpanelQuickCreate_Calls','accompanying_c','relate',true,SUGAR.language.get('app_strings','LBL_ACCOMPANYING'));
    $("#accompanying_c_label").parent().show();
   console.log('after remove')

}
else {
    
    addToValidate('EditView','accompanying_c','relate',true,SUGAR.language.get('app_strings','LBL_ACCOMPANYING'));
    console.log("after adding")
    setTimeout(function(){
    removeFromValidate('form_SubpanelQuickCreate_Calls','accompanying_c');
     $("#accompanying_c_label").parent().hide();
    console.log("remove1")
 }, 2000);
}
}


$( document ).ready(function() {
    showHideAccompanying();
    $('#call_type_c').bind('change', function(obj) {
        showHideAccompanying();
         console.log('hna');
    });
})