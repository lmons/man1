var idProductArray=new Array();
function setHtmlTable(){
    var table=document.getElementById('product-priority');
    $("#product-priority tr").remove();
    idProductArray.forEach(function(element,index) {
        var row = document.createElement('tr');
        var cell1=document.createElement('td');
        var cell2 = document.createElement('td');
        var cell3 = document.createElement('td');
        var freeCell=document.createElement('td');
        cell1.innerHTML="<a id='order' href='#' onclick='changeOrder(" +index+ ");return false'><img src='/scrm/custom/modules/Calls/icon-arrow-up.png' alt='change_order' height='20' width='20'></a>";
        cell2.appendChild(document.createTextNode(index+1));
        cell3.innerHTML=document.getElementById(element).name;
        freeCell.innerHTML="";
        if (index!=0){
            row.appendChild(cell1);
        }
        else{
            row.appendChild(freeCell);
        }
        row.appendChild(cell2);
        row.appendChild(cell3);
        table.appendChild(row)
    });
}
function changeOrder(row){
    var temp=idProductArray[row-1]
    idProductArray[row-1]=idProductArray[row]
    idProductArray[row]=temp
    document.getElementById('Products').setAttribute('value', JSON.stringify(idProductArray));
    setHtmlTable();
}
function deleteKeyMessages(productId){
    $("#product_key_"+productId).remove();
}
function setSelectedProduct(productId){
    if (document.getElementById(productId).checked==true){
        idProductArray.push(productId)
        setHtmlTable();
        addKeyMessages(productId);
    }
    else{
        idProductArray.forEach(function(element,index) {
            if(element==productId){
                idProductArray.splice(index,1)
                    setHtmlTable();
                    deleteKeyMessages(productId);
            }
        })
    }
    document.getElementById('Products').setAttribute('value', JSON.stringify(idProductArray));
}
function validateProduct(){
    if (idProductArray.length==0){
        alert('please choose at least one product')
        return false
    }
    else return true;
}

var idRow = 1;
    function addSample(){

        if(validateSamples()){
            disableSamples();


       // checkIfSamplesInfoCorrect()

        $(".preload").fadeIn();
        var table=document.getElementById('Samples');
        var row = document.createElement('tr');
        row.id="row-"+idRow;
        var cell1=document.createElement('td');
        var cell2 = document.createElement('td');
        var cell3 = document.createElement('td');
        var cell4 = document.createElement('td');

        cell1.innerHTML=" <a href='#' id='delete-'+idRow onclick='deleteSample("+idRow+");return false'><img src='/scrm/custom/modules/Calls/delete.png' height='20' width='20'> </a>";
        cell3.innerHTML="<select name='sample-lot[]' id='sample-lot-"+idRow+"'><option value='null'>-- none --</option></select>"
        cell4.innerHTML="<input name='sample-lot-quantity[]' id='sample-lot-quantity"+idRow+"' class='spinner' name='value' required>";

       var b=new Array();
        var url = 'index.php?to_pdf=1&module=Home&action=getsamplesinfo';
        $.ajax(url).done(function (data) {
            b=JSON.parse(data);
            select=document.createElement('select')
            select.id="sample-"+idRow;
            select.name="sample-name[]";
            select.setAttribute("onchange","chooseSample(this.value,"+idRow+")")
           var noneOpt = document.createElement('option');
            noneOpt.value = "";
            noneOpt.innerHTML = "<option value='null'>-- none --</option>";
            select.appendChild(noneOpt);
            if(b!=null){
                $.each(b, function(groupName, options) {
                    optgroup=document.createElement('optgroup')
                    optgroup.label = groupName;
                    select.appendChild(optgroup);
                    $.each(options, function(i, option) {
                        var option1 =document.createElement('option')
                        option1.textContent = option;
                        option1.value=i;
                        optgroup.appendChild(option1);

                    });
                });
            }
            cell2.appendChild(select)
            row.appendChild(cell1);
            row.appendChild(cell2);
            row.appendChild(cell3);
            row.appendChild(cell4);
            table.appendChild(row);

            window.loadSpinner();
            idRow += 1;
            $(".preload").fadeOut();
        }).fail(function () {

        }).always(function () {
        });
    }
    }
