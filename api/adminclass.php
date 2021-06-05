<?php

  class admin 
	{
			

   /* User Details Start */ 
   public function adduser($mysqli) 
   {
	   $date  = date('Y-m-d');
	   if (isset($_POST['fullname'])) {
		$fullname             = mysqli_real_escape_string($mysqli,$_POST['fullname']);		
	}
	   if (isset($_POST['role'])) {
	   $role             = mysqli_real_escape_string($mysqli,$_POST['role']);		
	   }	
	   if (isset($_POST['email'])) {
	   $email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	   }
	   if (isset($_POST['password'])) {
	   $password               = mysqli_real_escape_string($mysqli,$_POST['password']);		
	   }
	  
	   if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	   {
		   $status=0;
	   }
	   else
	   {
		   $status=1;
	   }
	   $qry = "INSERT INTO user(fullname,user_name,user_password,
	   status) 
	   VALUES ('".strip_tags($fullname)."' ,'".strip_tags($email)."','".strip_tags($password)."',
	   '".strip_tags($status)."');";		
   
	   $res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	   $id = 0;
	   $id = $mysqli->insert_id;
   
	   return $id; 
   }
   public function deleteuser($mysqli,$id) 
   {
	   $date  = date('Y-m-d'); 
	   $qry = 'UPDATE  user  SET status="1"  WHERE user_id="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	   $res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
   } 	

	   
   public function getuser($mysqli,$idupd) 
   {
	   $qry = "SELECT * FROM user WHERE user_id='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	   $res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	   $detailrecords = array();
	   if ($mysqli->affected_rows>0)
	   {
		   $row = $res->fetch_object();	
		   $detailrecords['user_id']                    = $row->user_id; 
		   $detailrecords['fullname']       	        = strip_tags($row->fullname);
		   $detailrecords['user_name']       	        = strip_tags($row->user_name);
		   $detailrecords['user_password']              = strip_tags($row->user_password);		  	
		   $detailrecords['status']                     = strip_tags($row->status);		
   
	   }
	   return $detailrecords;
   }
   public function updateuser($mysqli,$id) { 		
	$date  = date('Y-m-d');
	if (isset($_POST['fullname'])) {
		$fullname             = mysqli_real_escape_string($mysqli,$_POST['fullname']);		
	}
	if (isset($_POST['role'])) {
	$role             = mysqli_real_escape_string($mysqli,$_POST['role']);		
	}	
	if (isset($_POST['email'])) {
	$email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	}
	if (isset($_POST['password'])) {
	$password               = mysqli_real_escape_string($mysqli,$_POST['password']);		
	}	
	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}
   $updateQry = 'UPDATE  user  SET fullname="'.strip_tags($fullname).'" ,user_name="'.strip_tags($email).'" ,user_password="'.strip_tags($password).'" ,		 
   status="'.$status.'"			
			WHERE user_id="'.mysqli_real_escape_string($mysqli,$id).'"';  

   $res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
			
			 
   }	

/* User Details End */ 


/* Branch Details Start */ 
public function addbranch($mysqli) 
{
	
	$date  = date('Y-m-d');
	if (isset($_POST['branchname'])) {
	 $branchname             = mysqli_real_escape_string($mysqli,$_POST['branchname']);		
   }
	if (isset($_POST['address'])) {
	$address             = mysqli_real_escape_string($mysqli,$_POST['address']);		
	}	
	if (isset($_POST['Address1'])) {
	$Address1               = mysqli_real_escape_string($mysqli,$_POST['Address1']);		
	}
	if (isset($_POST['Address2'])) {
	$Address2               = mysqli_real_escape_string($mysqli,$_POST['Address2']);		
	}
   
	if (isset($_POST['pincode'])) {
	$pincode               = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
	}

	if (isset($_POST['state'])) {
	$state               = mysqli_real_escape_string($mysqli,$_POST['state']);		
	}
	if (isset($_POST['country'])) {
	$country               = mysqli_real_escape_string($mysqli,$_POST['country']);		
	}
	if (isset($_POST['phonenumber'])) {
		$phonenumber               = mysqli_real_escape_string($mysqli,$_POST['phonenumber']);		
	}
	if (isset($_POST['email'])) {
		$email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	}
	if (isset($_POST['faxnumber'])) {
		$faxnumber               = mysqli_real_escape_string($mysqli,$_POST['faxnumber']);		
	}
	if (isset($_POST['tanno'])) {
		$tanno               = mysqli_real_escape_string($mysqli,$_POST['tanno']);		
	}
	if (isset($_POST['gst'])) {
		$gst               = mysqli_real_escape_string($mysqli,$_POST['gst']);		
	}
	if (isset($_POST['pfno'])) {
		$pfno               = mysqli_real_escape_string($mysqli,$_POST['pfno']);		
	}
	if (isset($_POST['esicno'])) {
		$esicno               = mysqli_real_escape_string($mysqli,$_POST['esicno']);		
	}
	if (isset($_POST['loginshortername'])) {
		$loginshortername               = mysqli_real_escape_string($mysqli,$_POST['loginshortername']);		
	}
	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}
	$qry = "INSERT INTO branch(branchname,address,address1,address2,pincode,
	state,country,phonenumber,email,faxnumber,tanno,gst,pfno,esicno,loginshortername,
	status) 
	VALUES ('".strip_tags($branchname)."' ,'".strip_tags($address)."','".strip_tags($Address1)."',
	'".strip_tags($Address2)."' ,'".strip_tags($pincode)."','".strip_tags($state)."',
	'".strip_tags($country)."' ,'".strip_tags($phonenumber)."','".strip_tags($email)."',
	'".strip_tags($faxnumber)."' ,'".strip_tags($tanno)."','".strip_tags($gst)."',
	'".strip_tags($pfno)."' ,'".strip_tags($esicno)."','".strip_tags($loginshortername)."',
	'".strip_tags($status)."');";		

	$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	$id = 0;
	$id = $mysqli->insert_id;

	return $id; 
}
public function deletebranch($mysqli,$id) 
{
	$date  = date('Y-m-d'); 
	$qry = 'UPDATE  branch  SET status="1"  WHERE branchid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
} 	

	
public function getbranch($mysqli,$idupd) 
{
	$qry = "SELECT * FROM branch WHERE branchid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	$detailrecords = array();
	if ($mysqli->affected_rows>0)
	{
		$row = $res->fetch_object();	

		$detailrecords['branchid']                  = $row->branchid; 
		$detailrecords['branchname']       	        = strip_tags($row->branchname);
		$detailrecords['address']       	        = strip_tags($row->address);
		$detailrecords['address1']                  = strip_tags($row->address1);	
		$detailrecords['address2']                  = strip_tags($row->address2);	
		$detailrecords['pincode']                   = $row->pincode; 
		$detailrecords['state']       	            = strip_tags($row->state);
		$detailrecords['country']       	        = strip_tags($row->country);
		$detailrecords['phonenumber']               = strip_tags($row->phonenumber);

		$detailrecords['email']                     = $row->email; 
		$detailrecords['faxnumber']       	        = strip_tags($row->faxnumber);
		$detailrecords['tanno']       	            = strip_tags($row->tanno);
		$detailrecords['gst']                       = strip_tags($row->gst);

		$detailrecords['pfno']       	            = strip_tags($row->pfno);
		$detailrecords['esicno']       	            = strip_tags($row->esicno);
		$detailrecords['loginshortername']        = strip_tags($row->loginshortername);

		$detailrecords['status']                    = strip_tags($row->status);		

	}
	return $detailrecords;
}
public function updatebranch($mysqli,$id) { 		
	
	 $date  = date('Y-m-d');
	 if (isset($_POST['branchname'])) {
	  $branchname             = mysqli_real_escape_string($mysqli,$_POST['branchname']);		
	}
	 if (isset($_POST['address'])) {
	 $address             = mysqli_real_escape_string($mysqli,$_POST['address']);		
	 }	
	 if (isset($_POST['Address1'])) {
	 $Address1               = mysqli_real_escape_string($mysqli,$_POST['Address1']);		
	 }
	 if (isset($_POST['Address2'])) {
	 $Address2               = mysqli_real_escape_string($mysqli,$_POST['Address2']);		
	 }
	
	 if (isset($_POST['pincode'])) {
	 $pincode               = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
	 }
 
	 if (isset($_POST['state'])) {
	 $state               = mysqli_real_escape_string($mysqli,$_POST['state']);		
	 }
	 if (isset($_POST['country'])) {
	 $country               = mysqli_real_escape_string($mysqli,$_POST['country']);		
	 }
	 if (isset($_POST['phonenumber'])) {
		 $phonenumber               = mysqli_real_escape_string($mysqli,$_POST['phonenumber']);		
	 }
	 if (isset($_POST['email'])) {
		 $email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	 }
	 if (isset($_POST['faxnumber'])) {
		 $faxnumber               = mysqli_real_escape_string($mysqli,$_POST['faxnumber']);		
	 }
	 if (isset($_POST['tanno'])) {
		 $tanno               = mysqli_real_escape_string($mysqli,$_POST['tanno']);		
	 }
	 if (isset($_POST['gst'])) {
		 $gst               = mysqli_real_escape_string($mysqli,$_POST['gst']);		
	 }
	 if (isset($_POST['pfno'])) {
		 $pfno               = mysqli_real_escape_string($mysqli,$_POST['pfno']);		
	 }
	 if (isset($_POST['esicno'])) {
		 $esicno               = mysqli_real_escape_string($mysqli,$_POST['esicno']);		
	 }
	 if (isset($_POST['loginshortername'])) {
		 $loginshortername               = mysqli_real_escape_string($mysqli,$_POST['loginshortername']);		
	 }
	 if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	 {
		 $status=0;
	 }
	 else
	 {
		 $status=1;
	 }

	$updateQry = 'UPDATE  branch  SET branchname="'.strip_tags($branchname).'" ,
	address="'.strip_tags($address).'" ,address1="'.strip_tags($Address1).'" ,		
	address2="'.strip_tags($Address2).'" ,	pincode="'.strip_tags($pincode).'" ,	
	state="'.strip_tags($state).'" ,country="'.strip_tags($country).'" ,	
	phonenumber="'.strip_tags($phonenumber).'" ,email="'.strip_tags($email).'" ,
	faxnumber="'.strip_tags($faxnumber).'" ,tanno="'.strip_tags($tanno).'" ,
	gst="'.strip_tags($gst).'" ,pfno="'.strip_tags($pfno).'" ,
	esicno="'.strip_tags($esicno).'" ,loginshortername="'.strip_tags($loginshortername).'" ,	 
	status="'.$status.'" WHERE branchid="'.mysqli_real_escape_string($mysqli,$id).'"';  

$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
		 
		  
}	

