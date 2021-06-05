<?php
include('ajaxconfig.php');
if(isset($_POST["taxid"])){
	$taxid  = $_POST["taxid"];
}
//  $deleteunit = "DELETE FROM units WHERE unitid = '".$unitid."'";
//  $result = $mysqli->query($deleteunit);
//  if($result){
//  	echo "<p style='text-align:center;color:green'>"."Unit Removed Succesfully!"."</p>";
//  }else{
//  	echo "<p style='text-align:center;color:red'>"."Error:"." ".$mysqli->error."</p>";
//  }

 
if($taxid>0){
	$update=$mysqli->query("UPDATE taxmaster SET status=1 WHERE taxid='".$taxid."' ");
	if($update == true){
		echo "<p style='text-align:center;color:green'>"."Tax Removed Succesfully!"."</p>";
	}else{
		echo "<p style='text-align:center;color:red'>"."Error:"." ".$mysqli->error."</p>";
	}
}

?>