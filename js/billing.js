
$(document).ready(function(){
    var i=1;
   $("#add_row").click(function(){
    $('#addr'+(i-1)).find('input').attr('disabled',true);
    $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input type='text' name='uid"+i+"' placeholder='User ID' class='form-control input-md'/></td><td><input type='text' name='uname"+i+"' placeholder='Name' class='form-control input-md'/></td><td><input type='text' name='nic"+i+"' placeholder='NIC' class='form-control input-md'/></td><td><input type='text' name='amount"+i+"' placeholder='Amount' class='form-control input-md'/></td><td><input type='date' name='dt"+i+"' placeholder='Date' class='form-control input-md'/></td>");

    $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
    i++; 
});
});


var markup = "<option value=''>Select a Item</option>";

  $.ajax({
    url: "getbill.php",
    data: {},
    cache: false,
    type: "post",
    dataType: "json",
   success: function (data) {

     $.each(data, function (i, item) {
       markup += "<option value=" + item + ">" + item + "</option>";
   });
var i = 1;
var appendTxt = 
"<tr><td>"+  i++  +"</td>" +
"<td><select id='description' name='description[]' class='Partcode chosen-select form-control'>" + markup + " </select></td>" +
"<td><input  type='text'  class='form-control col-xs-12 col-sm-12 descrb'  id='qty[]' name='qty' /></td>" +
"<td><input  type='text'  class='form-control col-xs-12 col-sm-12 Hsn'  id='rate[]' name='rate' onkeyup='calculate()'  /></td>" +
"<td><input type='number'  class='form-control qty' readonly  name='total[]' placeholder='0' id='total' /></td>" +
"<td><input type='number'  class='form-control rate unitprice' name='discount[]' id='discount' onkeyup='discount()' placeholder='0.0' /></td>" +
"<td><input type='text'  class='form-control totval inputs' readonly id='taxablevalue' name='taxablevalue[]' placeholder='0.0' /></td>" +
"<td> 6%</td>"+
"<td><input type='number'  class='form-control taxperc inputs' readonly id='cgstrate' name='cgstrate[]'  placeholder='0.0' /></td>" +
"<td> 6%</td>"+
"<td><input type='text'  class='form-control totval inputs' readonly id='sgstrate' name='sgstrate[]' placeholder='0.0' /></td>" +
"<td><input type='text'  class='form-control totval inputs' readonly id='amount' name='amount[]' placeholder='0.0' /></td>" +
"<td hidden><input type='text'  class='form-control taxcal inputs' readonly name='totalamount[]' id='totalamount' placeholder='0.0' /></td>" +

"</tr>";
$('#billstable').find('tbody').append(appendTxt);
}
});