/* Branch Details End */ 



/* Company Details Start */ 
public function addcompany($mysqli) 
{
	
	$date  = date('Y-m-d');
	if (isset($_POST['companyname'])) {
	 $companyname             = mysqli_real_escape_string($mysqli,$_POST['companyname']);		
   }
   if (isset($_POST['cinno'])) {
	$cinno             = mysqli_real_escape_string($mysqli,$_POST['cinno']);		
   }
	if (isset($_POST['address'])) {
	$address             = mysqli_real_escape_string($mysqli,$_POST['address']);		
	}	
	if (isset($_POST['Address1'])) {
	$Address1               = mysqli_real_escape_string($mysqli,$_POST['Address1']);		
	}
	if (isset($_POST['Address2'])) {
	$Address2               = mysqli_real_escape_string($mysqli,$_POST['Address2']);		
	}
   
	if (isset($_POST['pincode'])) {
	$pincode               = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
	}

	if (isset($_POST['state'])) {
	$state               = mysqli_real_escape_string($mysqli,$_POST['state']);		
	}
	if (isset($_POST['country'])) {
	$country               = mysqli_real_escape_string($mysqli,$_POST['country']);		
	}
	if (isset($_POST['phonenumber'])) {
		$phonenumber               = mysqli_real_escape_string($mysqli,$_POST['phonenumber']);		
	}	
	if (isset($_POST['faxnumber'])) {
		$faxnumber               = mysqli_real_escape_string($mysqli,$_POST['faxnumber']);		
	}
	if (isset($_POST['email'])) {
		$email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	}
	if (isset($_POST['website'])) {
		$website               = mysqli_real_escape_string($mysqli,$_POST['website']);		
	}
	if (isset($_POST['panno'])) {
		$panno               = mysqli_real_escape_string($mysqli,$_POST['panno']);		
	}
	if (isset($_POST['itwardcircleno'])) {
		$itwardcircleno               = mysqli_real_escape_string($mysqli,$_POST['itwardcircleno']);		
	}
	if (isset($_POST['tanno'])) {
		$tanno               = mysqli_real_escape_string($mysqli,$_POST['tanno']);		
	}
	if (isset($_POST['gst'])) {
		$gst               = mysqli_real_escape_string($mysqli,$_POST['gst']);		
	}
	if (isset($_POST['pfno'])) {
		$pfno               = mysqli_real_escape_string($mysqli,$_POST['pfno']);		
	}
	if (isset($_POST['esicno'])) {
		$esicno               = mysqli_real_escape_string($mysqli,$_POST['esicno']);		
	}
	if (isset($_POST['loginshortername'])) {
		$loginshortername               = mysqli_real_escape_string($mysqli,$_POST['loginshortername']);		
	}
	if (isset($_POST['booksstartfrom'])) {
		$booksstartfrom               = mysqli_real_escape_string($mysqli,$_POST['booksstartfrom']);		
	}
	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}

	/* Company Image Upload Start	*/   
	$companyimage =$_FILES["companyimage"]["name"];
	if(isset($companyimage))
	{
		$companyimage3 = "uploads/companyphoto/".$companyimage ;
		move_uploaded_file($_FILES['companyimage']['tmp_name'],$companyimage3);

		
		$companyphoto = rtrim($companyimage, '*'); //imagepath if it is present    
	
	}
	else
	{
	$companyphoto="";
	} 
	

	$qry = "INSERT INTO company(companyname,cinno,address,address1,address2,pincode,
	state,country,phonenumber,faxnumber,email,website,panno,itwardcircleno,tanno,gst,pfno,
	esicno,loginshortername,
	booksstartfrom,companyimagepath,status) 
	VALUES ('".strip_tags($companyname)."' ,'".strip_tags($cinno)."' ,'".strip_tags($address)."',
	'".strip_tags($Address1)."',
	'".strip_tags($Address2)."' ,'".strip_tags($pincode)."','".strip_tags($state)."',
	'".strip_tags($country)."' ,'".strip_tags($phonenumber)."','".strip_tags($faxnumber)."' ,
	'".strip_tags($email)."','".strip_tags($website)."','".strip_tags($panno)."',
	'".strip_tags($itwardcircleno)."','".strip_tags($tanno)."','".strip_tags($gst)."',
	'".strip_tags($pfno)."' ,'".strip_tags($esicno)."','".strip_tags($loginshortername)."',
	'".strip_tags($booksstartfrom)."','".strip_tags($companyphoto)."','".strip_tags($status)."');";		

	$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	$id = 0;
	$id = $mysqli->insert_id;

	return $id; 
}
public function deletecompany($mysqli,$id) 
{
	$date  = date('Y-m-d'); 
	$qry = 'UPDATE  company  SET status="1"  WHERE companyid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
} 	

	
public function getcompany($mysqli,$idupd) 
{
	$qry = "SELECT * FROM company WHERE companyid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	$detailrecords = array();
	if ($mysqli->affected_rows>0)
	{
		$row = $res->fetch_object();	
		$detailrecords['companyid']                 = $row->companyid; 
		$detailrecords['companyname']       	    = strip_tags($row->companyname);
		$detailrecords['cinno']       	            = strip_tags($row->cinno);
		$detailrecords['address']       	        = strip_tags($row->address);
		$detailrecords['address1']                  = strip_tags($row->address1);	
		$detailrecords['address2']                  = strip_tags($row->address2);	
		$detailrecords['pincode']                   = $row->pincode; 
		$detailrecords['state']       	            = strip_tags($row->state);
		$detailrecords['country']       	        = strip_tags($row->country);
		$detailrecords['phonenumber']               = strip_tags($row->phonenumber);
		$detailrecords['faxnumber']       	        = strip_tags($row->faxnumber);
		$detailrecords['email']                     = $row->email; 
		$detailrecords['website']       	        = strip_tags($row->website);
		$detailrecords['panno']       	            = strip_tags($row->panno);
		$detailrecords['itwardcircleno']       	    = strip_tags($row->itwardcircleno);
		$detailrecords['tanno']       	            = strip_tags($row->tanno);
		$detailrecords['gst']                       = strip_tags($row->gst);

		$detailrecords['pfno']       	            = strip_tags($row->pfno);
		$detailrecords['esicno']       	            = strip_tags($row->esicno);
		$detailrecords['loginshortername']          = strip_tags($row->loginshortername);
		$detailrecords['booksstartfrom']            = strip_tags($row->booksstartfrom);
		$detailrecords['companyimagepath']          = strip_tags($row->companyimagepath);
		
		$detailrecords['status']                    = strip_tags($row->status);		

	}
	return $detailrecords;
}
public function updatecompany($mysqli,$id) { 		
	$date  = date('Y-m-d');
	if (isset($_POST['companyname'])) {
	 $companyname             = mysqli_real_escape_string($mysqli,$_POST['companyname']);		
   }
   if (isset($_POST['cinno'])) {
	$cinno             = mysqli_real_escape_string($mysqli,$_POST['cinno']);		
   }
	if (isset($_POST['address'])) {
	$address             = mysqli_real_escape_string($mysqli,$_POST['address']);		
	}	
	if (isset($_POST['Address1'])) {
	$Address1               = mysqli_real_escape_string($mysqli,$_POST['Address1']);		
	}
	if (isset($_POST['Address2'])) {
	$Address2               = mysqli_real_escape_string($mysqli,$_POST['Address2']);		
	}
   
	if (isset($_POST['pincode'])) {
	$pincode               = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
	}

	if (isset($_POST['state'])) {
	$state               = mysqli_real_escape_string($mysqli,$_POST['state']);		
	}
	if (isset($_POST['country'])) {
	$country               = mysqli_real_escape_string($mysqli,$_POST['country']);		
	}
	if (isset($_POST['phonenumber'])) {
		$phonenumber               = mysqli_real_escape_string($mysqli,$_POST['phonenumber']);		
	}	
	if (isset($_POST['faxnumber'])) {
		$faxnumber               = mysqli_real_escape_string($mysqli,$_POST['faxnumber']);		
	}
	if (isset($_POST['email'])) {
		$email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	}
	if (isset($_POST['website'])) {
		$website               = mysqli_real_escape_string($mysqli,$_POST['website']);		
	}
	if (isset($_POST['panno'])) {
		$panno               = mysqli_real_escape_string($mysqli,$_POST['panno']);		
	}
	if (isset($_POST['itwardcircleno'])) {
		$itwardcircleno               = mysqli_real_escape_string($mysqli,$_POST['itwardcircleno']);		
	}
	if (isset($_POST['tanno'])) {
		$tanno               = mysqli_real_escape_string($mysqli,$_POST['tanno']);		
	}
	if (isset($_POST['gst'])) {
		$gst               = mysqli_real_escape_string($mysqli,$_POST['gst']);		
	}
	if (isset($_POST['pfno'])) {
		$pfno               = mysqli_real_escape_string($mysqli,$_POST['pfno']);		
	}
	if (isset($_POST['esicno'])) {
		$esicno               = mysqli_real_escape_string($mysqli,$_POST['esicno']);		
	}
	if (isset($_POST['loginshortername'])) {
		$loginshortername               = mysqli_real_escape_string($mysqli,$_POST['loginshortername']);		
	}
	if (isset($_POST['booksstartfrom'])) {
		$booksstartfrom               = mysqli_real_escape_string($mysqli,$_POST['booksstartfrom']);		
	}
	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}
	
	$updateQry = 'UPDATE  company  SET companyname="'.strip_tags($companyname).'" ,
	cinno="'.strip_tags($cinno).'" ,address="'.strip_tags($address).'" ,address1="'.strip_tags($Address1).'" ,		
	address2="'.strip_tags($Address2).'" ,	pincode="'.strip_tags($pincode).'" ,	
	state="'.strip_tags($state).'" ,country="'.strip_tags($country).'" ,	
	phonenumber="'.strip_tags($phonenumber).'" ,faxnumber="'.strip_tags($faxnumber).'" ,
	email="'.strip_tags($email).'" ,website="'.strip_tags($website).'" ,
	panno="'.strip_tags($panno).'" ,itwardcircleno="'.strip_tags($itwardcircleno).'" ,
	tanno="'.strip_tags($tanno).'" ,gst="'.strip_tags($gst).'" ,pfno="'.strip_tags($pfno).'" ,
	esicno="'.strip_tags($esicno).'" ,loginshortername="'.strip_tags($loginshortername).'" ,
	booksstartfrom="'.strip_tags($booksstartfrom).'" ,
	status="'.$status.'" WHERE companyid="'.mysqli_real_escape_string($mysqli,$id).'"';  

