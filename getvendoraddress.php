<?php
include '../ajaxconfig.php';

if(isset($_POST["vendorname"])){
	$vendorname=$_POST["vendorname"];
}
$getvendor=$con->query("SELECT * FROM vendor WHERE vendorname='".$vendorname."' AND status = 0");
while($row=$getvendor->fetch_assoc()){
	$vendorname=$row["vendorname"];
	$address1=$row["address1"];
	$address2=$row["address2"];
	$pincode=$row["pincode"];
	$contact=$row["contact"];
}
$vendoraddress["address1"]=$address1;
$vendoraddress["address2"]=$address2;
$vendoraddress["pincode"]=$pincode;
$vendoraddress["contact"]=$contact;

echo json_encode($vendoraddress);
?>