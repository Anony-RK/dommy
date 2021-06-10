<?php
$con =mysqli_connect("localhost", "root", "", "rasi") or die("Error in database connection".mysqli_error($mysqli));
 $host = "localhost";  
 $db_user = "root";  
 $db_pass = "";  
 $dbname = "rasi";  
 
 $connect = new PDO("mysql:host=$host; dbname=$dbname", $db_user, $db_pass); 
  $mysqli=mysqli_connect("localhost","root","","rasi");
?>


<?php
// include '.././ajaxconfig.php';
$getitem=$con->query("SELECT itemname FROM item WHERE status=0 ") or die("Error :".$con->error);
while ($row=$getitem->fetch_assoc()) {
	$item[]=$row["itemname"];
}
echo json_encode($item);
?>