$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
		 
		  
}	

/* Company Details End */ 

/* Item Operations Start */ 
/* Item Details Add */ 

public function additem($mysqli) 
   {
	   $date  = date('Y-m-d');

	   if (isset($_POST['partnumber'])) {
		$partnumber             = mysqli_real_escape_string($mysqli,$_POST['partnumber']);
	   }
	   if (isset($_POST['stocktype'])) {
	   $stocktype             = mysqli_real_escape_string($mysqli,$_POST['stocktype']);		
	   }	
	   if (isset($_POST['itemname'])) {
	   $itemname               = mysqli_real_escape_string($mysqli,$_POST['itemname']);		
	   }
	   if (isset($_POST['unitofmeasure'])) {
	   $unitofmeasure               = mysqli_real_escape_string($mysqli,$_POST['unitofmeasure']);		
	   }
	   if (isset($_POST['hsncode'])) {
		$hsncode             = mysqli_real_escape_string($mysqli,$_POST['hsncode']);
	   }
	   if (isset($_POST['gstrate'])) {
	   $gstrate             = mysqli_real_escape_string($mysqli,$_POST['gstrate']);		
	   }	
	   if (isset($_POST['barcode'])) {
	   $barcode               = mysqli_real_escape_string($mysqli,$_POST['barcode']);		
	   }
	   if (isset($_POST['vendor'])) {
	   $vendor               = mysqli_real_escape_string($mysqli,$_POST['vendor']);		
	   }
	   if (isset($_POST['type'])) {
	   $type               = mysqli_real_escape_string($mysqli,$_POST['type']);		
	   }
	   if (isset($_POST['noofgmpcs'])) {
		$noofgmpcs             = mysqli_real_escape_string($mysqli,$_POST['noofgmpcs']);
	   }
	   if (isset($_POST['reorderlevel'])) {
	   $reorderlevel             = mysqli_real_escape_string($mysqli,$_POST['reorderlevel']);		
	   }	
	   if (isset($_POST['lowerlevelqty'])) {
	   $lowerlevelqty               = mysqli_real_escape_string($mysqli,$_POST['lowerlevelqty']);		
	   }
	   if (isset($_POST['isincentive'])) {
	   $isincentive               = mysqli_real_escape_string($mysqli,$_POST['isincentive']);
	   }
	   if (isset($_POST['isreuse'])) {
	   $isreuse               = mysqli_real_escape_string($mysqli,$_POST['isreuse']);
	   }
	   if (isset($_POST['tablevendorselect'])) {
	   $tablevendorselect               = $_POST['tablevendorselect'];
	   $tablevendorselect = implode(',', $tablevendorselect);
	   }
	   if (isset($_POST['tableopeningstock'])) {
	   $tableopeningstock               = $_POST['tableopeningstock'];
	   $tableopeningstock = implode(',', $tableopeningstock);
	   }
	   if (isset($_POST['tableopeningpcs'])) {
	   $tableopeningpcs               = $_POST['tableopeningpcs'];
	   $tableopeningpcs = implode(',', $tableopeningpcs);
	   }
	   if (isset($_POST['tablecostperunit'])) {
	   $tablecostperunit               = $_POST['tablecostperunit'];
	   $tablecostperunit = implode(',', $tablecostperunit);
	   }
	   if (isset($_POST['tablecostprice'])) {
	   $tablecostprice               = $_POST['tablecostprice'];
	   $tablecostprice = implode(',', $tablecostprice);
	   }
	   if (isset($_POST['tablesellingpriceperpc'])) {
	   $tablesellingpriceperpc   = $_POST['tablesellingpriceperpc'];
	   $tablesellingpriceperpc = implode(',', $tablesellingpriceperpc);
	   }
	   if (isset($_POST['tabletotalsellingprice'])) {
	   $tabletotalsellingprice  = $_POST['tabletotalsellingprice'];
	   $tabletotalsellingprice = implode(',', $tabletotalsellingprice);
	   }
	   if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	   {
		   $status=0;
	   }
	   else
	   {
		   $status=1;
	   }

	   $qry = "INSERT INTO item(partnumber, stocktype, itemname, unitofmeasure, hsncode, gstrate, barcode, vendor, type, noofgmpcs, reorderlevel, lowerlevelqty, isincentive, isreuse, tablevendorselect, tableopeningstock, tableopeningpcs, tablecostperunit, tablecostprice, tablesellingpriceperpc, tabletotalsellingprice, status) 
	   VALUES ('".strip_tags($partnumber)."',
	   '".strip_tags($stocktype)."',
	   '".strip_tags($itemname)."',
	   '".strip_tags($unitofmeasure)."',
	   '".strip_tags($hsncode)."',
	   '".strip_tags($gstrate)."',
	   '".strip_tags($barcode)."',
	   '".strip_tags($vendor)."',
	   '".strip_tags($type)."',
	   '".strip_tags($noofgmpcs)."',
	   '".strip_tags($reorderlevel)."',
	   '".strip_tags($lowerlevelqty)."',
	   '".strip_tags($isincentive)."',
	   '".strip_tags($isreuse)."',
	   '".strip_tags($tablevendorselect)."',
	   '".strip_tags($tableopeningstock)."',
	   '".strip_tags($tableopeningpcs)."',
	   '".strip_tags($tablecostperunit)."',
	   '".strip_tags($tablecostprice)."',
	   '".strip_tags($tablesellingpriceperpc)."',
	   '".strip_tags($tabletotalsellingprice)."',
	   '".strip_tags($status)."');";		
   
	   $res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	   $id = 0;
	   $id = $mysqli->insert_id;
   
	   return $id; 
   }

   public function deleteitem($mysqli,$id) 
   {
	   $date  = date('Y-m-d'); 
	   $qry = 'UPDATE  item  SET status="1"  WHERE itemid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	   $res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
   }

public function updateitem($mysqli,$id){

	   $date  = date('Y-m-d');

	   if (isset($_POST['partnumber'])) {
		$partnumber             = mysqli_real_escape_string($mysqli,$_POST['partnumber']);
	   }
	   if (isset($_POST['stocktype'])) {
	   $stocktype             = mysqli_real_escape_string($mysqli,$_POST['stocktype']);		
	   }	
	   if (isset($_POST['itemname'])) {
	   $itemname               = mysqli_real_escape_string($mysqli,$_POST['itemname']);		
	   }
	   if (isset($_POST['unitofmeasure'])) {
	   $unitofmeasure               = mysqli_real_escape_string($mysqli,$_POST['unitofmeasure']);		
	   }
	   if (isset($_POST['hsncode'])) {
		$hsncode             = mysqli_real_escape_string($mysqli,$_POST['hsncode']);
	   }
	   if (isset($_POST['gstrate'])) {
	   $gstrate             = mysqli_real_escape_string($mysqli,$_POST['gstrate']);		
	   }	
	   if (isset($_POST['barcode'])) {
	   $barcode               = mysqli_real_escape_string($mysqli,$_POST['barcode']);		
	   }
	   if (isset($_POST['vendor'])) {
	   $vendor               = mysqli_real_escape_string($mysqli,$_POST['vendor']);		
	   }
	   if (isset($_POST['type'])) {
	   $type               = mysqli_real_escape_string($mysqli,$_POST['type']);		
	   }
	   if (isset($_POST['noofgmpcs'])) {
		$noofgmpcs             = mysqli_real_escape_string($mysqli,$_POST['noofgmpcs']);
	   }
	   if (isset($_POST['reorderlevel'])) {
	   $reorderlevel             = mysqli_real_escape_string($mysqli,$_POST['reorderlevel']);		
	   }	
	   if (isset($_POST['lowerlevelqty'])) {
	   $lowerlevelqty               = mysqli_real_escape_string($mysqli,$_POST['lowerlevelqty']);		
	   }
	   if (isset($_POST['isincentive'])) {
	   $isincentive               = mysqli_real_escape_string($mysqli,$_POST['isincentive']);
	   }
	   if (isset($_POST['isreuse'])) {
	   $isreuse               = mysqli_real_escape_string($mysqli,$_POST['isreuse']);
	   }
	   if (isset($_POST['tablevendorselect'])) {
	   $tablevendorselect  = $_POST['tablevendorselect'];
	   $tablevendorselect = implode(',', $tablevendorselect);
	   }
	   if (isset($_POST['tableopeningstock'])) {
	   $tableopeningstock    = $_POST['tableopeningstock'];
	   $tableopeningstock = implode(',', $tableopeningstock);
	   }
	   if (isset($_POST['tableopeningpcs'])) {
	   $tableopeningpcs      = $_POST['tableopeningpcs'];
	   $tableopeningpcs = implode(',', $tableopeningpcs);
	   }
	   if (isset($_POST['tablecostperunit'])) {
	   $tablecostperunit     = $_POST['tablecostperunit'];
	   $tablecostperunit = implode(',', $tablecostperunit);
	   }
	   if (isset($_POST['tablecostprice'])) {
	   $tablecostprice     = $_POST['tablecostprice'];
	   $tablecostprice = implode(',', $tablecostprice);
	   }
	   if (isset($_POST['tablesellingpriceperpc'])) {
	   $tablesellingpriceperpc   = $_POST['tablesellingpriceperpc'];
	   $tablesellingpriceperpc = implode(',', $tablesellingpriceperpc);
	   }
	   if (isset($_POST['tabletotalsellingprice'])) {
	   $tabletotalsellingprice      = $_POST['tabletotalsellingprice'];
	   $tabletotalsellingprice = implode(',', $tabletotalsellingprice);
	   }
	   if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	   {
		   $status=0;
	   }
	   else
	   {
		   $status=1;
	   }


	$updateQry = 'UPDATE  item  SET 
	partnumber="'.strip_tags($partnumber).'" ,
	stocktype="'.strip_tags($stocktype).'" ,
	itemname="'.strip_tags($itemname).'" ,
	unitofmeasure="'.strip_tags($unitofmeasure).'" ,	
	hsncode="'.strip_tags($hsncode).'" ,	
	gstrate="'.strip_tags($gstrate).'" ,
	barcode="'.strip_tags($barcode).'" ,	
	vendor="'.strip_tags($vendor).'", 
	type="'.strip_tags($type).'" ,
	noofgmpcs="'.strip_tags($noofgmpcs).'" ,
	reorderlevel="'.strip_tags($reorderlevel).'" ,
	lowerlevelqty="'.strip_tags($lowerlevelqty).'" ,
	isincentive="'.strip_tags($isincentive).'" ,
	isreuse="'.strip_tags($isreuse).'" ,
	tablevendorselect="'.strip_tags($tablevendorselect).'",
	tableopeningstock="'.strip_tags($tableopeningstock).'" ,	
	tableopeningpcs="'.strip_tags($tableopeningpcs).'" , 
	tablecostperunit="'.strip_tags($tablecostperunit).'" ,
	tablecostprice="'.strip_tags($tablecostprice).'" ,
	tablesellingpriceperpc="'.strip_tags($tablesellingpriceperpc).'" ,
	tabletotalsellingprice="'.strip_tags($tabletotalsellingprice).'" ,
	status="'.$status.'" WHERE itemid="'.mysqli_real_escape_string($mysqli,$id).'"';  

$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
}

