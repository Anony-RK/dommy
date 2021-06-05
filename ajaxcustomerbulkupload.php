<?php
require_once('vendor/csvreader/php-excel-reader/excel_reader2.php');
require_once('vendor/csvreader/SpreadsheetReader.php');
include("ajaxconfig.php");

if(isset($_FILES["customerexcel"]["type"])){
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
                $customerid = "";
                if(isset($Row[0])) {
                $customerid = mysqli_real_escape_string($con,$Row[0]);
                }
            $customername = "";
            if(isset($Row[1])) {
            $customername = mysqli_real_escape_string($con,$Row[1]);
            }
            $gender = "";
            if(isset($Row[2])) {
            $gender = mysqli_real_escape_string($con,$Row[2]);
            }
            $dateofbirth = "";
            if(isset($Row[3])) {
            $dateofbirth = mysqli_real_escape_string($con,$Row[3]);
            }
            $employeeimage = "";
            if(isset($Row[4])) {
            $employeeimage = mysqli_real_escape_string($con,$Row[4]);
            }
            $age = "";
            if(isset($Row[5])) {
            $age = mysqli_real_escape_string($con,$Row[5]);
            }
            $mobilenumber = "";
            if(isset($Row[6])) {
            $mobilenumber = mysqli_real_escape_string($con,$Row[6]);
            }
            $whatsappnumber = "";
            if(isset($Row[7])) {
            $whatsappnumber = mysqli_real_escape_string($con,$Row[7]);
            }
            $anniverserydate = "";
            if(isset($Row[8])) {
            $anniverserydate = mysqli_real_escape_string($con,$Row[8]);
            }
            $emailid = "";
            if(isset($Row[9])) {
            $emailid = mysqli_real_escape_string($con,$Row[9]);
            }
            $needmembership = "";
            if(isset($Row[10])) {
            $needmembership = mysqli_real_escape_string($con,$Row[10]);
            }



            $gstno = "";
            if(isset($Row[11])) {
            $gstno = mysqli_real_escape_string($con,$Row[11]);
            }
            $contactpersion = "";
            if(isset($Row[12])) {
            $contactpersion = mysqli_real_escape_string($con,$Row[12]);
            }
            $address1 = "";
            if(isset($Row[13])) {
            $address1 = mysqli_real_escape_string($con,$Row[13]);
            }
            $address2 = "";
            if(isset($Row[14])) {
            $address2 = mysqli_real_escape_string($con,$Row[14]);
            }
            $pincode = "";
            if(isset($Row[15])) {
            $pincode = mysqli_real_escape_string($con,$Row[15]);
            }
            $state = "";
            if(isset($Row[16])) {
            $state = mysqli_real_escape_string($con,$Row[16]);
            }


            $typeofcustomer = "";
            if(isset($Row[17])) {
            $typeofcustomer = mysqli_real_escape_string($con,$Row[17]);
            }
            $noofvisit = "";
            if(isset($Row[18])) {
            $noofvisit = mysqli_real_escape_string($con,$Row[18]);
            }
            $frequencyofvisit = "";
            if(isset($Row[19])) {
            $frequencyofvisit = mysqli_real_escape_string($con,$Row[19]);
            }
           

            $subgroup = "";
            if(isset($Row[20])) {
            $subgroup = mysqli_real_escape_string($con,$Row[20]);
            }
            $group = "";
            if(isset($Row[21])) {
            $group = mysqli_real_escape_string($con,$Row[21]);
            }
            $ledgername = "";
            if(isset($Row[22])) {
            $ledgername = mysqli_real_escape_string($con,$Row[22]);
            }
        

        if($i==0)
		{ 
        $query = "INSERT INTO customer(customername, gender, 
        dateofbirth, employeeimage, age, 
        mobilenumber, whatsappnumber, anniverserydate, 
        emailid, needmembership, gstno,contactpersion,address1,
        address2,pincode,state,
        typeofcustomer, noofvisit, frequencyofvisit,subgroup,group,ledgername
      ) VALUES (
	   '".strip_tags($customername)."',
	   '".strip_tags($gender)."',
	   '".strip_tags($dateofbirth)."',
	   '".strip_tags($employeeimage)."',
	   '".strip_tags($age)."',
	   '".strip_tags($mobilenumber)."',
	   '".strip_tags($whatsappnumber)."',
	   '".strip_tags($anniverserydate)."',
	   '".strip_tags($emailid)."',
       '".strip_tags($needmembership)."',
       '".strip_tags($gstno)."',
	   '".strip_tags($contactpersion)."',
	   '".strip_tags($address1)."',
	   '".strip_tags($address2)."',
	   '".strip_tags($pincode)."',
	   '".strip_tags($state)."',
       '".strip_tags($typeofcustomer)."',
       '".strip_tags($noofvisit)."',
       '".strip_tags($frequencyofvisit)."',
       '".strip_tags($subgroup)."',
	'".strip_tags($groups)."',
	'".strip_tags($ledgername)."'

	)" 	;

       $result = $con->query($query);

} 
} 
}  

    if(!empty($result)) {
    echo "Excel Data Imported into the Database !";
    }
    else{
    echo "Problem in Importing Excel Data".$con->error;
    }
 }
else{
    echo "Kindly Select The Excel";
}

}
?>