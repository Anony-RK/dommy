<?php
// $vendorarray=$userObj->getPurchaseVendor($mysqli);
// $companyarray=$userObj->getPurchaseCompany($mysqli);
if(isset($_POST["submitpurchaseorder"])){
$addpurchase=$userObj->InsertPurchaseOrder($mysqli);
}
?>

<!-- Page header start -->
<div class="page-header">
<ol class="breadcrumb">
	<li class="breadcrumb-item">Purchase Order</li>
</ol>
</div>
<!-- Main container start -->
<div class="main-container">

<?php 
if(isset($addpurchase)){?>
<div id="purchaseinsertok" class="successalert" style="display:block">Purchase Added Succesfully!<span class="custclosebtn" onclick="this.parentElement.style.display='none';"><span class="icon-squared-cross"></span></span>
</div><br />
<?php } ?>
<!-- Row start -->
<form action="" method="post" name="mhepurchaseform" id="mhepurchaseform">
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">	
<div class="card">

<div class="card-header">General Info</div>
<div class="card-body">

<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
<div class="form-group">
<label class="label">Vendor<span class="text-danger">*</span></label>
<select  tabindex="1" name="vendor" id="vendor" class="form-control" value="">
	<option value="">-- Select Vendor --</option>
	<?php if(isset($vendorarray)){
	for($v=0; $v<=sizeof($vendorarray)-1;$v++){ ?>
	<option value="<?php echo $vendorarray[$v]; ?>"><?php echo $vendorarray[$v]; ?></option>
	<?php }} ?>
</select>
<span class="text-danger" id="vendorcheck">Select Vendor</span>
</div>
</div>

<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
<div class="form-group">
<label class="label">Ship to<span class="text-danger">*</span></label>
<select  tabindex="2" name="shipto" id="shipto" class="form-control">
	<option value="">-- Select Company --</option>
	<?php if(isset($companyarray)){
	for($c=0; $c<=sizeof($companyarray)-1;$c++){ ?>
	<option value="<?php echo $companyarray[$c]; ?>"><?php echo $companyarray[$c]; ?></option>
	<?php }} ?>
</select>
<span class="text-danger" id="shiptocheck">Select Company</span>
</div>
</div>

<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
<div class="form-group">
<label class="label">Date<span class="text-danger">*</span></label>
<input type="date"  tabindex="3" name="purchasedate" id="purchasedate" class="form-control">
<span class="text-danger" id="datecheck">Enter The Date</span>
</div>
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
<div class="form-group">
<label class="label">Vendor Address</label>
<textarea  tabindex="4" readonly name="vendoraddress" id="vendoraddress" class="form-control" placeholder="Vendor Address"></textarea> 
</div>
</div>

<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
<div class="form-group">
<label class="label">Shipping Address</label>
<textarea  tabindex="5" readonly name="shippingaddress" id="shippingaddress" class="form-control" placeholder="Company Address"></textarea>
</div>
</div>

<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
<div class="form-group">
<label class="label">PO No</label>
<input type="number"  tabindex="6" name="ponumber" id="ponumber" class="form-control" placeholder="Enter PO No">
</div>
</div>

</div>

<div class="row">

<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
<div class="form-group">
<label class="label">Requisitioner</label>
<input type="text"  tabindex="9" name="requisitioner" id="requisitioner" class="form-control" placeholder="Enter Requisitioner">
</div>
</div>

<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
<div class="form-group">
<label class="label">Ship Via</label>
<input type="text"  tabindex="10" name="shipvia" id="shipvia" class="form-control" placeholder="Enter Ship Via">
</div>
</div>

<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
<div class="form-group">
<label class="label">FOB</label>
<input type="text"  tabindex="11" name="fob" id="fob" class="form-control" placeholder="Enter FOB">
</div>
</div>

<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
</div>
</div>

<div class="row">
<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12">
<div class="form-group">
<label class="label">Shipping Terms</label>
<textarea tabindex="12" name="shippingterms" id="shippingterms" class="form-control" placeholder="Enter Shipping Terms"></textarea>
</div>
</div>
</div>

</div>
</div>


<div class="card">
	<div class="card-header">Inventory Info</div>
	<div class="card-body">

	<div class="row">

	</div>

	<div style="overflow-x:auto;">
	<table id="purchasetable" class="table custom-table">
		<thead>
		    <tr>
			<th>Part Number</th>
			<th>Part Description</th>
			<th>HSN Code</th>
			<th>Quantity</th>
			<th>Unit Price</th>
			<th>Tax %</th>
			<th>Total</th>
			<th>Action</th>
			</tr>
		</thead>
	     <tbody>
	    </tbody>
	</table>
</div>
<span style="color:green;font-weight: bold;">* Press Enter on unit price column to add another item</span>
<br /><br /><br />
<div class="row">
<div class="col-md-2">
<label class="label">Sub Total</label>
<div class="form-group">
<input type="number"  tabindex="" name="subtotal" id="subtotal" readonly class="form-control" placeholder="0">
</div>
</div>


<div class="col-md-2">
<label class="label">Tax Amount</label>
<div class="form-group">
<input type="number"  tabindex="" name="taxamount" id="taxamount" readonly class="form-control" placeholder="0">
</div>
</div>

<div class="col-md-2">
<label class="label">Shipping Charges</label>
<div class="form-group">
<input type="number"  tabindex="" name="shippingcharges" id="shippingcharges"  class="form-control" placeholder="0">
</div>
</div>


<div class="col-md-2">
<label class="label">Handling Charges</label>
<div class="form-group">
<input type="number"  tabindex="" name="handlingcharges" id="handlingcharges"  class="form-control" placeholder="0">
</div>
</div>

<div class="col-md-2">
<label class="label">Others</label>
<div class="form-group">
<input type="number"  tabindex="" name="othercharges" id="othercharges"  class="form-control" placeholder="0">
</div>
</div>

<div class="col-md-2">
<label class="label">Total PO</label>
<div class="form-group">
<input type="number"  tabindex="" name="totalpo" id="totalpo" readonly class="form-control" placeholder="0">
</div>
</div>

</div>

</div>
</div>

<div class="card">
<div class="card-header">Other Info</div>
<div class="card-body">
<div class="row">
<div class="col-xl-9 col-lg-9 col-md-9 col-sm-6 col-12">
<div class="form-group">
<label class="label">Other Comments or Special Instruction</label>
<textarea tabindex="12" name="othercomments" id="othercomments" class="form-control" placeholder="Enter Other Comments or Special Instruction"></textarea>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
	<div class="custom-checkbox">
	<input type="checkbox" value="Yes" tabindex="25"  class="custom-control-input" id="status" name="status">
	<label class="custom-control-label" for="status">Status</label>
	</div>
</div>
</div>
<br />

<div class="row">
<div class="col-md-10"></div>
<div class="col-md-2">						
<button type="submit" name="submitpurchaseorder" id="submitpurchaseorder" class="btn btn-primary" value="Submit" tabindex="">Submit</button>
<button type="button" class="btn btn-outline-secondary" tabindex="">Cancel</button>
</div>
</div>

</div>
</div>

</div>

</div>
</div>
</form>
</div>