public function getitem($mysqli,$idupd)
   {
	   $qry = "SELECT * FROM item WHERE itemid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	   $res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	   $detailrecords = array();
	   if ($mysqli->affected_rows>0)
	   {
		   $row = $res->fetch_object();	
		   $detailrecords['itemid']                    = $row->itemid; 
		   $detailrecords['partnumber']       	       = strip_tags($row->partnumber);
		   $detailrecords['stocktype']       	       = strip_tags($row->stocktype);
		   $detailrecords['itemname']                  = strip_tags($row->itemname);		  	
		   $detailrecords['unitofmeasure']             = strip_tags($row->unitofmeasure);		
		   $detailrecords['hsncode']       	           = strip_tags($row->hsncode);
		   $detailrecords['gstrate']       	           = strip_tags($row->gstrate);
		   $detailrecords['barcode']                   = strip_tags($row->barcode);		  	
		   $detailrecords['vendor']                    = strip_tags($row->vendor);	
		   $detailrecords['type']       	           = strip_tags($row->type);
		   $detailrecords['noofgmpcs']       	       = strip_tags($row->noofgmpcs);
		   $detailrecords['reorderlevel']              = strip_tags($row->reorderlevel);		  	
		   $detailrecords['lowerlevelqty']             = strip_tags($row->lowerlevelqty);	
		   $detailrecords['isincentive']       	       = strip_tags($row->isincentive);
		   $detailrecords['isreuse']       	           = strip_tags($row->isreuse);
		   $detailrecords['tablevendorselect']         = strip_tags($row->tablevendorselect);		  	
		   $detailrecords['tableopeningstock']         = strip_tags($row->tableopeningstock);
		   $detailrecords['tableopeningpcs']           = strip_tags($row->tableopeningpcs);		  	
		   $detailrecords['tablecostperunit']          = strip_tags($row->tablecostperunit);
		   $detailrecords['tablecostprice']            = strip_tags($row->tablecostprice);		  	
		   $detailrecords['tablesellingpriceperpc']    = strip_tags($row->tablesellingpriceperpc);
		   $detailrecords['tabletotalsellingprice']    = strip_tags($row->tabletotalsellingprice);
		   $detailrecords['status']                    = strip_tags($row->status);		
   
	   }
	   return $detailrecords;
   }
   // Employee Master

   public function addemployeemaster($mysqli) {
	if(isset($_POST['employeecode']))		
		{
		$employeecode = $_POST['employeecode'];
		}
	if(isset($_POST['employeename']))		
		{
		$employeename = $_POST['employeename'];
		}
	if(isset($_POST['dateofbirth']))		
	{
		$dateofbirth = $_POST['dateofbirth'];
	}
	if(isset($_POST['gender']))		
		{
		$gender = $_POST['gender'];
		}
		if(isset($_POST['email']))		
		{
		$email = $_POST['email'];
		}
		if(isset($_POST['designation']))		
		{
		$designation = $_POST['designation'];
		}
		if(isset($_POST['mobilenumber']))		
		{
		$mobilenumber = $_POST['mobilenumber'];
		}
		if(isset($_POST['dateofjoining']))		
		{
		$dateofjoining = $_POST['dateofjoining'];
		}
		
	if(isset($_POST['contact']))		
	{
	$contact = $_POST['contact'];
	}
	if(isset($_POST['employeeimage']))		
	{
	$employeeimage = $_POST['employeeimage'];
	}
	if(isset($_POST['expertise']))		
	{
	$expertise = $_POST['expertise'];
	}
	if(isset($_POST['starrating']))		
	{
	$starrating = $_POST['starrating'];
	}
	if(isset($_POST['basic']))		
	{
	$basic = $_POST['basic'];
	}
	if(isset($_POST['hra']))		
	{
	$hra = $_POST['hra'];
	}
	if(isset($_POST['conveyance']))		
	{
	$conveyance = $_POST['conveyance'];
	}
	if(isset($_POST['allowance']))		
	{
	$allowance = $_POST['allowance'];
	}
	
	if(isset($_POST['incentivepercent']))		
		{
		$incentivepercent = $_POST['incentivepercent'];
		}
	if(isset($_POST['grosspay']))		
		{
		$grosspay = $_POST['grosspay'];
		}
	if(isset($_POST['tds']))		
	{
		$tds = $_POST['tds'];
	}
	if(isset($_POST['pf']))		
		{
		$pf = $_POST['pf'];
		}
		if(isset($_POST['esi']))		
		{
		$esi = $_POST['esi'];
		}
		if(isset($_POST['loans']))		
		{
		$loans = $_POST['loans'];
		}
		if(isset($_POST['salaryadvance']))		
		{
		$salaryadvance = $_POST['salaryadvance'];
		}
		if(isset($_POST['totaldeduction']))		
		{
		$totaldeduction = $_POST['totaldeduction'];
		}
		
	if(isset($_POST['anyotherdeduction']))		
	{
	$anyotherdeduction = $_POST['anyotherdeduction'];
	}
	if(isset($_POST['institutetype1']))		
	{
	$institutetype1 = $_POST['institutetype1'];
	}
	if(isset($_POST['name1']))		
	{
	$name1 = $_POST['name1'];
	}
	if(isset($_POST['positionheld1']))		
	{
	$positionheld1 = $_POST['positionheld1'];
	}
	if(isset($_POST['place1']))		
	{
	$place1 = $_POST['place1'];
	}
	if(isset($_POST['fromperiod1']))		
	{
	$fromperiod1 = $_POST['fromperiod1'];
	}
	if(isset($_POST['toperiod1']))		
	{
	$toperiod1 = $_POST['toperiod1'];
	}
	if(isset($_POST['date1']))		
	{
	$date1 = $_POST['date1'];
	}
	
	
	if(isset($_POST['institutetype2']))		
	{
	$institutetype2 = $_POST['institutetype2'];
	}
	if(isset($_POST['name2']))		
	{
	$name2= $_POST['name2'];
	}
	if(isset($_POST['positionheld2']))		
	{
	$positionheld2 = $_POST['positionheld2'];
	}
	if(isset($_POST['place2']))		
	{
	$place2 = $_POST['place2'];
	}
	if(isset($_POST['fromperiod2']))		
	{
	$fromperiod2 = $_POST['fromperiod2'];
	}
	if(isset($_POST['toperiod2']))		
	{
	$toperiod2 = $_POST['toperiod2'];
	}
	if(isset($_POST['date2']))		
	{
	$date2 = $_POST['date2'];
	}
	
	
	
	if(isset($_POST['institutetype3']))		
	{
	$institutetype3 = $_POST['institutetype3'];
	}
	if(isset($_POST['name3']))		
	{
	$name3 = $_POST['name3'];
	}
	if(isset($_POST['positionheld3']))		
	{
	$positionheld3 = $_POST['positionheld3'];
	}
	if(isset($_POST['place3']))		
	{
	$place3 = $_POST['place3'];
	}
	if(isset($_POST['fromperiod3']))		
	{
	$fromperiod3 = $_POST['fromperiod3'];
	}
	if(isset($_POST['toperiod3']))		
	{
	$toperiod3 = $_POST['toperiod3'];
	}
	if(isset($_POST['date3']))		
	{
	$date3 = $_POST['date3'];
	}
		
	
	
	
	
	if(isset($_POST['institutetype4']))		
	{
	$institutetype4 = $_POST['institutetype4'];
	}
	if(isset($_POST['name4']))		
	{
	$name4 = $_POST['name4'];
	}
	if(isset($_POST['positionheld4']))		
	{
	$positionheld4 = $_POST['positionheld4'];
	}
	if(isset($_POST['place4']))		
	{
	$place4 = $_POST['place4'];
	}
	if(isset($_POST['fromperiod4']))		
	{
	$fromperiod4 = $_POST['fromperiod4'];
	}
	if(isset($_POST['toperiod4']))		
	{
	$toperiod4 = $_POST['toperiod4'];
	}
	if(isset($_POST['date4']))		
	{
	$date4 = $_POST['date4'];
	}
	
	
	
	
	if(isset($_POST['institutetype5']))		
	{
	$institutetype5 = $_POST['institutetype5'];
	}
	if(isset($_POST['name5']))		
	{
	$name5 = $_POST['name5'];
	}
	if(isset($_POST['positionheld5']))		
	{
	$positionheld5 = $_POST['positionheld5'];
	}
	if(isset($_POST['place5']))		
	{
	$place5 = $_POST['place5'];
	}
	if(isset($_POST['fromperiod5']))		
	{
	$fromperiod5 = $_POST['fromperiod5'];
	}
	if(isset($_POST['toperiod5']))		
	{
	$toperiod5 = $_POST['toperiod5'];
	}
	if(isset($_POST['date5']))		
	{
	$date5 = $_POST['date5'];
	}
	if(isset($_POST['title1']))		
	{
	$title1 = $_POST['title1'];
	}
	if(isset($_POST['certificate1']))		
	{
	$certificate1 = $_POST['certificate1'];
	}
	if(isset($_POST['title2']))		
	{
	$title2 = $_POST['title2'];
	}
	if(isset($_POST['certificate2']))		
	{
    $certificate2 = $_POST['certificate2'];
	}
	if(isset($_POST['title3']))		
	{
	$title3 = $_POST['title3'];
	}
	if(isset($_POST['certificate3']))		
	{
	$certificate3 = $_POST['certificate3'];
	}
	
	if(isset($_POST['title4']))		
	{
	$title4 = $_POST['title4'];
	}
	if(isset($_POST['certificate4']))		
	{
	$certificate4 = $_POST['certificate4'];
	}
	
	if(isset($_POST['title5']))		
	{
	$title5 = $_POST['title5'];
	}
	if(isset($_POST['certificate5']))		
	{
	$certificate5 = $_POST['certificate5'];
	}
	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}

// Employee Image Upload
	$employeeimage = $_FILES['employeeimage']['name'];
	$employeeimage_tmp = $_FILES['employeeimage']['tmp_name'];
	$employeeimagefolder="uploads/employeefiles/".$employeeimage ;
	move_uploaded_file($employeeimage_tmp, $employeeimagefolder);

