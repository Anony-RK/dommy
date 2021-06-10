<?php
include '../ajaxconfig.php';

if(isset($_POST["partnumber"])){
	$partnumber=$_POST["partnumber"];
}

$getitemdetails=$con->query("SELECT itemname, hsncode, gstrate FROM item WHERE partnumber='".$partnumber."' ");
while($row=$getitemdetails->fetch_assoc()){
	$itemdetarray["itemname"]=$row["itemname"];
	$itemdetarray["hsncode"]=$row["hsncode"];
	$itemdetarray["gstrate"]=$row["gstrate"];
}
echo json_encode($itemdetarray);
?>