var idKeyRow = 1;
function addKeyMessages(productId){

        // checkIfSamplesInfoCorrect()

        $(".preload").fadeIn();
        var table=document.getElementById('keyMessages');
        var b=new Array();
        var url = 'index.php?entryPoint=getKeyMessages&productId='+productId;
        $.ajax(url).done(function (data) {
            b=JSON.parse(data);
            console.log(b)
            if(b.length>0){
            keyView=[];
            var productRow = document.createElement('tr');
                productRow.id="product_key_"+productId;
                productRow.textContent=document.getElementById(productId).name;
                table.appendChild(productRow);
            $.each(b, function(i, option) {


                var row = document.createElement('tr');
                row.id="key-row-"+idKeyRow;
                var cell1=document.createElement('td');
                var cell2 = document.createElement('td');

                cell1.innerHTML="<input type='checkbox' onclick='checkKeyMessage(\""+option.id+"\")' class='ads_Checkbox' id='"+option.id+"' name='key-messages-name[]' value='"+option.name+"' /><label for='"+option.id+"'>"+option.name+"</label>";
                // cell3.innerHTML="<select name='sample-lot[]' id='sample-lot-"+idRow+"'><option value='null'>-- none --</option></select>"
                //cell4.innerHTML="<input name='sample-lot-quantity[]' id='sample-lot-quantity"+idRow+"' class='spinner' name='value' required>";
                var select=document.createElement('select')
                select.id="reaction-"+option.id;
                select.name="key-messages[]";
                select.setAttribute("onchange","checkKeyMessage(\""+option.id+"\")")
                var options=option.custom_reaction;
                var res = options.split(",");
                $.each(res, function(i, selectOption) {
                    var opt = selectOption;
                    var el = document.createElement("option");
                    el.textContent = opt;
                    el.value = opt;
                    select.appendChild(el);
                });
                cell2.appendChild(select)
                row.appendChild(cell1);
                row.appendChild(cell2);
                productRow.appendChild(row);
                table.appendChild(productRow);
            });
        }
            window.loadSpinner();
            idKeyRow += 1;
            $(".preload").fadeOut();
        }).fail(function () {

        }).always(function () {
        });
}
var idKeyMessagesArray=[];
function checkKeyMessage(keyMessageId){
   if (document.getElementById(keyMessageId).checked==true){
       let obj = idKeyMessagesArray.find(x => x.id === keyMessageId);
let index = idKeyMessagesArray.indexOf(obj);
console.log(index)
if(index>=0){
    idKeyMessagesArray[index]={id:keyMessageId,reaction:document.getElementById("reaction-"+keyMessageId).value};
}
else{
    idKeyMessagesArray.push({id:keyMessageId,reaction:document.getElementById("reaction-"+keyMessageId).value})
}
      
    }
     else{
         let obj = idKeyMessagesArray.find((o, i) => {
    if (o.id === keyMessageId) {
        idKeyMessagesArray.splice(i,1)
    }
});
    }
    document.getElementById('key-messages-reaction').setAttribute('value', JSON.stringify(idKeyMessagesArray));
console.log(idKeyMessagesArray);
}