// Certficate 1
	$certificate1 = $_FILES['certificate1']['name'];
	$certificate1_tmp = $_FILES['certificate1']['tmp_name'];
	$certificate1folder ="uploads/employeefiles/".$certificate1 ;
	move_uploaded_file($certificate1_tmp, $certificate1folder);

// Certficate 2
	$certificate2 = $_FILES['certificate2']['name'];
	$certificate2_tmp = $_FILES['certificate2']['tmp_name'];
	$certificate2folder ="uploads/employeefiles/".$certificate2 ;
	move_uploaded_file($certificate2_tmp, $certificate2folder);

// Certficate 3
	$certificate3 = $_FILES['certificate3']['name'];
	$certificate3_tmp = $_FILES['certificate3']['tmp_name'];
	$certificate3folder ="uploads/employeefiles/".$certificate3;
	move_uploaded_file($certificate3_tmp, $certificate3folder);

// Certficate 3
	$certificate4 = $_FILES['certificate4']['name'];
	$certificate4_tmp = $_FILES['certificate4']['tmp_name'];
	$certificate4folder ="uploads/employeefiles/".$certificate4;
	move_uploaded_file($certificate4_tmp, $certificate4folder);

// Certficate 3
	$certificate5 = $_FILES['certificate5']['name'];
	$certificate5_tmp = $_FILES['certificate5']['tmp_name'];
	$certificate5folder ="uploads/employeefiles/".$certificate5;
	move_uploaded_file($certificate5_tmp, $certificate5folder);


		$qry = "INSERT INTO employee( employeecode, employeename,
		 dateofbirth, 
		gender, email, designation, mobilenumber, dateofjoining, contact, employeeimage,
		 expertise, starrating, basic, hra, conveyance, allowance, incentivepercent, grosspay,
		tds, pf, esi, loans, salaryadvance, totaldeduction, anyotherdeduction, institutetype1,
		name1, positionheld1, place1, fromperiod1, toperiod1, date1, institutetype2, name2, 
		positionheld2, place2, fromperiod2, toperiod2, date2, institutetype3, name3, positionheld3,
		 place3, fromperiod3, toperiod3, date3, institutetype4, name4, positionheld4, place4,
		fromperiod4, toperiod4, date4, institutetype5, name5, positionheld5, place5, fromperiod5,
	   toperiod5, date5, title1, certificate1, title2, certificate2, title3, certificate3,
		title4, certificate4, title5, certificate5,status) VALUES (
		'".strip_tags($employeecode)."',
		'".strip_tags($employeename)."',
		'".strip_tags($dateofbirth)."',
		'".strip_tags($gender)."',
		'".strip_tags($email)."',
		'".strip_tags($designation)."',
		'".strip_tags($mobilenumber)."',
		'".strip_tags($dateofjoining)."',
		'".strip_tags($contact)."',
		'".strip_tags($employeeimage)."',
		'".strip_tags($expertise)."',
		'".strip_tags($starrating)."',
		'".strip_tags($basic)."',
		'".strip_tags($hra)."',
		'".strip_tags($conveyance)."',
		'".strip_tags($allowance)."',
		'".strip_tags($incentivepercent)."',
		'".strip_tags($grosspay)."',
		'".strip_tags($tds)."',
		'".strip_tags($pf)."',
		'".strip_tags($esi)."',
		'".strip_tags($loans)."',
		'".strip_tags($salaryadvance)."',
		'".strip_tags($totaldeduction)."',
		'".strip_tags($anyotherdeduction)."',
	
		'".strip_tags($institutetype1)."',
		'".strip_tags($name1)."',
		'".strip_tags($positionheld1)."',
		'".strip_tags($place1)."',
		'".strip_tags($fromperiod1)."',
		'".strip_tags($toperiod1)."',
		'".strip_tags($date1)."',
	
		'".strip_tags($institutetype2)."',
		'".strip_tags($name2)."',
		'".strip_tags($positionheld2)."',
		'".strip_tags($place2)."',
		'".strip_tags($fromperiod2)."',
		'".strip_tags($toperiod2)."',
		'".strip_tags($date2)."',
	
		'".strip_tags($institutetype3)."',
		'".strip_tags($name3)."',
		'".strip_tags($positionheld3)."',
		'".strip_tags($place3)."',
		'".strip_tags($fromperiod3)."',
		'".strip_tags($toperiod3)."',
		'".strip_tags($date3)."',
	
		'".strip_tags($institutetype4)."',
		'".strip_tags($name4)."',
		'".strip_tags($positionheld4)."',
		'".strip_tags($place4)."',
		'".strip_tags($fromperiod4)."',
		'".strip_tags($toperiod4)."',
		'".strip_tags($date4)."',
	
		'".strip_tags($institutetype5)."',
		'".strip_tags($name5)."',
		'".strip_tags($positionheld5)."',
		'".strip_tags($place5)."',
		'".strip_tags($fromperiod5)."',
		'".strip_tags($toperiod5)."',
		'".strip_tags($date5)."',
	
	
		'".strip_tags($title1)."',
		'".strip_tags($certificate1)."',
		'".strip_tags($title2)."',
		'".strip_tags($certificate2)."',
		'".strip_tags($title3)."',
		'".strip_tags($certificate3)."',
		'".strip_tags($title4)."',
		'".strip_tags($certificate4)."',
		'".strip_tags($title5)."',
		'".strip_tags($certificate5)."',
		'".strip_tags($status)."'
	
		
		);";

		$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
		$id = 0;
		$id = $mysqli->insert_id;
		return $id; 
		
		}
	/*End Employee ADD*/


	/*Delete Employee master*/
		public function deleteemployeemaster($mysqli,$id) 
		{
			$date  = date('Y-m-d'); 
			$qry = 'UPDATE  employee  SET status="1"  WHERE employeeid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
			$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
		} 	
	 /*End Delete Employee*/


	 /*GET Employeemaster*/

	    
	 public function getemployeemaster($mysqli,$idupd) 
	 {
		 $qry = "SELECT * FROM employee WHERE employeeid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
		 $res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
		 $detailrecords = array();
		 if ($mysqli->affected_rows>0)
		 {
			 $row = $res->fetch_object();	
			 $detailrecords['employeeid']                    = $row->employeeid; 
			 $detailrecords['employeecode']       	        = strip_tags($row->employeecode);
			 $detailrecords['employeename']       	        = strip_tags($row->employeename);
			 $detailrecords['dateofbirth']              = strip_tags($row->dateofbirth);		  	
			 $detailrecords['gender']                     = strip_tags($row->gender);	
			 $detailrecords['email']                    = strip_tags($row->email); 
			 $detailrecords['designation']       	        = strip_tags($row->designation);
			 $detailrecords['mobilenumber']       	        = strip_tags($row->mobilenumber);
			 $detailrecords['dateofjoining']              = strip_tags($row->dateofjoining);		  	
			 $detailrecords['contact']                     = strip_tags($row->contact);		
			 $detailrecords['employeeimage']                    =strip_tags( $row->employeeimage); 
			 $detailrecords['expertise']       	        = strip_tags($row->expertise);
			 $detailrecords['starrating']       	        = strip_tags($row->starrating);
			 $detailrecords['basic']              = strip_tags($row->basic);		  	
			 $detailrecords['hra']                     = strip_tags($row->hra);	
			 $detailrecords['conveyance']                    = strip_tags($row->conveyance); 
			 $detailrecords['allowance']       	        = strip_tags($row->allowance);
			 $detailrecords['incentivepercent']       	        = strip_tags($row->incentivepercent);
			 $detailrecords['grosspay']              = strip_tags($row->grosspay);		  	
			 $detailrecords['tds']                     = strip_tags($row->tds);	
			 $detailrecords['pf']                    = strip_tags($row->pf); 
			 $detailrecords['esi']       	        = strip_tags($row->esi);
			 $detailrecords['loans']       	        = strip_tags($row->loans);
			 $detailrecords['salaryadvance']              = strip_tags($row->salaryadvance);		  	
			 $detailrecords['totaldeduction']                     = strip_tags($row->totaldeduction);	
			 $detailrecords['anyotherdeduction']                    = strip_tags($row->anyotherdeduction); 


			 $detailrecords['institutetype1']       	        = strip_tags($row->institutetype1);
			 $detailrecords['name1']       	        = strip_tags($row->name1);
			 $detailrecords['positionheld1']              = strip_tags($row->positionheld1);		  	
			 $detailrecords['place1']                     = strip_tags($row->place1);	
			 $detailrecords['fromperiod1']                    = strip_tags($row->fromperiod1); 
			 $detailrecords['toperiod1']       	        = strip_tags($row->toperiod1);
			 $detailrecords['date1']       	        = strip_tags($row->date1);


			 $detailrecords['institutetype2']       	        = strip_tags($row->institutetype2);
			 $detailrecords['name2']       	        = strip_tags($row->name2);
			 $detailrecords['positionheld2']              = strip_tags($row->positionheld2);		  	
			 $detailrecords['place2']                     = strip_tags($row->place2);	
			 $detailrecords['fromperiod2']                    = strip_tags($row->fromperiod2); 
			 $detailrecords['toperiod2']       	        = strip_tags($row->toperiod2);
			 $detailrecords['date2']       	        = strip_tags($row->date2);

			 $detailrecords['institutetype3']       	        = strip_tags($row->institutetype3);
			 $detailrecords['name3']       	        = strip_tags($row->name3);
			 $detailrecords['positionheld3']              = strip_tags($row->positionheld3);		  	
			 $detailrecords['place3']                     = strip_tags($row->place3);	
			 $detailrecords['fromperiod3']                    = strip_tags($row->fromperiod3); 
			 $detailrecords['toperiod3']       	        = strip_tags($row->toperiod3);
			 $detailrecords['date3']       	        = strip_tags($row->date3);

			 $detailrecords['institutetype4']       	        = strip_tags($row->institutetype4);
			 $detailrecords['name4']       	        = strip_tags($row->name1);
			 $detailrecords['positionheld4']              = strip_tags($row->positionheld4);		  	
			 $detailrecords['place4']                     = strip_tags($row->place4);	
			 $detailrecords['fromperiod4']                    = strip_tags($row->fromperiod4); 
			 $detailrecords['toperiod4']       	        = strip_tags($row->toperiod4);
			 $detailrecords['date4']       	        = strip_tags($row->date4);

			 $detailrecords['institutetype5']       	        = strip_tags($row->institutetype5);
			 $detailrecords['name5']       	        = strip_tags($row->name5);
			 $detailrecords['positionheld5']              = strip_tags($row->positionheld5);		  	
			 $detailrecords['place5']                     = strip_tags($row->place5);	
			 $detailrecords['fromperiod5']                    = strip_tags($row->fromperiod5); 
			 $detailrecords['toperiod5']       	        = strip_tags($row->toperiod5);
			 $detailrecords['date5']       	        = strip_tags($row->date5);


			 $detailrecords['toperiod1']       	        = strip_tags($row->toperiod1);
			 $detailrecords['date1']       	        = strip_tags($row->date1);

			 $detailrecords['toperiod2']       	        = strip_tags($row->toperiod2);
			 $detailrecords['date2']       	        = strip_tags($row->date2);

			 $detailrecords['toperiod3']       	        = strip_tags($row->toperiod3);
			 $detailrecords['date3']       	        = strip_tags($row->date3);

			 $detailrecords['toperiod4']       	        = strip_tags($row->toperiod4);
			 $detailrecords['date4']       	        = strip_tags($row->date4);

			 $detailrecords['toperiod5']       	        = strip_tags($row->toperiod5);
			 $detailrecords['date5']       	        = strip_tags($row->date5);

			 $detailrecords['title1']          =  strip_tags($row->title1);
			 $detailrecords['certificate1']          =  strip_tags($row->certificate1);

             $detailrecords['title2']          =  strip_tags($row->title2);
			 $detailrecords['certificate2']          =  strip_tags($row->certificate2);

			 $detailrecords['title3']          =  strip_tags($row->title3);
			 $detailrecords['certificate3']          =  strip_tags($row->certificate3);

			 $detailrecords['title4']          =  strip_tags($row->title4);
			 $detailrecords['certificate4']          =  strip_tags($row->certificate4);

			 $detailrecords['title5']          =  strip_tags($row->title5);
			 $detailrecords['certificate5']          =  strip_tags($row->certificate5);

			 $detailrecords['status'] =  strip_tags($row->status);
				
	 
		 }
		 return $detailrecords;
	 }


	 /*End Get employee master*/


	 /*Update employee Master*/

	 public function updateemployeemaster($mysqli,$id) { 		
	
		$date  = date('Y-m-d');
		if (isset($_POST['employeecode'])) {
		 $employeecode             = mysqli_real_escape_string($mysqli,$_POST['employeecode']);		
	   }
		if (isset($_POST['employeename'])) {
		$employeename             = mysqli_real_escape_string($mysqli,$_POST['employeename']);		
		}	
		if (isset($_POST['dateofbirth'])) {
		$dateofbirth               = mysqli_real_escape_string($mysqli,$_POST['dateofbirth']);		
		}
		if (isset($_POST['gender'])) {
		$gender               = mysqli_real_escape_string($mysqli,$_POST['gender']);		
		}
	   
		if (isset($_POST['email'])) {
		$email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
		}
	
		if (isset($_POST['designation'])) {
		$designation               = mysqli_real_escape_string($mysqli,$_POST['designation']);		
		}
		if (isset($_POST['mobilenumber'])) {
		$mobilenumber               = mysqli_real_escape_string($mysqli,$_POST['mobilenumber']);		
		}
		if (isset($_POST['dateofjoining'])) {
			$dateofjoining               = mysqli_real_escape_string($mysqli,$_POST['dateofjoining']);		
		}
		if (isset($_POST['contact'])) {
			$contact               = mysqli_real_escape_string($mysqli,$_POST['contact']);		
		}

		if (isset($_POST['expertise'])) {
			$expertise               = mysqli_real_escape_string($mysqli,$_POST['expertise']);		
		}
		if (isset($_POST['starrating'])) {
			$starrating               = mysqli_real_escape_string($mysqli,$_POST['starrating']);		
		}
		if (isset($_POST['basic'])) {
			$basic               = mysqli_real_escape_string($mysqli,$_POST['basic']);		
		}
		if (isset($_POST['hra'])) {
			$hra               = mysqli_real_escape_string($mysqli,$_POST['hra']);		
		}
		if (isset($_POST['conveyance'])) {
			$conveyance               = mysqli_real_escape_string($mysqli,$_POST['conveyance']);		
		}
		if (isset($_POST['allowance'])) {
			$allowance               = mysqli_real_escape_string($mysqli,$_POST['allowance']);		
		}
		if (isset($_POST['incentivepercent'])) {
			$incentivepercent               = mysqli_real_escape_string($mysqli,$_POST['incentivepercent']);		
		}
		if (isset($_POST['grosspay'])) {
			$grosspay               = mysqli_real_escape_string($mysqli,$_POST['grosspay']);		
		}
		if (isset($_POST['tds'])) {
			$tds               = mysqli_real_escape_string($mysqli,$_POST['tds']);		
		}
		if (isset($_POST['pf'])) {
			$pf               = mysqli_real_escape_string($mysqli,$_POST['pf']);		
		}
		if (isset($_POST['salaryadvance'])) {
			$salaryadvance               = mysqli_real_escape_string($mysqli,$_POST['salaryadvance']);		
		}
		if (isset($_POST['totaldeduction'])) {
			$totaldeduction               = mysqli_real_escape_string($mysqli,$_POST['totaldeduction']);		
		}
		if (isset($_POST['anyotherdeduction'])) {
			$anyotherdeduction               = mysqli_real_escape_string($mysqli,$_POST['anyotherdeduction']);		
		}
		if (isset($_POST['loans'])) {
			$loans               = mysqli_real_escape_string($mysqli,$_POST['loans']);		
		}
		if (isset($_POST['esi'])) {
			$esi               = mysqli_real_escape_string($mysqli,$_POST['esi']);		
		}
		
		if (isset($_POST['institutetype1'])) {
			$institutetype1               = mysqli_real_escape_string($mysqli,$_POST['institutetype1']);		
		}
		if (isset($_POST['name1'])) {
			$name1               = mysqli_real_escape_string($mysqli,$_POST['name1']);		
		}
		if (isset($_POST['positionheld1'])) {
			$positionheld1               = mysqli_real_escape_string($mysqli,$_POST['positionheld1']);		
		}
		if (isset($_POST['place1'])) {
			$place1               = mysqli_real_escape_string($mysqli,$_POST['place1']);		
		}
		if (isset($_POST['fromperiod1'])) {
			$fromperiod1               = mysqli_real_escape_string($mysqli,$_POST['fromperiod1']);		
		}
		if (isset($_POST['toperiod1'])) {
			$toperiod1               = mysqli_real_escape_string($mysqli,$_POST['toperiod1']);		
		}
		if (isset($_POST['date1'])) {
			$date1               = mysqli_real_escape_string($mysqli,$_POST['date1']);		
		}



		if (isset($_POST['institutetype2'])) {
			$institutetype2               = mysqli_real_escape_string($mysqli,$_POST['institutetype2']);		
		}
		if (isset($_POST['name2'])) {
			$name2               = mysqli_real_escape_string($mysqli,$_POST['name2']);		
		}
		if (isset($_POST['positionheld2'])) {
			$positionheld2               = mysqli_real_escape_string($mysqli,$_POST['positionheld2']);		
		}
		if (isset($_POST['place2'])) {
			$place2               = mysqli_real_escape_string($mysqli,$_POST['place2']);		
		}
		if (isset($_POST['fromperiod2'])) {
			$fromperiod2               = mysqli_real_escape_string($mysqli,$_POST['fromperiod2']);		
		}
		if (isset($_POST['toperiod2'])) {
			$toperiod2               = mysqli_real_escape_string($mysqli,$_POST['toperiod2']);		
		}
		if (isset($_POST['date2'])) {
			$date2               = mysqli_real_escape_string($mysqli,$_POST['date2']);		
		}

		if (isset($_POST['institutetype3'])) {
			$institutetype3               = mysqli_real_escape_string($mysqli,$_POST['institutetype3']);		
		}
		if (isset($_POST['name3'])) {
			$name3               = mysqli_real_escape_string($mysqli,$_POST['name3']);		
		}
		if (isset($_POST['positionheld3'])) {
			$positionheld3               = mysqli_real_escape_string($mysqli,$_POST['positionheld3']);		
		}
		if (isset($_POST['place3'])) {
			$place3               = mysqli_real_escape_string($mysqli,$_POST['place3']);		
		}
		if (isset($_POST['fromperiod3'])) {
			$fromperiod3               = mysqli_real_escape_string($mysqli,$_POST['fromperiod3']);		
		}
		if (isset($_POST['toperiod1'])) {
			$toperiod3               = mysqli_real_escape_string($mysqli,$_POST['toperiod3']);		
		}
		if (isset($_POST['date3'])) {
			$date3               = mysqli_real_escape_string($mysqli,$_POST['date3']);		
		}

		if (isset($_POST['institutetype4'])) {
			$institutetype4               = mysqli_real_escape_string($mysqli,$_POST['institutetype4']);		
		}
		if (isset($_POST['name4'])) {
			$name4               = mysqli_real_escape_string($mysqli,$_POST['name4']);		
		}
		if (isset($_POST['positionheld4'])) {
			$positionheld4               = mysqli_real_escape_string($mysqli,$_POST['positionheld4']);		
		}
		if (isset($_POST['place4'])) {
			$place4               = mysqli_real_escape_string($mysqli,$_POST['place4']);		
		}
		if (isset($_POST['fromperiod4'])) {
			$fromperiod4               = mysqli_real_escape_string($mysqli,$_POST['fromperiod4']);		
		}
		if (isset($_POST['toperiod4'])) {
			$toperiod4               = mysqli_real_escape_string($mysqli,$_POST['toperiod4']);		
		}
		if (isset($_POST['date4'])) {
			$date4               = mysqli_real_escape_string($mysqli,$_POST['date4']);		
		}
		
		if (isset($_POST['institutetype5'])) {
			$institutetype5               = mysqli_real_escape_string($mysqli,$_POST['institutetype5']);		
		}
		if (isset($_POST['name5'])) {
			$name5               = mysqli_real_escape_string($mysqli,$_POST['name5']);		
		}
		if (isset($_POST['positionheld5'])) {
			$positionheld5               = mysqli_real_escape_string($mysqli,$_POST['positionheld5']);		
		}
		if (isset($_POST['place5'])) {
			$place5               = mysqli_real_escape_string($mysqli,$_POST['place5']);		
		}
		if (isset($_POST['fromperiod5'])) {
			$fromperiod5               = mysqli_real_escape_string($mysqli,$_POST['fromperiod5']);		
		}
		if (isset($_POST['toperiod5'])) {
			$toperiod5               = mysqli_real_escape_string($mysqli,$_POST['toperiod5']);		
		}
		if (isset($_POST['date5'])) {
			$date5               = mysqli_real_escape_string($mysqli,$_POST['date5']);		
		}
		if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
		{
			$status=0;
		}
		else
		{
			$status=1;
		}

	   $updateQry = 'UPDATE  employee  SET employeecode="'.strip_tags($employeecode).'" ,
	   employeename="'.strip_tags($employeename).'" ,dateofbirth="'.strip_tags($dateofbirth).'" ,		
	   gender="'.strip_tags($gender).'" ,	email="'.strip_tags($email).'" ,	
	   designation="'.strip_tags($designation).'" ,mobilenumber="'.strip_tags($mobilenumber).'" ,	
	   dateofjoining="'.strip_tags($dateofjoining).'" ,contact="'.strip_tags($contact).'" ,
	   expertise="'.strip_tags($expertise).'" ,
	   starrating="'.strip_tags($starrating).'" ,basic="'.strip_tags($basic).'" ,
	   hra="'.strip_tags($hra).'" ,conveyance="'.strip_tags($conveyance).'" ,	 
	   allowance="'.strip_tags($allowance).'" ,incentivepercent="'.strip_tags($incentivepercent).'" ,	
	   grosspay="'.strip_tags($grosspay).'" ,tds="'.strip_tags($tds).'" ,	
	   pf="'.strip_tags($pf).'" ,esi="'.strip_tags($esi).'" ,	
	   loans="'.strip_tags($loans).'" ,salaryadvance="'.strip_tags($salaryadvance).'" ,	
	   totaldeduction="'.strip_tags($totaldeduction).'" ,anyotherdeduction="'.strip_tags($anyotherdeduction).'" ,	
	   

	
	   institutetype1="'.strip_tags($institutetype1).'" ,name1="'.strip_tags($name1).'" ,	
	   positionheld1="'.strip_tags($positionheld1).'" ,place1="'.strip_tags($place1).'" ,	
	   fromperiod1="'.strip_tags($fromperiod1).'",toperiod1="'.strip_tags($toperiod1).'",
	   date1="'.strip_tags($date1).'",

	   institutetype2="'.strip_tags($institutetype2).'" ,name2="'.strip_tags($name2).'" ,	
	   positionheld2="'.strip_tags($positionheld2).'" ,place2="'.strip_tags($place2).'" ,	
	   fromperiod2="'.strip_tags($fromperiod2).'",toperiod2="'.strip_tags($toperiod2).'",
	   date2="'.strip_tags($date2).'",

	   institutetype3="'.strip_tags($institutetype3).'" ,name3="'.strip_tags($name3).'" ,	
	   positionheld3="'.strip_tags($positionheld3).'" ,place3="'.strip_tags($place3).'" ,	
	   fromperiod3="'.strip_tags($fromperiod3).'",toperiod3="'.strip_tags($toperiod3).'",
	   date3="'.strip_tags($date3).'",

	   institutetype4="'.strip_tags($institutetype4).'" ,name4="'.strip_tags($name4).'" ,	
	   positionheld4="'.strip_tags($positionheld4).'" ,place4="'.strip_tags($place4).'" ,	
	   fromperiod4="'.strip_tags($fromperiod4).'",toperiod4="'.strip_tags($toperiod4).'",
	   date4="'.strip_tags($date4).'",

	   institutetype5="'.strip_tags($institutetype5).'" ,name5="'.strip_tags($name5).'" ,	
	   positionheld5="'.strip_tags($positionheld5).'" ,place5="'.strip_tags($place5).'" ,	
	   fromperiod5="'.strip_tags($fromperiod5).'",toperiod5="'.strip_tags($toperiod5).'",
	   date5="'.strip_tags($date5).'",

	   status="'.$status.'" WHERE employeeid="'.mysqli_real_escape_string($mysqli,$id).'"';  
   
   $res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
			
			 
   }







   /* Customer Details Add */ 

