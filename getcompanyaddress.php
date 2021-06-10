<?php
include '../ajaxconfig.php';

if(isset($_POST["companyname"])){
	$companyname=$_POST["companyname"];
}
$getcompany=$con->query("SELECT * FROM company WHERE companyname='".$companyname."' AND status = 0");
while($row=$getcompany->fetch_assoc()){
	$companyname=$row["companyname"];
	$address1=$row["address1"];
	$address2=$row["address2"];
	$pincode=$row["pincode"];
	$state=$row["state"];
	$country=$row["country"];
	$phonenumber=$row["phonenumber"];
}
$companyaddress["companyname"]=$companyname;
$companyaddress["address1"]=$address1;
$companyaddress["address2"]=$address2;
$companyaddress["pincode"]=$pincode;
$companyaddress["state"]=$state;
$companyaddress["country"]=$country;
$companyaddress["phonenumber"]=$phonenumber;

echo json_encode($companyaddress);
?>