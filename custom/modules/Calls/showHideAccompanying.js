function showHideAccompanying(){
if($("#call_type_c").val()=='accompanied_call'){
    addToValidate('EditView','accompanying_c','relate',true,SUGAR.language.get('app_strings','LBL_ACCOMPANYING'));
    $("#accompanying_c_label").parent().show();

}
else {
     addToValidate('EditView','accompanying_c','varchar',true,SUGAR.language.get('app_strings','LBL_ACCOMPANYING'));
    removeFromValidate('EditView','accompanying_c');
    $("#accompanying_c_label").parent().hide();

}
}


$( document ).ready(function() {
    showHideAccompanying();
    $('#call_type_c').bind('change', function(obj) {
        showHideAccompanying();
         console.log('hna');
    });
    
   
    
})