public function addcustomer($mysqli)  
{
	$date  = date('Y-m-d');

	// if (isset($_POST['customercode'])) {
		$customercode = rand(1000,10000);
		$customercode             = mysqli_real_escape_string($mysqli,$customercode);
	//    }

	if (isset($_POST['customername'])) {
	 $customername             = mysqli_real_escape_string($mysqli,$_POST['customername']);
	}
	if (isset($_POST['gender'])) {
	$gender             = mysqli_real_escape_string($mysqli,$_POST['gender']);		
	}	
	if (isset($_POST['dateofbirth'])) {
	$dateofbirth               = mysqli_real_escape_string($mysqli,$_POST['dateofbirth']);		
	}
	if (isset($_POST['customerimage'])) {
	$customerimage               = mysqli_real_escape_string($mysqli,$_POST['customerimage']);		
	}
	if (isset($_POST['age'])) {
	 $age             = mysqli_real_escape_string($mysqli,$_POST['age']);
	}
	if (isset($_POST['mobilenumber'])) {
	$mobilenumber             = mysqli_real_escape_string($mysqli,$_POST['mobilenumber']);		
	}	
	if (isset($_POST['whatsappnumber'])) {
	$whatsappnumber               = mysqli_real_escape_string($mysqli,$_POST['whatsappnumber']);		
	}
	if (isset($_POST['anniverserydate'])) {
	$anniverserydate               = mysqli_real_escape_string($mysqli,$_POST['anniverserydate']);		
	}
	if (isset($_POST['emailid'])) {
	$emailid               = mysqli_real_escape_string($mysqli,$_POST['emailid']);		
	}
	if (isset($_POST['needmembership'])) {
	 $needmembership             = mysqli_real_escape_string($mysqli,$_POST['needmembership']);
	}


	if (isset($_POST['gstno'])) {
		$gstno               = mysqli_real_escape_string($mysqli,$_POST['gstno']);		
		}
		if (isset($_POST['contactpersion'])) {
		 $contactpersion             = mysqli_real_escape_string($mysqli,$_POST['contactpersion']);
		}
		if (isset($_POST['address1'])) {
		$address1             = mysqli_real_escape_string($mysqli,$_POST['address1']);		
		}	
		if (isset($_POST['address2'])) {
		$address2               = mysqli_real_escape_string($mysqli,$_POST['address2']);		
		}
		if (isset($_POST['pincode'])) {
		$pincode               = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
		}
		if (isset($_POST['state'])) {
		$state               = mysqli_real_escape_string($mysqli,$_POST['state']);		
		}
		

	if (isset($_POST['typeofcustomer'])) {
	$typeofcustomer             = mysqli_real_escape_string($mysqli,$_POST['typeofcustomer']);		
	}	
	if (isset($_POST['noofvisit'])) {
	$noofvisit               = mysqli_real_escape_string($mysqli,$_POST['noofvisit']);		
	}
	if (isset($_POST['frequencyofvisit'])) {
	$frequencyofvisit               = mysqli_real_escape_string($mysqli,$_POST['frequencyofvisit']);
	}



	if (isset($_POST['subgroup'])) {
		$subgroup             = mysqli_real_escape_string($mysqli,$_POST['subgroup']);
	   }

	   if (isset($_POST['groups'])) {
		$groups             = mysqli_real_escape_string($mysqli,$_POST['groups']);
	   }

	   if (isset($_POST['ledgername'])) {
		$ledgername             = mysqli_real_escape_string($mysqli,$_POST['ledgername']);
	   }

	
	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}

	if(isset($_POST['costcenter']) &&    $_POST['costcenter'] == 'Yes')		
	{
		$costcenter="yes";
	}
	else
	{
		$costcenter="No";
	}

	
	if(isset($_POST['inventory']) &&    $_POST['inventory'] == 'Yes')		
	{
		$inventory="yes";
	}
	else
	{
		$inventory="No";
	}
