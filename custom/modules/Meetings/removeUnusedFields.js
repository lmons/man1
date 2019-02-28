$( document ).ready(function() {

    function myFunction1() {
        alert("I am an alert box!");
    }


   $('#parent_type').find('option[value!="Accounts"][value!="Contacts"]').remove()
    $('#date_start_time_section').hide()
    $('#date_end_time_section').hide()
    $('#date_end_date').hide()
    $('#date_end_trigger').hide()
    //$('#date_end_label').hide()
   // $('#status').attr('disabled', 'disabled');
   if ($("#duration_hours").val()=="12" && $("#date_start_hours").val()=="00"){
       $("#duration").val('43200_AM');
    }
    else if($("#duration_hours").val()=="12" && $("#date_start_hours").val()=="12"){
       $("#duration").val('43200_PM');
   }
    else $("#duration").val($("#duration_hours").val()*3600);
});