<?php
require_once('vendor/csvreader/php-excel-reader/excel_reader2.php');
require_once('vendor/csvreader/SpreadsheetReader.php');

if (isset($_POST["itemexcel"]))
{
$allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
if(in_array($_FILES["file"]["type"],$allowedFileType)){
	 $targetPath = 'uploads/bulkimport/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        $Reader = new SpreadsheetReader($targetPath);
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
        	$Reader->ChangeSheet($i);
        	foreach ($Reader as $Row){
            $stocktype = "";
            if(isset($Row[0])) {
            $stocktype = mysqli_real_escape_string($conn,$Row[0]);
            }
            $partnumber = "";
            if(isset($Row[1])) {
            $partnumber = mysqli_real_escape_string($conn,$Row[1]);
            }
            $itemname = "";
            if(isset($Row[2])) {
            $itemname = mysqli_real_escape_string($conn,$Row[2]);
            }
            $hsncode = "";
            if(isset($Row[3])) {
            $hsncode = mysqli_real_escape_string($conn,$Row[3]);
            }
            $gstrate = "";
            if(isset($Row[4])) {
            $gstrate = mysqli_real_escape_string($conn,$Row[4]);
            }
            $unitofmeasure = "";
            if(isset($Row[5])) {
            $unitofmeasure = mysqli_real_escape_string($conn,$Row[5]);
            }
            $vendorname = "";
            if(isset($Row[6])) {
            $vendorname = mysqli_real_escape_string($conn,$Row[6]);
            }
            $tableopeningstock = "";
            if(isset($Row[7])) {
            $tableopeningstock = mysqli_real_escape_string($conn,$Row[7]);
            }
            $tablecostperunit = "";
            if(isset($Row[8])) {
            $tablecostperunit = mysqli_real_escape_string($conn,$Row[8]);
            }
            $tablecostprice = "";
            if(isset($Row[9])) {
            $tablecostprice = mysqli_real_escape_string($conn,$Row[9]);
            }

             if($i==0)
				 { 
                   $query = "INSERT INTO item(stocktype, partnumber, itemname, hsncode, gstrate,  unitofmeasure, vendor,  tableopeningstock, tablecostperunit, tablecostprice) 
	   VALUES (
	   '".strip_tags($stocktype)."',
	   '".strip_tags($partnumber)."',
	   '".strip_tags($itemname)."',
	   '".strip_tags($hsncode)."',
	   '".strip_tags($gstrate)."',
	   '".strip_tags($unitofmeasure)."',
	   '".strip_tags($vendorname)."',
	   '".strip_tags($tableopeningstock)."',
	   '".strip_tags($tablecostperunit)."',
	   '".strip_tags($tablecostprice)."' )";

       $result = $mysqli->query($query);
              
       if (! empty($result)) {
       $message = "Excel Data Imported into the Database";
       } else {
       $message = "Problem in Importing Excel Data";
       }
}
}
}
}
}
?>