function deleteSample(rowId){
    $("#row-"+rowId).remove();
}
function chooseSample(sampleId,lineId){
    $(".preload").fadeIn();
    sampleLotSelectId='sample-lot-'+lineId;
    var sampleLotSelect = document.getElementById(sampleLotSelectId);
    var url = 'index.php?to_pdf=1&module=Home&action=sampleslotinfo&record='+sampleId+'&current_module=AOS_Products';
    $.ajax(url).done(function (data) {
        b=JSON.parse(data);
        $('#'+sampleLotSelectId+' option[value!="null"]').remove();
        if(b!=null){
            console.log(b);
            $.each(b, function(i, option) {
                var selectOption = document.createElement("option");
                if(checkIfSamplesInfoCorrect(i)){

                    selectOption.text = option;
                    selectOption.value=i;
                    selectOption.disabled=true;
                    sampleLotSelect.add(selectOption)

                }else{
                    selectOption.text = option;
                    selectOption.value=i;
                    sampleLotSelect.add(selectOption);
                }
                ;
            });
        }
        $(".preload").fadeOut();
    });
}
function loadSpinner(){
        $(".spinner").spinner({
            min: 1,
            max: 10
        });
}
function checkIfSamplesInfoCorrect(optionId){
    console.log(optionId)
    var sampleLotName=document.getElementsByName('sample-lot[]');
    for(var i=0;i<sampleLotName.length;i++){
        console.log(sampleLotName[i].options[sampleLotName[i].selectedIndex].value);
        if(sampleLotName[i].options[sampleLotName[i].selectedIndex].value==optionId)
        {
            return true;
        }

    }
}

$( document ).ready(function() {
    var contentToRemove = document.querySelectorAll("#_label");
    $(contentToRemove).remove();
    $(".preload").fadeOut();
    var form=document.getElementsByName('EditView');
});
function validateSamples() {
    var sampleName=document.getElementsByName('sample-name[]')
    var sampleLotName=document.getElementsByName('sample-lot[]')
    var sampleLotQuantity=document.getElementsByName('sample-lot-quantity[]')
    for(var i=0;i<sampleName.length;i++){
        if(sampleName[i].options[sampleName[i].selectedIndex].value==''){
            document.getElementById(sampleName[i].id).focus();
                document.getElementById(sampleName[i].id).style.background = "red";
            setTimeout(function background() {
                document.getElementById(sampleName[i].id).style.background = "white";
            },2000);
            alert('please complete information or delete line if it is not useful')
            return false;
        }
        else if(sampleLotName[i].options[sampleLotName[i].selectedIndex].value=='null'){
            document.getElementById(sampleLotName[i].id).focus();
            document.getElementById(sampleLotName[i].id).style.background = "red";
            setTimeout(function background() {
                document.getElementById(sampleLotName[i].id).style.background = "white";
            },2000);
            alert('please complete information or delete line if it is not useful')
            return false;
        }
        else if(sampleLotQuantity[i].value==''){
            document.getElementById(sampleLotQuantity[i].id).focus();
            document.getElementById(sampleLotQuantity[i].id).style.background = "red";
            setTimeout(function background() {
                document.getElementById(sampleLotQuantity[i].id).style.background = "white";
            },2000);
            alert('please complete information or delete line if it is not useful')
            return false;
        }

    }
    return true;
}

//overriding the check_form function in: /include/javascript/sugar_3.js to integrate our samplesformvalidation before save or submit
function check_form(formname) {
    if (typeof(siw) != 'undefined' && siw && typeof(siw.selectingSomething) != 'undefined' && siw.selectingSomething)
        return false;
    bValid = validate_form(formname,'');
    if(!bValid) return false;
    if(!validateSamples()) return false;
    if(!validateProduct()) return false;
    enableSamples();
    return true;
}
function disableSamples() {

    var sampleName = document.getElementsByName('sample-name[]')
    var sampleLotName = document.getElementsByName('sample-lot[]')
    var sampleLotQuantity = document.getElementsByName('sample-lot-quantity[]')
    for (var i = 0; i < sampleName.length; i++) {
        sampleName[i].disabled = 'true'
        sampleLotName[i].disabled = 'true'
        $( ".spinner" ).spinner( "disable" );
    }
}
function chooseReaction(sampleId,lineId){
//alert(lineId)
}
function enableSamples() {

    var sampleName = document.getElementsByName('sample-name[]')
    var sampleLotName = document.getElementsByName('sample-lot[]')
    var sampleLotQuantity = document.getElementsByName('sample-lot-quantity[]')
    for (var i = 0; i < sampleName.length; i++) {
        sampleName[i].disabled = false
        sampleLotName[i].disabled = false
        $( ".spinner" ).spinner( "enable" );
    }
}