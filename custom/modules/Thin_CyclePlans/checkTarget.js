
var idContactArray= new Array();
function getCheckedTargets(idContact,idTarget){
    var jsonArray= new Object();
    jsonArray.idContact=idContact;
    jsonArray.idTarget=idTarget;
    jsonArray.name=document.getElementById(idContact).value;

    if (document.getElementById(idContact).checked==true){
        idContactArray.push(jsonArray)
        console.log(idContactArray)
    }
    else{
        idContactArray.forEach(function(element,index) {
            if(element.idContact==idContact){
                console.log(element.idContact)
                console.log(idContactArray)
                idContactArray.splice(index,1)
            }
        })
    }
    //insert json data in hidden field
    document.getElementById('contactAndTargets').setAttribute('value', JSON.stringify(idContactArray));
}

var idAccountArray= new Array();
function getCheckedAccountsTargets(idAccount,idTarget){
    var jsonArray= new Object();
    jsonArray.idAccount=idAccount;
    jsonArray.idTarget=idTarget;
    jsonArray.name=document.getElementById(idAccount).value;

    if (document.getElementById(idAccount).checked==true){
        idAccountArray.push(jsonArray)
    }
    else{
        idAccountArray.forEach(function(element,index) {
            if(element.idAccount==idAccount){
                console.log(element.idAccount)
                console.log(idAccountArray)
                idAccountArray.splice(index,1)
            }
        })
    }
    //insert json data in hidden field
    document.getElementById('accountAndTargets').setAttribute('value', JSON.stringify(idAccountArray));
}