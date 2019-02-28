/**
 * Created by dev on 03/04/2017.
 */
function getSubmittedMeeting(){
    var duration=$('#duration').val();
    var dateStart=new Date($('#date_start_date').val())
    var endDate=new Date($('#date_start_date').val())
    if (duration=='43200_AM'){
        var dateStart= new Date(dateStart.getFullYear(),dateStart.getMonth(),dateStart.getDate(),dateStart.getHours());
        var endDate= new Date(endDate.getFullYear(),endDate.getMonth(),endDate.getDate(),endDate.getHours(),endDate.getMinutes(),endDate.getSeconds()+43199);
console.log(dateStart)
        console.log(endDate);
    }
    else if(duration=='43200_PM'){
        var dateStart= new Date(dateStart.getFullYear(),dateStart.getMonth(),dateStart.getDate(),dateStart.getHours(),dateStart.getMinutes(),dateStart.getSeconds()+43199);
        var endDate= new Date(endDate.getFullYear(),endDate.getMonth(),endDate.getDate(),endDate.getHours(),endDate.getMinutes(),endDate.getSeconds()+43199);
    }
    else{

        var dateStart= new Date(dateStart.getFullYear(),dateStart.getMonth(),dateStart.getDate(),dateStart.getHours());
        var endDate= new Date(endDate.getFullYear(),endDate.getMonth(),endDate.getDate(),endDate.getHours(),endDate.getMinutes(),endDate.getSeconds()+(duration-1));
    }

    var bool = false;
         $.ajax({
            url: 'index.php?to_pdf=1&module=Meetings&action=checkSubmittedMeeting',
            type: 'POST',
            async: false,
            // dataType: 'json',
             data: {'startDate':moment(dateStart).format('YYYY-MM-DD HH:mm:ss'),'endDate':moment(endDate).format('YYYY-MM-DD HH:mm:ss')},
            success: function(data){
                b=JSON.parse(data);
                if(b.numberOfSubmittedMetting==0){
                    bool=true;
                }
                else bool=false;
            }
        });
return bool;
}

function check_form(formname) {
   if (typeof(siw) != 'undefined' && siw && typeof(siw.selectingSomething) != 'undefined' && siw.selectingSomething)
       return false;
    bValid = validate_form(formname,'');
   if(!bValid) return false;
    var currentModule=$('#current_module').val()
    if(currentModule==='Meetings') {
        if (!getSubmittedMeeting()) {
            alert('you can submit TM that cross another one');
            return false;
        }
    }return true;
}