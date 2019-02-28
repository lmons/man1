YAHOO.util.Event.onDOMReady(function () {
    console.log("here")
        console.log('mlk')
        YAHOO.util.Event.addListener('parent_id', 'change', function () {
            if (document.getElementById('parent_type').value == 'Contacts') {
                id_contact=this.value
                console.log(id_contact)
                 YAHOO.util.Connect.asyncRequest('GET', 'API/ContactDefaultAccount.php?id_medecin=' + this.value, {
                    success: function (o) {
                        var jsonResponse = JSON.parse(o.responseText);
                        jsonResponse.entry_list.forEach(function (element, value) {
                            id_account = element.name_value_list.account_id.value;
                        });
                        console.log(this.value)
                         YAHOO.util.Connect.asyncRequest('GET', 'API/ContactRelatedAccount.php?id_medecin=' + id_contact, {
                    success: function (o) {
                        var jsonResponse1 = JSON.parse(o.responseText);
                        var x = document.getElementById('call_location_c');
                        console.log(jsonResponse1);
                         var callLocationId =id_account;
                        x.innerHTML = '';
                        jsonResponse1.entry_list.forEach(function (element, value) {
                            var option = document.createElement('option');
                            option.label = element.name_value_list.name.value;
                            option.text = element.name_value_list.name.value;
                            option.value = element.name_value_list.id.value;
                            console.log(callLocationId)
                            console.log(element.name_value_list.id.value);
                           if(callLocationId!=="" && callLocationId==element.name_value_list.id.value){
                                option.setAttribute('selected', 'selected');
                           }
                            x.add(option);
                            //x.add(options[i]=.labelelement.name_value_list.name.value);
                        });
                    },
                    failure: function (o) {
                    }
                });
                    },
                    failure: function (o) {
                    }
                });
            }
            else {
                YAHOO.util.Connect.asyncRequest('GET', 'API/AccountRelatedContacts.php?id_account=' + this.value, {
                    success: function (o) {
                        var jsonResponse = JSON.parse(o.responseText);
                        cols = 6;
                        colsIndex = 0;
                        counter = 0
                        rowByCols = Math.ceil(jsonResponse.entry_list.length / cols);
                        if (rowByCols !== 0) {
                            for (var i = 0; i < rowByCols; i++) {
                                $('#contactInAccount').append('<tr></tr>');
                                for (var j = colsIndex; j < colsIndex + cols; j++) {
                                    if (typeof(jsonResponse.entry_list[i + j]) != 'undefined') {
                                        $('#contactInAccount').find('tr').eq(i).append('<td><input type="checkbox" id="' + jsonResponse.entry_list[i + j].name_value_list.id.value + '" value="' + jsonResponse.entry_list[i + j].name_value_list.id.value + '" name="contacts-in-account[]">' + jsonResponse.entry_list[i + j].name_value_list.name.value + '</td>');
                                        $('#contactInAccount').find('tr').eq(i).find('td').eq(j).attr('data-row', i).attr('data-col', j);
                                        counter++;
                                    }

                                }
                                colsIndex = counter;
                            }
                        }
                    },
                    failure: function (o) {
                    }
                });
            }
        });
    
    var event = new Event('change');
    document.getElementById('parent_id').dispatchEvent(event);


});
