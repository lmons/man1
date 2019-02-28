function checkInCyclePlan(){
    var parentType=$('#parent_type').val()
    var parentId=$('#parent_id').val()
    var dateStart=new Date($('#date_start').val())
    dateStart= new Date(dateStart.getFullYear(),dateStart.getMonth(),dateStart.getDate());
    dateStart=moment(dateStart).format('MM-DD-YYYY');

    var bool = false;
    $.ajax({
        url: 'index.php?to_pdf=1&module=Calls&action=checkincycleplan',
        type: 'POST',
        async: false,
        // dataType: 'json',
        data: {'startDate':dateStart,'callModule':parentType,'parentId':parentId},
        success: function(data){
            console.log("cycle"+data)
            if(data=='true'){
                bool=true;
            }
            else bool=false;
        }
    });

    return bool;
}
function checkInRestriction(){
    var dateStart=new Date($('#date_start').val())
    var submitDate=moment(dateStart).format('MM-DD-YYYY HH:mm');
    var submitMidnightDate=moment(submitDate).endOf('days').format('MM-DD-YYYY HH:mm');
    var lastDayOfMonthDate=moment(submitDate).endOf('months').format('MM-DD-YYYY HH:mm');
    var status=$('#status').val()
    console.log(status)
    var bool = false;
    $.ajax({
        url: 'index.php?to_pdf=1&module=Calls&action=checksubmitinterval',
        type: 'POST',
        async: false,
        data: {},
        success: function(data){
            var obj=JSON.parse(data);
            console.log(obj);
            var currentDay=moment(obj.time).format('MM-DD-YYYY HH:mm');
            var hour=obj.submitConf.hours;
            var weeks=obj.planConf.weeks;
            var months=obj.planConf.months;
            var firstDays=obj.planConf.nextWeek;
            var restrictedDate=moment(submitMidnightDate).add(hour,'hours').format('MM-DD-YYYY HH:mm');
            var lastDayOfWeekDate=moment(currentDay).endOf('isoWeek').format('MM-DD-YYYY HH:mm');
            var lastDayOfMonthDate=moment(currentDay).endOf('months').format('MM-DD-YYYY HH:mm');
            var restrictedWeekStartDate=moment(lastDayOfWeekDate).add((weeks-1),'weeks').format('MM-DD-YYYY HH:mm');
            var restrictedWeekEndDate=moment(lastDayOfWeekDate).add(weeks,'weeks').format('MM-DD-YYYY HH:mm');
            var restrictedMonthStartDate=moment(lastDayOfMonthDate).add((months-1),'months').format('MM-DD-YYYY HH:mm');
            var restrictedMonthEndDate=moment(lastDayOfMonthDate).add(months,'months').format('MM-DD-YYYY HH:mm');
            var NumberOfCurrentDay=moment(currentDay).day();
            console.log('crosslastdays '+checkIfCrossLastDays(NumberOfCurrentDay,submitDate,firstDays,lastDayOfWeekDate,weeks))
            console.log('week '+checkIfInWeekConf(submitDate,restrictedWeekStartDate))
            console.log('month '+checkIfInMonthConf(submitDate,restrictedMonthStartDate))

            if(obj.submitConf.enable_restriction_submit && status=='Held'){
                if(restrictedDate<=currentDay || submitDate>currentDay){
                    bool=false;
                }
                else{
                    console.log('here true')
                    bool=true;
                }
            }
           else if(obj.planConf.enable_restriction_plan_adv && obj.planConf.enable_restriction_plan && obj.planConf.nextWeek!='' && status=='Planned' && checkIfCrossLastDays(NumberOfCurrentDay,submitDate,firstDays,lastDayOfWeekDate,weeks)){
              console.log("2");
                bool= true;
            }
           else if(obj.planConf.enable_restriction_plan && status=='Planned' && obj.planConf.weeks!='' && checkIfInWeekConf(submitDate,restrictedWeekStartDate)) {

                   bool= true;
                }
                else if(obj.planConf.enable_restriction_plan && status=='Planned'&& obj.planConf.months!='' && checkIfInMonthConf(submitDate,restrictedMonthStartDate)){
                   bool=true;
                }
            else if(!obj.planConf.enable_restriction_plan_adv && !obj.planConf.enable_restriction_plan && status=='Planned'){
                bool=true;
            }
            else if(!obj.submitConf.enable_restriction_submit && status=='Held'){
                bool=true;
            }
            else {
                console.log('issue here')
                bool=false;
            }
        }
    });
    console.log(bool);
return bool;
}
function checkIfInWeekConf(submitDate,restrictedWeekStartDate){
    if((submitDate>=restrictedWeekStartDate)){
        return true;
    }
        else{
            return false;
        }
}
function checkIfInMonthConf(submitDate,restrictedMonthStartDate){
    if((submitDate>=restrictedMonthStartDate)){
        return true;
    }
    else{
        return false;
    }
}
function checkIfCrossLastDays(NumberOfCurrentDay,submitDate,firstDays,lastDayOfWeekDate,weeks){
     if(NumberOfCurrentDay<=firstDays && submitDate>=(moment(lastDayOfWeekDate).add((weeks-1),'weeks').format('MM-DD-YYYY HH:mm'))){
        return true;
    }
    else{
        return false;
    }
}
function check_form(formname) {
    //console.log()
    if (typeof(siw) != 'undefined' && siw && typeof(siw.selectingSomething) != 'undefined' && siw.selectingSomething)
        return false;
    bValid = validate_form(formname,'');
    if(!bValid) return false;
    var currentModule=$('#current_module').val()
    //console.log(checkInCyclePlan)
    if(currentModule==='Calls'|| currentModule==='Home'){
        console.log(checkInRestriction());
        if(!checkInRestriction()) {
            alert('you can not submit a call in this date');
            return false;}
        else if (!checkInCyclePlan()){
            alert('you can not make a call to a professionals that is not in your cycle plan');
            return false;
        }
    }
        return true; 
   
}