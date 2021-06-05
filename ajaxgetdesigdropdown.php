<?php 
include('ajaxconfig.php');

$designationarr = array();
$result=$con->query("SELECT * FROM designation");
while( $row = $result->fetch_assoc()){
      $designationid = $row['designationid'];
      $designation = $row['designation'];
      $designationarr[] = array("designationid" => $designationid, "designation" => $designation);
   }
echo json_encode($designationarr);
?>