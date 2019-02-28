function AcceptTM(param){
   var  bool=false;
   $.ajax({
        url: 'index.php?to_pdf=1&module=Meetings&action=AcceptDecline',
        type: 'POST',
        async: false,
        // dataType: 'json',
        data: {'idTM':param.id,'status':'Accept'},
        success: function(data){
            if (data){$.ajax({
                url: 'index.php?to_pdf=1&module=Meetings&action=listview',
                type: 'POST',
                async: false,
                // dataType: 'json',
                data: {},
                success: function(data1){

                     console.log(data1);
                    $(".listViewBody").html(data1);

                }
            });
                //$(param).closest('tr').remove();
            }
            else alert('error');
        }
    });

    return false;
}
function DeclineTM(param) {
    var  bool=false;
    SUGAR.ajaxUI.showLoadingPanel();
    $.ajax({
        url: '/index.php?to_pdf=1&module=Meetings&action=AcceptDecline',
        type: 'POST',
        async: false,
        // dataType: 'json',
        data: {'idTM':param.id,'status':'Decline'},
        success: function(data){
            if (data){$.ajax({
                url: '/index.php?to_pdf=1&module=Meetings&action=listview',
                type: 'POST',
                async: false,
                // dataType: 'json',
                data: {},
                success: function(data1){

                    //  console.log(data1);
                    $(".listViewBody").html(data1);

                    SUGAR.ajaxUI.hideLoadingPanel(); }
            });
                //$(param).closest('tr').remove();
            }
            else alert('error');
        }
    });

    return false;
}