var markup1 = "<option value=''>Select a Item</option>";
$(document).on("keydown", '#discount', function (e) {
var currentrow = $(this).closest('tr');
var key1 = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
if (key1 == 13 && $(this).closest("tr").is(":last-child")) {
e.preventDefault();
  $.ajax({
    url: "getbill.php",
    data: {},
    cache: false,
    type: "post",
    dataType: "json",
success: function (data) {   
  
   $.each(data, function (i, item) {
       markup1 += "<option value=" + item + ">" + item + "</option>";
   });


   var table = document.getElementById("billstable");
    
   var rowCount = table.rows.length;
//    var row = table.insertRow(rowCount);

   var count = rowCount - 1;
  
   var appendTxt =   
   "<tr><td>"+  count  +"</td>"+
   "<td><select id='description' name='description[]' class='Partcode chosen-select form-control'>" + markup1 + " </select></td>" +
   "<td><input  type='text'  class='form-control col-xs-12 col-sm-12 descrb qty'  id='qty' name='qty[]' /></td>" +
   "<td><input  type='text'  class='form-control col-xs-12 col-sm-12 rate'  id='rate' name='rate[]' onkeyup='calculate()'  /></td>" +
   "<td><input type='number'  class='form-control total' readonly  name='total[]' placeholder='0' id='total' /></td>" +
   "<td><input type='number'  class='form-control  discount' name='discount[]' id='discount' onkeyup='discount()' placeholder='0.0' /></td>" +
   "<td><input type='text'  class='form-control totval inputs taxablevalue' readonly id='taxablevalue' name='taxablevalue[]' placeholder='0.0' /></td>" +
   "<td> 6%</td>"+
   "<td><input type='number'  class='form-control taxperc inputs cgstrate' readonly id='cgstrate' name='cgstrate[]'  placeholder='0.0' /></td>" +
   "<td> 6%</td>"+
   "<td><input type='text'  class='form-control totval inputs sgstrate' readonly id='sgstrate' name='sgstrate[]' placeholder='0.0' /></td>" +
   "<td><input type='text'  class='form-control totval inputs totals' readonly id='totals' name='totals[]' placeholder='0.0' /></td>" +
   "<td hidden><input type='text'  class='form-control taxcal inputs alltotalamount' readonly name='alltotalamount[]' id='alltotalamount' placeholder='0.0' /></td>" +
   
   "</tr>";

$('#billstable').find('tbody').append(appendTxt);
markup1="<option value=''>Select a Item</option>";
}
});
}
});


                   for(var a = 0;a>=0;a++)    {

                                     
                  //   function calculate() {
                  //      var myBox1 = document.getElementsByClassName('qty[a]').value; 
                  //      var myBox2 = document.getElementsByClassName('rate[a]').value;
                  //      var result = document.getElementsByClassName('total[a]'); 
                  //      var myResult = myBox1 * myBox2;
                  //      result.value = myResult;

                      

                  //    }
                     function discount() {
                        var result = document.getElementsByClassName('total[a]').value
                        var discount = document.getElementsByClassName('discount[a]').value;
                        document.getElementsByClassName('taxablevalue[a]').value = result-discount;
                     }
                       
                    } 





                    $(document).on("keyup", '.discount', function (e) {

                     var  discount = $(this).val();
                     var  qty= $(this).parent().parent().find(".qty").val();
                     var  Rate = $(this).parent().parent().find(".rate").val();
                     var  total = 0;
                     // var  qty = Rate;
                     var  rate = 0;
                     var taxcal = 0;
                    
                     total = parseInt(qty) * parseInt(Rate);
                     $(this).parent().parent().find(".total").val(total);
                     if (discount != "" && discount != 0) {
                        discount = parseInt(discount);
                        var tots = parent().parent().find(".total").val();
                         taxable = tots-discount;
                          $(this).parent().parent().find(".taxablevalue").val(taxable);

                    }
     
                     if (taxable != "" && taxable != 0) {
                        var taxable= $(this).parent().parent().find(".taxable").val();
                         taxrate = (6 * parseInt(taxable)) / 100;
                          $(this).parent().parent().find(".cgstrate").val(taxrate);
                          $(this).parent().parent().find(".cgstrate").val(taxrate);

                          var cgstrate= $(this).parent().parent().find(".cgstrate").val();
                          var sgstrate= $(this).parent().parent().find(".cgstrate").val();
                          var taxable= $(this).parent().parent().find(".taxablevalue").val();
                          alltotals  = cgstrate + sgstrate + taxable;


                          $(this).parent().parent().find(".totals").val(alltotals);
                           $(this).parent().parent().find(".alltotalamount").val(alltotals);



                     }
                     // $(this).parent().parent().find(".taxcal").val(taxcal);
                     TotalCalculate();
                 });
      //   });
     
                 $("#shippingcharges").keyup(function (e) {
                     TotalCalculate();
                 });
                 $("#handlingcharges").keyup(function (e) {
                     TotalCalculate();
                 });
                 $("#othercharges").keyup(function (e) {
                     TotalCalculate();
                 });
                 
                 function TotalCalculate() {
                     var qty = 0;
                     var rate = 0;
                     var total = 0;
                     var discount = 0;
                     var cgst = 0;
                     var taxableamount = 0;
                     var cgst = 0;
                     var sgst = 0;
                     var totals =0;
                     alltotals = 0;
                     $('input[name="alltotalamount[]"]').each(function () {
                         if ($(this).val() != '') {
                             alltotals = alltotals + parseInt($(this).val());
                         }
                     });
                     $('input[name="taxcal[]"]').each(function () {
                         if ($(this).val() != '') {
                             taxtotal = taxtotal + parseInt($(this).val());
                         }
                     });
                     if ($("#shippingcharges").val != "" && $("#shippingcharges").val() != 0)
                     {
                         shippingcharges = parseInt($("#shippingcharges").val());
                     }
                     if ($("#handlingcharges").val != "" && $("#handlingcharges").val() != 0) {
                         handlingcharges =  parseInt($("#handlingcharges").val());
                     }
                     if ($("#othercharges").val != "" && $("#othercharges").val() != 0) {
                         othercharges = parseInt($("#othercharges").val());
                     }
                     totalpovalue = parseInt(subtotal) + parseInt(taxtotal) + parseInt(shippingcharges) + parseInt(handlingcharges)+ parseInt(othercharges);
                     $("#subtotal").val(subtotal);
                     $("#taxamount").val(taxtotal);
                     $("#totalpo").val(totalpovalue);
                 }
     
     