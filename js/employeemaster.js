$(document).ready(function () {

    // $('#employeecodecheck').hide();	
    // let employeecodeerror = true;
    // $('#employeecode').keyup(function () {			
    //     validateemployeecode();
    // });
    
    // function validateemployeecode() {
    //     let employeecodeValue = $('#employeecode').val();
    //     if (employeecodeValue == '') {
    //     $('#employeecodecheck').show();
    //     employeecodeerror = false;
    //         return false;
    //     }	
    //     else {
    //         $('#employeecodecheck').hide();
    //         employeecodeerror = true;	
    //     }
    //     }

		// employeename
		$('#employeenamecheck').hide();	
		let employeenameerror = true;
		$('#employeename').keyup(function () {			
			validateemployeename();
		});
		function validateemployeename() {
			let employeenameValue = $('#employeename').val();
			if (employeenameValue == '') {
			$('#employeenamecheck').show();
			employeenameerror = false;
				return false;
			}	
			else {
				$('#employeenamecheck').hide();
				employeenameerror = true;	
			}
			}


			// date of birth
	// $('#dateofbirthcheck').hide();	
	// let dateofbirtherror = true;
	// $('#dateofbirth').keyup(function () {			
	// 	validatedateofbirth();
	// });
	// function validatedateofbirth() {
	// 	let dateofbirthValue = $('#dateofbirth').val();
	// 	if (dateofbirthValue == '') {
	// 	$('#dateofbirthcheck').show();
	// 	dateofbirtherror = false;
	// 		return false;
	// 	}	
	// 	else {
	// 		$('#dateofbirthcheck').hide();
	// 		dateofbirtherror = true;	
	// 	}
	// 	}

		
	// gender
	$('#gendercheck').hide();	
	let gendererror = true;
	$('#gender').keyup(function () {			
		validategender();
	});
	function validategender() {
		let genderValue = $('#gender').val();
		if (genderValue == '') {
		$('#gendercheck').show();
		gendererror = false;
			return false;
		}	
		else {
			$('#gendercheck').hide();
			gendererror = true;	
		}
		}


// var email=document.getElementById('email').value;
// var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z]+(?:\.[a-zA-Z0-9-]+)*$/;

// // Validate email
// $('#emailcheck').hide();	
// let emailError = true;
// $('#email').keyup(function () {			
// 	validateemail();
// });
// function validateemail() {
// var $email = $('form input[name="email'); //change form to id or containment selector
// var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
// if ($email.val() == '' || !re.test($email.val()))
// {

// 	$('#emailcheck').show();
// 	emailError = false;
// 	return false;
// }
// else
// {
// 	$('#emailcheck').hide();
// 	emailError = true;
// }	
// }


// designation
$('#designationcheck').hide();	
let designationerror = true;
$('#designation').keyup(function () {			
	validatedesignation();
});
function validatedesignation() {
	let designationValue = $('#designation').val();
	if (designationValue == '') {
	$('#designationcheck').show();
	designationerror = false;
		return false;
	}	
	else {
		$('#designationcheck').hide();
		designationerror = true;	
	}
	}



		
// mobilenumber
$('#mobilenumbercheck').hide();	
let mobilenumbererror = true;
$('#mobilenumber').keyup(function () {			
	validatemobilenumber();
});
function validatemobilenumber() {
	let mobilenumberValue = $('#mobilenumber').val();
	$("#contact").val(mobilenumberValue);
	if (mobilenumberValue == '') {
	$('#mobilenumbercheck').show();
	mobilenumbererror = false;
		return false;
	}	
	else {
		$('#mobilenumbercheck').hide();
		mobilenumbererror = true;	
	}
	}


	// dateofjoining
// $('#dateofjoiningcheck').hide();	
// let dateofjoiningerror = true;
// $('#dateofjoining').keyup(function () {			
// 	validatedateofjoining();
// });
// function validatedateofjoining() {
// 	let dateofjoiningValue = $('#dateofjoining').val();
// 	if (dateofjoiningValue == '') {
// 	$('#dateofjoiningcheck').show();
// 	dateofjoiningerror = false;
// 		return false;
// 	}	
// 	else {
// 		$('#dateofjoiningcheck').hide();
// 		dateofjoiningerror = true;	
// 	}
// 	}



// 		// contact
// $('#contactcheck').hide();	
// let contacterror = true;
// $('#contact').keyup(function () {			
// 	validatecontact();
// });
// function validatecontact() {
// 	let contactValue = $('#contact').val();
// 	if (contactValue == '') {
// 	$('#contactcheck').show();
// 	contacterror = false;
// 		return false;
// 	}	
// 	else {
// 		$('#contactcheck').hide();
// 		contacterror = true;	
// 	}
// 	}



	
// // employeeimage
// $('#employeeimagecheck').hide();	
// let employeeimageerror = true;
// $('#employeeimage').keyup(function () {			
// 	validateemployeeimage();
// });
// function validateemployeeimage() {
// 	let employeeimageValue = $('#employeeimage').val();
// 	if (employeeimageValue == '') {
// 	$('#employeeimagecheck').show();
// 	employeeimageerror = false;
// 		return false;
// 	}	
// 	else {
// 		$('#employeeimagecheck').hide();
// 		employeeimageerror = true;	
// 	}
// 	}


	
// // expertise
// $('#expertisecheck').hide();	
// let expertiseerror = true;
// $('#expertise').keyup(function () {			
// 	validateexpertise();
// });
// function validateexpertise() {
// 	let expertiseValue = $('#expertise').val();
// 	if (expertiseValue == '') {
// 	$('#expertisecheck').show();
// 	expertiseerror = false;
// 		return false;
// 	}	
// 	else {
// 		$('#expertisecheck').hide();
// 		expertiseerror = true;	
// 	}
// 	}

		


// // starrating
// $('#starratingcheck').hide();	
// let starratingerror = true;
// $('#starrating').keyup(function () {			
// 	validatestarrating();
// });
// function validatestarrating() {
// 	let starratingValue = $('#starrating').val();
// 	if (starratingValue == '') {
// 	$('#starratingcheck').show();
// 	starratingerror = false;
// 		return false;
// 	}	
// 	else {
// 		$('#starratingcheck').hide();
// 		starratingerror = true;	
// 	}
// 	}



	

// // hra
// $('#hracheck').hide();	
// let hraerror = true;
// $('#hra').keyup(function () {			
// 	validatehra();
// 	paystucture();
// });
// function validatehra() {
// 	let hraValue = $('#hra').val();
// 	if (hraValue == '') {
// 	$('#hracheck').show();
// 	hraerror = false;
// 		return false;
// 	}	
// 	else {
// 		$('#hracheck').hide();
// 		hraerror = true;	
// 	}
// 	}


// 	// conveyance
// $('#conveyancecheck').hide();	
// let conveyanceerror = true;
// $('#conveyance').keyup(function () {			
// 	validateconveyance();
// 	paystucture();
// });
// function validateconveyance() {
// 	let conveyanceValue = $('#conveyance').val();
// 	if (conveyanceValue == '') {
// 	$('#conveyancecheck').show();
// 	conveyanceerror = false;
// 		return false;
// 	}	
// 	else {
// 		$('#conveyancecheck').hide();
// 		conveyanceerror = true;	
// 	}
// 	}

	
// 	// allowance
// $('#allowancecheck').hide();	
// let allowanceerror = true;
// $('#allowance').keyup(function () {			
// 	validateallowance();
// 	paystucture();
// });
// function validateallowance() {
// 	let allowanceValue = $('#allowance').val();
// 	if (allowanceValue == '') {
// 	$('#allowancecheck').show();
// 	allowanceerror = false;
// 		return false;
// 	}	
// 	else {
// 		$('#allowancecheck').hide();
// 		allowanceerror = true;	
// 	}
// 	}



// 		// incentivepercent
// $('#incentivepercentcheck').hide();	
// let incentivepercenterror = true;
// $('#incentivepercent').keyup(function () {			
// 	validateincentivepercent();
// 	paystucture();
// });
// function validateincentivepercent() {
// 	let incentivepercentValue = $('#incentivepercent').val();
// 	if (incentivepercentValue == '') {
// 	$('#incentivepercentcheck').show();
// 	incentivepercenterror = false;
// 		return false;
// 	}	
// 	else {
// 		$('#incentivepercentcheck').hide();
// 		incentivepercenterror = true;	
// 	}
// 	}



// 	// grosspay
// $('#grosspaycheck').hide();	
// let grosspayerror = true;
// $('#grosspay').keyup(function () {			
// 	validategrosspay();
// 	paystucture();
// });
// function validategrosspay() {
// 	let grosspayValue = $('#grosspay').val();
// 	if (grosspayValue == '') {
// 	$('#grosspaycheck').show();
// 	grosspayerror = false;
// 		return false;
// 	}	
// 	else {
// 		$('#grosspaycheck').hide();
// 		grosspayerror = true;	
// 	}
// 	}



// 		// tds
// $('#tdscheck').hide();	
// let tdserror = true;
// $('#tds').keyup(function () {			
// 	validatetds();
// 	paystucture();
// });
// function validatetds() {
// 	let tdsValue = $('#tds').val();
// 	if (tdsValue == '') {
// 	$('#tdscheck').show();
// 	tdserror = false;
// 		return false;
// 	}	
// 	else {
// 		$('#tdscheck').hide();
// 		tdserror = true;	
// 	}
// 	}

// 			// pf
// $('#pfcheck').hide();	
// let pferror = true;
// $('#pf').keyup(function () {			
// 	validatepf();
// 	paystucture();
// });
// function validatepf() {
// 	let pfValue = $('#pf').val();
// 	if (pfValue == '') {
// 	$('#pfcheck').show();
// 	pferror = false;
// 		return false;
// 	}	
// 	else {
// 		$('#pfcheck').hide();
// 		pferror = true;	
// 	}
// 	}



	
// 			// esi
// $('#esicheck').hide();	
// let esierror = true;
// $('#esi').keyup(function () {			
// 	validateesi();
// 	paystucture();
// });
// function validateesi() {
// 	let esiValue = $('#esi').val();
// 	if (esiValue == '') {
// 	$('#esicheck').show();
// 	esierror = false;
// 		return false;
// 	}	
// 	else {
// 		$('#esicheck').hide();
// 		esierror = true;	
// 	}
// 	}

// 			// loans
// 			$('#loanscheck').hide();	
// 			let loanserror = true;
// 			$('#loans').keyup(function () {			
// 				validateloans();
// 				paystucture();
// 			});
// 			function validateloans() {
// 				let loansValue = $('#loans').val();
// 				if (loansValue == '') {
// 				$('#loanscheck').show();
// 				loanserror = false;
// 					return false;
// 				}	
// 				else {
// 					$('#loanscheck').hide();
// 					loanserror = true;	
// 				}
// 				}

// 		// salaryadvance
// 		$('#salaryadvancecheck').hide();	
// 		let salaryadvanceerror = true;
// 		$('#salaryadvance').keyup(function () {			
// 			validatesalaryadvance();
// 			paystucture();
// 		});
// 		function validatesalaryadvance() {
// 			let salaryadvanceValue = $('#salaryadvance').val();
// 			if (salaryadvanceValue == '') {
// 			$('#salaryadvancecheck').show();
// 			salaryadvanceerror = false;
// 				return false;
// 			}	
// 			else {
// 				$('#salaryadvancecheck').hide();
// 				salaryadvanceerror = true;	
// 			}
// 			}


			
// 		// anyotherdeduction
// 		$('#anyotherdeductioncheck').hide();	
// 		let anyotherdeductionerror = true;
// 		$('#anyotherdeduction').keyup(function () {			
// 			validateanyotherdeduction();
// 			paystucture();
// 		});
// 		function validateanyotherdeduction() {
// 			let anyotherdeductionValue = $('#anyotherdeduction').val();
// 			if (anyotherdeductionValue == '') {
// 			$('#anyotherdeductioncheck').show();
// 			anyotherdeductionerror = false;
// 				return false;
// 			}	
// 			else {
// 				$('#anyotherdeductioncheck').hide();
// 				anyotherdeductionerror = true;	
// 			}
// 			}

// 		// totaldeduction
// 		$('#totaldeductioncheck').hide();	
// 		let totaldeductionerror = true;
// 		$('#totaldeduction').keyup(function () {			
// 			validatetotaldeduction();
// 			paystucture();
// 		});
// 		function validatetotaldeduction() {
// 			let totaldeductionValue = $('#totaldeduction').val();
// 			if (totaldeductionValue == '') {
// 			$('#totaldeductioncheck').show();
// 			totaldeductionerror = false;
// 				return false;
// 			}	
// 			else {
// 				$('#totaldeductioncheck').hide();
// 				totaldeductionerror = true;	
// 			}
// 			}
// 			// basic
// 		$('#basiccheck').hide();	
// 		let basicerror = true;
// 		$('#basic').keyup(function () {			
// 			validatebasic();
// 			paystucture();
// 		});
// 		function validatebasic() {
// 			let basicValue = $('#basic').val();
// 			if (basicValue == '') {
// 			$('#basiccheck').show();
// 			basicerror = false;
// 				return false;
// 			}	
// 			else {
// 				$('#basiccheck').hide();
// 				basicerror = true;	
// 			}
// 			}

function paystucture(){

	        var basicgross=hragross=convgross=allowgross=incentivesgross=tdsded=pfded=esided=loansded=saladvded=anyded=0;

			 basicgross=$("#basic").val();
			 hragross=$("#hra").val();
			 convgross=$("#conveyance").val();
			 allowgross=$("#allowance").val();
			 incentivesgross=$("#incentivepercent").val();

			 tdsded=$("#tds").val();
			 pfded=$("#pf").val();
			 esided=$("#esi").val();
			 loansded=$("#loans").val();
			 saladvded=$("#salaryadvance").val();
			 anyded=$("#anyotherdeduction").val();

			var incentiveamt = (parseFloat(basicgross) * incentivesgross)/100;

            var GrossPay = parseFloat(basicgross) + parseFloat(hragross) + parseFloat(convgross) + parseFloat(allowgross) +parseFloat(incentivesgross);
            $("#grosspay").val(GrossPay);

            var totaldeduction = (parseFloat(tdsded) + parseFloat(pfded) + parseFloat(esided) + parseFloat(loansded) + parseFloat(saladvded) + parseFloat(anyded));
            $("#totaldeduction").val(totaldeduction);
			
		}

		$('#toperiod1').change(function () {			
        var fromperiod1 = $("#fromperiod1").val();
        var toperiod1 = $("#toperiod1").val();

         var date1 = new Date(fromperiod1);
         var date2 = new Date(toperiod1);

        // var distance= (date2.getTime()-date1.getTime())/1000;

        // monthdiff = distance / (60 * 60 * 24 * 7 * 4);
        // month = Math.abs(Math.round(monthdiff));

        // daydiff = distance / (60 * 60 * 24 );
        // day = Math.abs(Math.round(daydiff));

        // yeardiff = month/12;
        // year = Math.abs(Math.round(yeardiff));

        var distance = new Date(
                        date2.getFullYear() - date1.getFullYear(),
                        date2.getMonth() - date1.getMonth(),
                        date2.getDate() - date1.getDate() );

         var year  = distance.getYear();
         var month = distance.getMonth();
         var day   = distance.getDate();

        $("#date1").val("Y"+":"+year+" "+"M"+":"+month+" "+"D"+":"+day);
        });


        $('#toperiod2').change(function () {			
        var fromperiod2 = $("#fromperiod2").val();
        var toperiod2 = $("#toperiod2").val();

         var date1 = new Date(fromperiod2);
         var date2 = new Date(toperiod2);

        var distance = new Date(
                        date2.getFullYear() - date1.getFullYear(),
                        date2.getMonth() - date1.getMonth(),
                        date2.getDate() - date1.getDate() );

         var year  = distance.getYear();
         var month = distance.getMonth();
         var day   = distance.getDate();

        $("#date2").val("Y"+":"+year+" "+"M"+":"+month+" "+"D"+":"+day);
        });

        $('#toperiod3').change(function () {			
        var fromperiod3 = $("#fromperiod3").val();
        var toperiod3 = $("#toperiod3").val();

         var date1 = new Date(fromperiod3);
         var date2 = new Date(toperiod3);

        var distance = new Date(
                        date2.getFullYear() - date1.getFullYear(),
                        date2.getMonth() - date1.getMonth(),
                        date2.getDate() - date1.getDate() );

         var year  = distance.getYear();
         var month = distance.getMonth();
         var day   = distance.getDate();

        $("#date3").val("Y"+":"+year+" "+"M"+":"+month+" "+"D"+":"+day);
        });

        $('#toperiod4').change(function () {			
        var fromperiod4 = $("#fromperiod4").val();
        var toperiod4 = $("#toperiod4").val();

         var date1 = new Date(fromperiod4);
         var date2 = new Date(toperiod4);

        var distance = new Date(
                        date2.getFullYear() - date1.getFullYear(),
                        date2.getMonth() - date1.getMonth(),
                        date2.getDate() - date1.getDate() );

         var year  = distance.getYear();
         var month = distance.getMonth();
         var day   = distance.getDate();

        $("#date4").val("Y"+":"+year+" "+"M"+":"+month+" "+"D"+":"+day);
        });

        $('#toperiod5').change(function () {			
        var fromperiod5 = $("#fromperiod5").val();
        var toperiod5 = $("#toperiod5").val();

         var date1 = new Date(fromperiod5);
         var date2 = new Date(toperiod5);

        var distance = new Date(
                        date2.getFullYear() - date1.getFullYear(),
                        date2.getMonth() - date1.getMonth(),
                        date2.getDate() - date1.getDate() );

         var year  = distance.getYear();
         var month = distance.getMonth();
         var day   = distance.getDate();

        $("#date5").val("Y"+":"+year+" "+"M"+":"+month+" "+"D"+":"+day);
        });
			
		$("#employeedownload").click(function () {
		window.location.href='uploads/downloadfiles/employeebulksample.xlsx'
	    });

		$('#submitemployee').click(function () {	
				validateemployeename();
				validategender();
				validatemobilenumber();
				validatedesignation();
			if ( 
				employeenameerror == true
				&& gendererror == true
				&& designationerror == true
				&& mobilenumbererror == true
				)
			  {
				return true;
			  } 
			  else 
			  {
				return false;
			  }
	
	});
	});

function AddDesigModal(){
var modal = document.getElementById("AddDesigModal");
var btn = document.getElementById("adddesignation");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  DropDownDesig();
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}

function EmployeeBulkupload(){
var modal = document.getElementById("EmpBulkUploadModal");
var btn = document.getElementById("employeeupload");
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

function DropDownDesig(){
	$.ajax({
            url: 'ajaxgetdesigdropdown.php',
            type: 'post',
            data: {},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                $("#designation").empty();
                for(var i = 0; i<len; i++){
                    var designation = response[i]['designationid'];
                    var designation = response[i]['designation'];
                    $("#designation").append("<option value='"+designation+"'>"+designation+"</option>");
                }
            }
        });
}