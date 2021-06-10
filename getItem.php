<?php
include './ajaxconfig.php';
$getitem=$con->query("SELECT itemname, partnumber FROM item WHERE status=0 ") or die("Error :".$con->error);
while ($row=$getitem->fetch_assoc()) {
	$item[]=$row["partnumber"]."-".$row["itemname"];
}

echo json_encode($item);
?>