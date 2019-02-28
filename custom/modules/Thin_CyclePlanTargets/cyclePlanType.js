$(document).ready(function () {
    $("#cpt_type_c").change(function () {
        $("#btn_thin_cycleplans_thin_cycleplantargets_name").attr("onclick", "open_popup('Thin_CyclePlans',600,400,'&cp_type_c_advanced=" + this.value + "&currentModule=cyclePlanTarget',true,false,{'call_back_function':'set_return','form_name':'EditView','field_to_name_array':{'id':'thin_cycleplans_thin_cycleplantargetsthin_cycleplans_ida','name':'thin_cycleplans_thin_cycleplantargets_name'}},'single',true)");
    });
});