// Customer Image Upload
$customerimage = $_FILES['customerimage']['name'];
$customerimage_tmp = $_FILES['customerimage']['tmp_name'];
$customerimagefolder="uploads/customerimage/".$customerimage ;
move_uploaded_file($customerimage_tmp, $customerimagefolder);

	$qry = "INSERT INTO customer(customercode , customername, gender, dateofbirth,
	 customerimage, age, mobilenumber, whatsappnumber,
	 anniverserydate, emailid, needmembership,gstno, contactpersion, address1,
	 address2, pincode, state,typeofcustomer,
	  noofvisit, frequencyofvisit,subgroup,groups,ledgername,costcenter,inventory,status) 
	VALUES (
		'".strip_tags($customercode)."',
	'".strip_tags($customername)."',
	'".strip_tags($gender)."',
	'".strip_tags($dateofbirth)."',
	'".strip_tags($customerimage)."',
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
	'".strip_tags($ledgername)."',

	'".strip_tags($costcenter)."',
	'".strip_tags($inventory)."',

	'".strip_tags($status)."');";		

	$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	$id = 0;
	$id = $mysqli->insert_id;

	return $id; 
}

public function deletecustomer($mysqli,$id) 
{
	$date  = date('Y-m-d'); 
	$qry = 'UPDATE  customer  SET status="1"  WHERE customid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
}

