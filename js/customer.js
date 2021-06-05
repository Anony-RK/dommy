



// var number =  Math.round(Math.random()*(75-25+1)) + 25;


//  $("#customerid").val("ABC"+number);

$(document).ready(function () {
  //customer Name
  $("#customernamecheck").hide();
  let customernameerror = true;
  $("#customername").keyup(function () {
    customername();
  });
  function customername() {
    let customernameValue = $("#customername").val();
    if (customernameValue == "") {
      $("#customernamecheck").show();
      customernameerror = false;
      return false;
    } else {
      $("#customernamecheck").hide();
      customernameerror = true;
    }
  }



  //gender
  $("#gendercheck").hide();
  let gendererror = true;
  $("#gender").keyup(function () {
    gender();
  });
  function gender() {
    let genderValue = $("#gender").val();
    if (genderValue == "") {
      $("#gendercheck").show();
      gendererror = false;
      return false;
    } else {
      $("#gendercheck").hide();
      gendererror = true;
    }
  }

  //dateofbirth
  $("#dateofbirthcheck").hide();
  let dateofbirtherror = true;
  $("#dateofbirth").keyup(function () {
    dateofbirth();
  });
  function dateofbirth() {
    let dateofbirthValue = $("#dateofbirth").val();
    if (dateofbirthValue == "") {
      $("#dateofbirthcheck").show();
      dateofbirtherror = false;
      return false;
    } else {
      $("#dateofbirthcheck").hide();
      dateofbirtherror = true;
    }
  }


  //age
  $("#agecheck").hide();
  let ageerror = true;
  $("#age").keyup(function () {
    age();
  });
  function age() {
    let ageValue = $("#age").val();
    if (ageValue == "") {
      $("#agecheck").show();
      ageerror = false;
      return false;
    } else {
      $("#agecheck").hide();
      ageerror = true;
    }
  }




  //  //mobilenumber
  //  $("#mobilenumbercheck").hide();
  //  let mobilenumbererror = true;
  //  $("#mobilenumber").keyup(function () {
  //    mobilenumber();
  //  });
  //  function mobilenumber() {
  //    let mobilenumberValue = $("#mobilenumber").val();
  //    if (mobilenumberValue == "" || mobilenumberValue < 10) {

  //      $("#mobilenumbercheck").show();
  //      mobilenumbererror = false;
  //      return false;
  //    } else if(mobilenumberValue == 10) {
  //      $("#mobilenumbercheck").hide();
  //      mobilenumbererror = true;
  //    }
  //  }

   // Validate Mobilenumber
$('#mobilenumbercheck').hide();	
let mobilenumbererror = true;
$('#mobilenumber').keyup(function () {			
	mobilenumber();
});
function mobilenumber() {
	let mobilenumberValue = $('#mobilenumber').val();

	var letters = /^[0-9]+$/;
	if(!(mobilenumberValue.match(letters)) || mobilenumberValue.length>10 || mobilenumberValue.length<10)
	{
	
			$('#mobilenumbercheck').show();
			mobilenumbererror = false;
				return false;
	}	
	else {
		$('#mobilenumbercheck').hide();
		mobilenumbererror = true;
	
	}
}


     //whatsappnumber
     $("#whatsappnumbercheck").hide();
     let whatsappnumbererror = true;
     $("#whatsappnumber").keyup(function () {
       whatsappnumber();
     });
     function whatsappnumber() {
       let whatsappnumberValue = $("#whatsappnumber").val();
       if (whatsappnumberValue == "") {
         $("#whatsappnumbercheck").show();
         whatsappnumbererror = false;
         return false;
       } else {
         $("#whatsappnumbercheck").hide();
         whatsappnumbererror = true;
       }
     }



        //anniverserydate
        $("#anniverserydatecheck").hide();
        let anniverserydateerror = true;
        $("#anniverserydate").keyup(function () {
          anniverserydate();
        });
        function anniverserydate() {
          let anniverserydateValue = $("#anniverserydate").val();
          if (anniverserydateValue == "") {
            $("#anniverserydatecheck").show();
            anniverserydateerror = false;
            return false;
          } else {
            $("#anniverserydatecheck").hide();
            anniverserydateerror = true;
          }
        }


        

        //needmembership
        $("#needmembershipcheck").hide();
        let needmembershiperror = true;
        $("#needmembership").keyup(function () {
          needmembership();
        });
        function needmembership() {
          let needmembershipValue = $("#needmembership").val();
          if (needmembershipValue == "") {
            $("#needmembershipcheck").show();
            needmembershiperror = false;
            return false;
          } else {
            $("#needmembershipcheck").hide();
            needmembershiperror = true;
          }
        }


        
        //customerimage
        $("#customerimagecheck").hide();
        let customerimageerror = true;
        $("#customerimage").keyup(function () {
          customerimage();
        });
        function customerimage() {
          let customerimageValue = $("#customerimage").val();
          if (customerimageValue == "") {
            $("#customerimagecheck").show();
            customerimageerror = false;
            return false;
          } else {
            $("#customerimagecheck").hide();
            customerimageerror = true;
          }
        }




         //typeofcustomer
         $("#typeofcustomercheck").hide();
         let typeofcustomererror = true;
         $("#typeofcustomer").keyup(function () {
           typeofcustomer();
         });
         function typeofcustomer() {
           let typeofcustomerValue = $("#typeofcustomer").val();
           if (typeofcustomerValue == "") {
             $("#typeofcustomercheck").show();
             typeofcustomererror = false;
             return false;
           } else {
             $("#typeofcustomercheck").hide();
             typeofcustomererror = true;
           }
         }



           //noofvisit
           $("#noofvisitcheck").hide();
           let noofvisiterror = true;
           $("#noofvisit").keyup(function () {
             noofvisit();
           });
           function noofvisit() {
             let noofvisitValue = $("#noofvisit").val();
             if (noofvisitValue == "") {
               $("#noofvisitcheck").show();
               noofvisiterror = false;
               return false;
             } else {
               $("#noofvisitcheck").hide();
               noofvisiterror = true;
             }
           }


           


           //frequencyofvisit
           $("#frequencyofvisitcheck").hide();
           let frequencyofvisiterror = true;
           $("#frequencyofvisit").keyup(function () {
             frequencyofvisit();
           });
           function frequencyofvisit() {
             let frequencyofvisitValue = $("#frequencyofvisit").val();
             if (frequencyofvisitValue == "") {
               $("#frequencyofvisitcheck").show();
               frequencyofvisiterror = false;
               return false;
             } else {
               $("#frequencyofvisitcheck").hide();
               frequencyofvisiterror = true;
             }
           }

           $('#gstno').keyup(function () {
            this.value = this.value.toUpperCase();
        });
        function GSTCheck() {
            var regex2 = /^([0-9]){2}([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}([0-9]){1}([a-zA-Z]){1}([a-zA-Z0-9]){1}?$/; //this is the pattern of GST No expersion
            var a = document.getElementById('gstno').value;
            if (a != null && a != "") {
                if (regex2.test(a) == false) {
                    $("#gstnocheck").show();
                    $("#gstno").val('');
                    return false;
                }
                else {
                    $("#stnocheck").hide();
                }
            }
        }
        $("#gstno").blur(function () {
            GSTCheck();
        });

   //gstno
   $("#gstnocheck").hide();
   let gstnoerror = true;
   $("#gstno").keyup(function () {
     gstno();
   });
   function gstno() {
     let gstnoValue = $("#gstno").val();
     if (gstnoValue == "") {
       $("#gstnocheck").show();
       gstnoerror = false;
       return false;
     } else {
       $("#gstnocheck").hide();
       gstnoerror = true;
     }
   }


   //contactpersion
   $("#contactpersioncheck").hide();
   let contactpersionerror = true;
   $("#contactpersion").keyup(function () {
     contactpersion();
   });
   function contactpersion() {
     let contactpersionValue = $("#contactpersion").val();
     if (contactpersionValue == "") {
       $("#contactpersioncheck").show();
       contactpersionerror = false;
       return false;
     } else {
       $("#contactpersioncheck").hide();
       contactpersionerror = true;
     }
   }
   


     //address1
     $("#address1check").hide();
     let address1error = true;
     $("#address1").keyup(function () {
       address1();
     });
     function address1() {
       let address1Value = $("#address1").val();
       if (address1Value == "") {
         $("#address1check").show();
         address1error = false;
         return false;
       } else {
         $("#address1check").hide();
         address1error = true;
       }
     }


       //address2
       $("#address2check").hide();
       let address2error = true;
       $("#address2").keyup(function () {
         address2();
       });
       function address2() {
         let address2Value = $("#address2").val();
         if (address2Value == "") {
           $("#address2check").show();
           address2error = false;
           return false;
         } else {
           $("#address2check").hide();
           address2error = true;
         }
       }


       

      //  //pincode
      //  $("#pincodecheck").hide();
      //  let pincodeerror = true;
      //  $("#pincode").keyup(function () {
      //    pincode();
      //  });
      //  function pincode() {
      //    let pincodeValue = $("#pincode").val();
      //    if (pincodeValue == "") {
      //      $("#pincodecheck").show();
      //      pincodeerror = false;
      //      return false;
      //    } else {
      //      $("#pincodecheck").hide();
      //      pincodeerror = true;
      //    }
      //  }
   // pincode
   $('#pincodecheck').hide();	
   let pincodeerror = true;
   $('#pincode').keyup(function () {			
    pincode();
   });
   function pincode() {
     let pincodeValue = $('#pincode').val();
   
     var letters = /^[0-9]+$/;
     if(!(pincodeValue.match(letters)) || pincodeValue.length>6 || pincodeValue.length<6)
     {
     
         $('#pincodecheck').show();
         pincodeerror = false;
           return false;
     }	
     else {
       $('#pincodecheck').hide();
       pincodeerror = true;
     
     }
   }

    //country
    $("#countrycheck").hide();
    let countryerror = true;
    $("#countySel").keyup(function () {
      country();
    });
    function country() {
      let countryValue = $("#countySel").val();
      if (countryValue == "") {
        $("#countrycheck").show();
        countryerror = false;
        return false;
      } else {
        $("#countrycheck").hide();
        countryerror = true;
      }
    }


        //state
        $("#statecheck").hide();
        let stateerror = true;
        $("#stateSel").keyup(function () {
          state();
        });
        function state() {
          let stateValue = $("#stateSel").val();
          if (stateValue == "") {
            $("#statecheck").show();
            stateerror = false;
            return false;
          } else {
            $("#statecheck").hide();
            stateerror = true;
          }
        }

 //district
 $("#districtcheck").hide();
 let districterror = true;
 $("#districtSel").keyup(function () {
   district();
 });
 function district() {
   let districtValue = $("#districtSel").val();
   if (districtValue == "") {
     $("#districtcheck").show();
     districterror = false;
     return false;
   } else {
     $("#districtcheck").hide();
     districterror = true;
   }
 }
        
        //subgroup
        $("#subgroupcheck").hide();
        let subgrouperror = true;
        $("#subgroup").keyup(function () {
          subgroup();
        });
        function subgroup() {
          let subgroupValue = $("#subgroup").val();
          if (subgroupValue == "") {
            $("#subgroupcheck").show();
            subgrouperror = false;
            return false;
          } else {
            $("#subgroupcheck").hide();
            subgrouperror = true;
          }
        }


         //group
         $("#groupcheck").hide();
         let grouperror = true;
         $("#group").keyup(function () {
           group();
         });
         function group() {
           let groupValue = $("#group").val();
           if (groupValue == "") {
             $("#groupcheck").show();
             grouperror = false;
             return false;
           } else {
             $("#groupcheck").hide();
             grouperror = true;
           }
         }


            //  //group
            //  $("#customeridcheck").hide();
            //  let customeriderror = true;
            //  $("#customerid").keyup(function () {
            //    customerid();
            //  });
            //  function customerid() {
            //    let customeridValue = $("#customerid").val();
            //    if (customeridValue == "") {
            //      $("#customeridcheck").show();
            //      customeriderror = false;
            //      return false;
            //    } else {
            //      $("#customeridcheck").hide();
            //      customeriderror = true;
            //    }
            //  }
    

  // Validate email
  $("#emailidcheck").hide();
  let emailiderror = true;
  $("#emailid").keyup(function () {
    validateemail();
  });
  function validateemail() {
    var $email = $('form input[name="emailid'); //change form to id or containment selector
    var re =
      /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if ($email.val() == "" || !re.test($email.val())) {
      $("#emailcheck").show();
      emailiderror = false;
      return false;
    } else {
      $("#emailcheck").hide();
      emailiderror = true;
    }
  }


  $("#customerdownload").click(function () {
		window.location.href='uploads/downloadfiles/customerformat.xlsx'
	});

  $('#submitcustomer').click(function () {	
    
    customername();
    gender();
    dateofbirth();
    age();
    mobilenumber();
    anniverserydate();
    whatsappnumber();
    needmembership();
    gstno();
    country();
    state();
    address1();
    address2();
    pincode();
    contactpersion();
    district();
    customerimage();
    typeofcustomer();
    noofvisit();
    validateemail();
    frequencyofvisit();
    if (customernameerror == true 
     
        && gendererror == true 
        && dateofbirtherror == true 
        && ageerror == true 
        && gsterror ==true
        && contactpersionerror ==true
        && address1error ==true
        && address2error ==true
        && pincode2error ==true
        && mobilenumbererror == true
        && whatsappnumbererror == true
        && anniverserydateerror == true
        && needmembershiperror == true
        && countryerror ==true
        && stateerror == true
        && districterror == true
        && customerimageerror == true
        && typeofcustomererror == true
        && noofvisiterror == true
        && frequencyofvisiterror == true
        && emailiderror == true
        )
      {
        return true;
      } 
      else 
      {
        return false;
      }
});

$('#mobilenumber').mask('9999999999');
$('#pincode').mask('999999');


$("#employeedownload").click(function () {
    window.location.href='uploads/downloadfiles/employeebulksample.xlsx'
    });

});

$("#typeofcustomers").each(function () {

  if ($(this).val() != null && $(this).val() != "") {

      StockCategoryListArray.push($(this).val());

  }
});
$("#TypeofCustomer").val(StockCategoryListArray);


function customerBulkupload(){
    var modal = document.getElementById("BulkUploadModal");
    var btn = document.getElementById("customerupload");
    var span = document.getElementsByClassName("bulkclose")[0];
    btn.onclick = function() {
      modal.style.display = "block";
    }
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    }

    
  // State, Country,district Select option 

 