public function updatecustomer($mysqli,$id){

	$date  = date('Y-m-d');
	$customercode             = mysqli_real_escape_string($mysqli,$customercode);

	// if (isset($_POST['customercode'])) {
	// 	$customercode            = mysqli_real_escape_string($mysqli,$_POST['customercode']);
	//    }
	if (isset($_POST['customername'])) {
	 $customername             = mysqli_real_escape_string($mysqli,$_POST['customername']);
	}
	if (isset($_POST['gender'])) {
	$gender             = mysqli_real_escape_string($mysqli,$_POST['gender']);		
	}	
	if (isset($_POST['dateofbirth'])) {
	$dateofbirth               = mysqli_real_escape_string($mysqli,$_POST['dateofbirth']);		
	}
	if (isset($_POST['customerimage'])) {
	$customerimage               = mysqli_real_escape_string($mysqli,$_POST['customerimage']);		
	}
	if (isset($_POST['age'])) {
	 $age             = mysqli_real_escape_string($mysqli,$_POST['age']);
	}
	if (isset($_POST['mobilenumber'])) {
	$mobilenumber             = mysqli_real_escape_string($mysqli,$_POST['mobilenumber']);		
	}	
	if (isset($_POST['whatsappnumber'])) {
	$whatsappnumber               = mysqli_real_escape_string($mysqli,$_POST['whatsappnumber']);		
	}
	if (isset($_POST['anniverserydate'])) {
	$anniverserydate               = mysqli_real_escape_string($mysqli,$_POST['anniverserydate']);		
	}
	if (isset($_POST['emailid'])) {
	$emailid               = mysqli_real_escape_string($mysqli,$_POST['emailid']);		
	}
	if (isset($_POST['needmembership'])) {
	 $needmembership             = mysqli_real_escape_string($mysqli,$_POST['needmembership']);
	}



	
	if (isset($_POST['gstno'])) {
		$gstno               = mysqli_real_escape_string($mysqli,$_POST['gstno']);		
		}
		if (isset($_POST['contactpersion'])) {
		 $contactpersion             = mysqli_real_escape_string($mysqli,$_POST['contactpersion']);
		}
		if (isset($_POST['address1'])) {
		$address1             = mysqli_real_escape_string($mysqli,$_POST['address1']);		
		}	
		if (isset($_POST['address2'])) {
		$address2               = mysqli_real_escape_string($mysqli,$_POST['address2']);		
		}
		if (isset($_POST['pincode'])) {
		$pincode               = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
		}
		if (isset($_POST['state'])) {
		$state               = mysqli_real_escape_string($mysqli,$_POST['state']);		
		}



	if (isset($_POST['typeofcustomer'])) {
	$typeofcustomer             = mysqli_real_escape_string($mysqli,$_POST['typeofcustomer']);		
	}	
	if (isset($_POST['noofvisit'])) {
	$noofvisit               = mysqli_real_escape_string($mysqli,$_POST['noofvisit']);		
	}
	if (isset($_POST['frequencyofvisit'])) {
	$frequencyofvisit               = mysqli_real_escape_string($mysqli,$_POST['frequencyofvisit']);
	}
	


	if (isset($_POST['subgroup'])) {
		$subgroup             = mysqli_real_escape_string($mysqli,$_POST['subgroup']);
	   }

	   if (isset($_POST['groups'])) {
		$groups             = mysqli_real_escape_string($mysqli,$_POST['groups']);
	   }

	   if (isset($_POST['ledgername'])) {
		$ledgername             = mysqli_real_escape_string($mysqli,$_POST['ledgername']);
	   }



	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}


	if(isset($_POST['costcenter']) &&    $_POST['costcenter'] == 'Yes')		
	{
		$costcenter="yes";
	}
	else
	{
		$costcenter="No";
	}

	
	if(isset($_POST['inventory']) &&    $_POST['inventory'] == 'Yes')		
	{
		$inventory="yes";
	}
	else
	{
		$inventory="No";
	}

	


 $updateQry = 'UPDATE  customer  SET 
 customercode="'.strip_tags($customercode).'" ,
 customername="'.strip_tags($customername).'" ,
 gender="'.strip_tags($gender).'" ,
 dateofbirth="'.strip_tags($dateofbirth).'" ,
 customerimage="'.strip_tags($customerimage).'" ,	
 age="'.strip_tags($age).'" ,	
 mobilenumber="'.strip_tags($mobilenumber).'" ,
 whatsappnumber="'.strip_tags($whatsappnumber).'" ,	
 anniverserydate="'.strip_tags($anniverserydate).'", 
 emailid="'.strip_tags($emailid).'" ,
 needmembership="'.strip_tags($needmembership).'" ,


 gstno="'.strip_tags($gstno).'" ,	
 contactpersion="'.strip_tags($contactpersion).'" ,
 address1="'.strip_tags($address1).'" ,	
 address2="'.strip_tags($address2).'", 
 pincode="'.strip_tags($pincode).'" ,
 state="'.strip_tags($state).'" ,

 typeofcustomer="'.strip_tags($typeofcustomer).'", 
 noofvisit="'.strip_tags($noofvisit).'" ,
 frequencyofvisit="'.strip_tags($frequencyofvisit).'" ,

 subgroup="'.strip_tags($subgroup).'" ,
 groups="'.strip_tags($groups).'" ,
 ledgername="'.strip_tags($ledgername).'" ,

 costcenter="'.strip_tags($costcenter).'" ,
 inventory="'.strip_tags($inventory).'" ,

 status="'.$status.'" WHERE customid="'.mysqli_real_escape_string($mysqli,$id).'"';  

$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
}

public function getcustomer($mysqli,$idupd)
{
	$qry = "SELECT * FROM customer WHERE customid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	$detailrecords = array();
	if ($mysqli->affected_rows>0)
	{
		$row = $res->fetch_object();	
		$detailrecords['customid']                    = $row->customid; 
		$detailrecords['customercode']                    = strip_tags($row->customercode); 
		$detailrecords['customername']       	       = strip_tags($row->customername);
		$detailrecords['gender']       	       = strip_tags($row->gender);
		$detailrecords['dateofbirth']                  = strip_tags($row->dateofbirth);		  	
	    $detailrecords['customerimage']             = strip_tags($row->customerimage);
		$detailrecords['age']       	           = strip_tags($row->age);
		$detailrecords['mobilenumber']       	           = strip_tags($row->mobilenumber);
		$detailrecords['whatsappnumber']                   = strip_tags($row->whatsappnumber);		  	
		$detailrecords['anniverserydate']                    = strip_tags($row->anniverserydate);	
		$detailrecords['emailid']       	           = strip_tags($row->emailid);
		$detailrecords['needmembership']       	       = strip_tags($row->needmembership);

		$detailrecords['gstno']       	           = strip_tags($row->gstno);
		$detailrecords['contactpersion']       	           = strip_tags($row->contactpersion);
		$detailrecords['address1']                   = strip_tags($row->address1);		  	
		$detailrecords['address2']                    = strip_tags($row->address2);	
		$detailrecords['pincode']       	           = strip_tags($row->pincode);
		$detailrecords['state']       	       = strip_tags($row->state);

		$detailrecords['typeofcustomer']              = strip_tags($row->typeofcustomer);		  	
		$detailrecords['noofvisit']             = strip_tags($row->noofvisit);	
		$detailrecords['frequencyofvisit']       	       = strip_tags($row->frequencyofvisit);

		$detailrecords['subgroup']              = strip_tags($row->subgroup);		  	
		$detailrecords['groups']             = strip_tags($row->groups);	
		$detailrecords['ledgername']       	       = strip_tags($row->ledgername);

		$detailrecords['costcenter']             = strip_tags($row->costcenter);	
		$detailrecords['inventory']       	       = strip_tags($row->inventory);

		$detailrecords['status']                    = strip_tags($row->status);		


		

	}
	return $detailrecords;
}







  /* tax master Details Add */ 

  public function addtaxmaster($mysqli)  
  {
	  $date  = date('Y-m-d');
  
	  if (isset($_POST['financialyear'])) {
	   $financialyear             = mysqli_real_escape_string($mysqli,$_POST['financialyear']);
	  }
	  if (isset($_POST['classification'])) {
	  $classification             = mysqli_real_escape_string($mysqli,$_POST['classification']);		
	  }	
	  if (isset($_POST['description'])) {
	  $description               = mysqli_real_escape_string($mysqli,$_POST['description']);		
	  }
	  if (isset($_POST['tax'])) {
		$tax               = mysqli_real_escape_string($mysqli,$_POST['tax']);		
		}
	  if (isset($_POST['cess'])) {
	  $cess               = mysqli_real_escape_string($mysqli,$_POST['cess']);		
	  }
	  if (isset($_POST['addl'])) {
	   $addl             = mysqli_real_escape_string($mysqli,$_POST['addl']);
	  }
	  if (isset($_POST['total'])) {
	  $total             = mysqli_real_escape_string($mysqli,$_POST['total']);		
	  }	
	  
	  if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	  {
		  $status=0;
	  }
	  else
	  {
		  $status=1;
	  }

	  $qry = "INSERT INTO taxmaster(
		  financialyear, classification,
	   description,tax,
	   cess, addl, total, status) 
	  VALUES (
	  '".strip_tags($financialyear)."',
	  '".strip_tags($classification)."',
	  '".strip_tags($description)."',
	  '".strip_tags($tax)."',
	  '".strip_tags($cess)."',
	  '".strip_tags($addl)."',
	  '".strip_tags($total)."',
	  '".strip_tags($status)."');";		
  
	  $res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	  $id = 0;
	  $id = $mysqli->insert_id;
  
	  return $id; 
  }

  public function deletetaxmaster($mysqli,$id) 
  {
	  $date  = date('Y-m-d'); 
	  $qry = 'UPDATE  taxmaster  SET status="1"  WHERE taxid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	  $res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
  }
  
  public function updatetaxmaster($mysqli,$id){

	$date  = date('Y-m-d');
	if (isset($_POST['financialyear'])) {
		$financialyear            = mysqli_real_escape_string($mysqli,$_POST['financialyear']);
	   }
	if (isset($_POST['classification'])) {
	 $classification             = mysqli_real_escape_string($mysqli,$_POST['classification']);
	}
	if (isset($_POST['description'])) {
	$description             = mysqli_real_escape_string($mysqli,$_POST['description']);		
	}	
	if (isset($_POST['tax'])) {
	$tax               = mysqli_real_escape_string($mysqli,$_POST['tax']);		
	}
	if (isset($_POST['cess'])) {
	$cess               = mysqli_real_escape_string($mysqli,$_POST['cess']);		
	}
	if (isset($_POST['addl'])) {
	 $addl             = mysqli_real_escape_string($mysqli,$_POST['addl']);
	}
	if (isset($_POST['total'])) {
	$total             = mysqli_real_escape_string($mysqli,$_POST['total']);		
	}	
	
	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}


 $updateQry = 'UPDATE  taxmaster  SET 
 financialyear="'.strip_tags($financialyear).'" ,
 classification="'.strip_tags($classification).'" ,
 description="'.strip_tags($description).'" ,
 tax="'.strip_tags($tax).'" ,
 cess="'.strip_tags($cess).'" ,	
 addl="'.strip_tags($addl).'" ,	
 total="'.strip_tags($total).'" ,

 status="'.$status.'" WHERE taxid="'.mysqli_real_escape_string($mysqli,$id).'"';  

$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
}


  public function gettaxmaster($mysqli,$idupd)
  {
	  $qry = "SELECT * FROM taxmaster WHERE taxid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	  $res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	  $detailrecords = array();
	  if ($mysqli->affected_rows>0)
	  {
		  $row = $res->fetch_object();	
		  $detailrecords['taxid']                    = $row->taxid; 
		  $detailrecords['financialyear']       	 = strip_tags($row->financialyear);
		  $detailrecords['classification']       	 = strip_tags($row->classification);
		  $detailrecords['description']              = strip_tags($row->description);	
		  $detailrecords['tax']                      = strip_tags($row->tax);		  	
		  $detailrecords['cess']                     = strip_tags($row->cess);		
		  $detailrecords['addl']       	             = strip_tags($row->addl);
		  $detailrecords['total']       	         = strip_tags($row->total);
		  $detailrecords['status']                   = strip_tags($row->status);		
  
	  }
	  return $detailrecords;
  }
	}
	
?>