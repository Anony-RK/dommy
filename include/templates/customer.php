<?php 
$id=0;
 if(isset($_POST['submitcustomer']) )
 {
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $updatecustomer = $userObj->updatecustomer($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>editcustomer&msc=2';</script> 
    <?php	}
    else{   
		$addcustomer = $userObj->addcustomer($mysqli);   
        ?>
     <script>location.href='<?php echo $HOSTPATH;  ?>editcustomer&msc=1';</script>
        <?php
    }
 }  
 
$del=0;
if(isset($_GET['del']))
{
$del=$_GET['del'];
}
if($del>0)
{
	$deletecustomer = $userObj->deletecustomer($mysqli,$del); 
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>editcustomer&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$getcustomer = $userObj->getcustomer($mysqli,$idupd); 
	
	if (sizeof($getcustomer)>0) {
        for($icustomer=0;$icustomer<sizeof($getcustomer);$icustomer++)  {	
            $customid                = $getcustomer['customid'];
            $customercode              = $getcustomer['customercode'];
            $customername            = $getcustomer['customername'];
			$gender                	 = $getcustomer['gender'];
			$dateofbirth      	     = $getcustomer['dateofbirth'];
            $customerimage     	     = $getcustomer['customerimage'];
            $age      			     = $getcustomer['age'];
			$mobilenumber       	 = $getcustomer['mobilenumber'];
			$whatsappnumber          = $getcustomer['whatsappnumber'];
			$anniverserydate         = $getcustomer['anniverserydate'];
			$emailid     			 = $getcustomer['emailid'];
			$needmembership          = $getcustomer['needmembership'];
            
            $gstno                   = $getcustomer['gstno'];
            $contactpersion          = $getcustomer['contactpersion'];
            $address1                 = $getcustomer['address1'];
            $address2                 = $getcustomer['address2'];
            $pincode                  = $getcustomer['pincode'];
            $state                    = $getcustomer['state'];
            

			$typeofcustomer	         = $getcustomer['typeofcustomer'];
			$noofvisit               = $getcustomer['noofvisit'];
            $frequencyofvisit        = $getcustomer['frequencyofvisit']; 
		


            $subgroup          = $getcustomer['subgroup'];
            $groups          = $getcustomer['groups'];
            $ledgername          = $getcustomer['ledgername'];

            $costcenter          = $getcustomer['costcenter'];
            $inventory          = $getcustomer['inventory'];



            $status	    		     = $getcustomer['status'];

		}
	}
}
?>
  


<!-- Page header start -->
<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Customer Master</li>
					</ol>

					<a href="editcustomer">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Customer</button>
					</a>

				</div>
				<!-- Page header end -->

				<!-- Main container start -->
				<div class="main-container">


<!--------form start-->
<form id = "employee" name="customer" action="" method="post" enctype="multipart/form-data"> 
<input type="hidden" class="form-control" value="<?php if(isset($customerid )) echo $customerid ; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter id">

 		<!-- Row start -->
         <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header">
						<div class="card-title">General Info</div>
					</div>
                    <div class="card-body">

                    	 <div class="row ">
                            <!--Fields -->
                           <div class="col-md-8 "> 
                              <div class="row">
                                       <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label >Customer Code</label>
                                                <input type="text" tabindex="1" readonly  class="form-control" id="customercode" name="customerCode" value="<?php if(isset($customercode )) echo $customercode ; ?>" >
                                                <label id="customeridcheck" class="text-danger">Enter Customer Code</label>

                                            </div>
                                        </div>
                                       <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label >Customer Name</label>
                                                <input type="text" tabindex="1" onkeyup="watch()" class="form-control" id="customername" name="customername" value="<?php if(isset($customername )) echo $customername ; ?>" placeholder="Enter Customer Name">
                                                <label id="customernamecheck" class="text-danger">Enter Customer Name</label>

                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="disabledInput">Gender <span class="required">*</span></label>
                                            <select class="form-control" tabindex="3" id="gender" name="gender">
                                                
                                                <option value=""> Select Gender</option>
                                                <option <?php if(isset($gender)) { if($gender == "Male" ) echo 'selected'; }  ?> value="Male"> Male</option>
                                                <option  <?php if(isset($gender)) { if($gender == "Female" ) echo 'selected'; }  ?> value="Female"> FeMale</option>
                                            </select>
                                            <label id="gendercheck" class="text-danger">Select Gender</label>
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="inputEmail">Date Of Birth</label>
                                            <input type="date" tabindex="5" class="form-control" id="dateofbirth" name="dateofbirth" value="<?php if(isset($dateofbirth )) echo $dateofbirth ; ?>">
                                            <label id="dateofbirthcheck" class="text-danger">Select Date Of Birth</label>

                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Age<span class="required">*</span></label>
                                                <input type="number" id="age" tabindex="4" name="age" class="form-control"  value="<?php if(isset($age )) echo $age ; ?>" >
                                                <label id="agecheck" class="text-danger" >Enter Age</label>
                                            </div>
                                        </div>
                                    
                                    <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Mobile Number <span class="required">*</span></label>
                                                <input type="number" onkeyup="mobile()" id="mobilenumber" tabindex="4" name="mobilenumber" class="form-control"  value="<?php if(isset($mobilenumber )) echo $mobilenumber ; ?>" placeholder="Enter Mobile Number">
                                                <label id="mobilenumbercheck" class="text-danger" >Enter Mobile Number</label>
                                            </div>
                                        </div><br><br>
<!-- </div> -->
<!-- </div><div class="container"> -->
    <!-- <div class="row"> -->
                                       

                                       
                                       
                                    </div>
                                </div>  

                                   <!-- Field Finished -->
                                   <?php if(isset($_GET['upd'])<=0){ ?>
                                   <div class="col-md-4"><br />
                                   <div class="col-xl-12 col-lglg-4 col-md-6 col-sm-6 col-12 mx-auto">
                                            <div class="form-group" style="margin: auto;"> 
                                            <img src="img/profile-pic.jpg" width="43%" id="viewimage" >
                                            <!-- <img src="uploads/<?php echo $customerimage; ?> " width="43%" id="viewimage" > -->
                                            <input type="file" tabindex="7"  class="form-control" 
                                            accept="image/*" onchange="loadFile(event)"  
                                            id="customerimage" name="customerimage" style="width:43%"
                                            >
                                            </div>

                                        </div>
                                        <script>
                                            var loadFile = function(event) {
                                                var image = document.getElementById("viewimage");
                                                image.src = URL.createObjectURL(event.target.files[0]);
                                            };
                                        </script>
                                   </div>
                               <?php } ?>
                                </div>
                              </div>
<div class="row mx-1">
                              <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Whatsapp Number</label>
                                                <input type="text" tabindex="6" id="whatsappnumber" name="whatsappnumber" class="form-control" value="<?php if(isset($whatsappnumber )) echo $whatsappnumber ; ?>">                                           
                                                <label id="whatsappnumbercheck" class="text-danger">Enter Whatsapp Number</label>
                                                </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Anniversery Date</label>
                                                <input type="date" tabindex="6" id="anniverserydate" name="anniverserydate" class="form-control" value="<?php if(isset($anniverserydate )) echo $anniverserydate ; ?>">
                                                <label id="anniverserydatecheck" class="text-danger">Select Anniversery Date</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Email Id</label>
                                                <input type="email" tabindex="6" id="emailid" name="emailid" class="form-control" value="<?php if(isset($emailid )) echo $emailid ; ?>">
                                                <label id="emailidcheck" class="text-danger">Enter Email Id</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Need Membership</label>
                                                <select class="form-control" tabindex="3" id="needmembership" name="needmembership">
                                                
                                                <option value=""> Select Membership</option>
                                                <option <?php if(isset($needmembership)) { if($needmembership == "Yes" ) echo 'selected'; }  ?> value="Yes"> Yes</option>
                                                <option  <?php if(isset($needmembership)) { if($needmembership == "No" ) echo 'selected'; }  ?> value="No"> No</option>
                                            </select>
                                             <label id="needmembershipcheck" class="text-danger">Enter Need Membership</label>           
                                            </div>
                                        </div>


                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">GST No</label>
                                                <input type="text" tabindex="6" id="gstno" name="gstno" class="form-control" value="<?php if(isset($gstno )) echo $gstno ; ?>">
                                                <!-- <label id="gstnovalid" class="text-danger">Enter Valid GST Number</label> -->
                                                <label id="gstnocheck" class="text-danger">Enter GST Number</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Contact Persion</label>
                                                <input type="text" tabindex="6" id="contactpersion" name="contactpersion" class="form-control" value="<?php if(isset($contactpersion )) echo $contactpersion ; ?>">
                                                <label id="contactpersioncheck" class="text-danger">Enter Contact Persion</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Address 1</label>
                                                <input type="text" tabindex="6" id="address1" name="address1" class="form-control" value="<?php if(isset($address1 )) echo $address1 ; ?>">
                                                <label id="address1check" class="text-danger">Enter Address 1</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Address 2</label>
                                                <input type="text" tabindex="6" id="address2" name="address2" class="form-control" value="<?php if(isset($address2 )) echo $address2 ; ?>">
                                                <label id="address2check" class="text-danger">Enter Address 2</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Pin Code</label>
                                                <input type="number" tabindex="6" id="pincode" name="pincode" class="form-control" value="<?php if(isset($pincode )) echo $pincode ; ?>">
                                                <label id="pincodecheck" class="text-danger">Enter Pincode</label>
                                            </div>
                                        </div>


                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">State</label>                                               
                                                <select class="form-control chosen-select comp-field " id="state" name="state"><option value="">Select a State...</option>
                                                    <option <?php if(isset($state)) { if($state == "Andhra Pradesh" ) echo 'selected'; }  ?>  value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option <?php if(isset($state)) { if($state == "Arunachal Pradesh" ) echo 'selected'; }  ?>  value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option <?php if(isset($state)) { if($state == "Assam" ) echo 'selected'; }  ?>  value="Assam ">Assam </option>
                                                    <option <?php if(isset($state)) { if($state == "Bihar" ) echo 'selected'; }  ?>  value="Bihar ">Bihar </option>
                                                    <option <?php if(isset($state)) { if($state == "Chandigarh" ) echo 'selected'; }  ?>  value="Chandigarh ">Chandigarh </option>
                                                    <option <?php if(isset($state)) { if($state == "Chandigarh" ) echo 'selected'; }  ?>  value="Chandigarh">Chandigarh</option>
                                                    <option <?php if(isset($state)) { if($state == "Gujarat" ) echo 'selected'; }  ?>  value="Gujarat">Gujarat</option>
                                                    <option <?php if(isset($state)) { if($state == "Haryana" ) echo 'selected'; }  ?>  value="Haryana">Haryana</option>
                                                    <option <?php if(isset($state)) { if($state == "Himachal Pradesh" ) echo 'selected'; }  ?>  value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option <?php if(isset($state)) { if($state == "Jharkhand" ) echo 'selected'; }  ?>  value="Jharkhand">Jharkhand</option>
                                                    <option <?php if(isset($state)) { if($state == "Karnataka" ) echo 'selected'; }  ?>  value="Karnataka">Karnataka</option>
                                                    <option <?php if(isset($state)) { if($state == "Kerala" ) echo 'selected'; }  ?>  value="Kerala">Kerala</option>
                                                    <option <?php if(isset($state)) { if($state == "Madhya Pradesh" ) echo 'selected'; }  ?>  value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option <?php if(isset($state)) { if($state == "Maharashtra" ) echo 'selected'; }  ?>  value="Maharashtra">Maharashtra</option>
                                                    <option <?php if(isset($state)) { if($state == "Manipur" ) echo 'selected'; }  ?>  value="Manipur">Manipur</option>
                                                    <option <?php if(isset($state)) { if($state == "Meghalaya" ) echo 'selected'; }  ?>  value="Meghalaya">Meghalaya</option>
                                                    <option <?php if(isset($state)) { if($state == "Mizoram" ) echo 'selected'; }  ?>  value="Mizoram">Mizoram</option>
                                                    <option <?php if(isset($state)) { if($state == "Nagaland" ) echo 'selected'; }  ?>  value="Nagaland">Nagaland</option>
                                                    <option <?php if(isset($state)) { if($state == "Odisha" ) echo 'selected'; }  ?>  value="Odisha">Odisha</option>
                                                    <option <?php if(isset($state)) { if($state == "Puducherry" ) echo 'selected'; }  ?>  value="Puducherry">Puducherry</option>
                                                    <option <?php if(isset($state)) { if($state == "Punjab" ) echo 'selected'; }  ?>  value="Punjab">Punjab</option>
                                                    <option <?php if(isset($state)) { if($state == "Rajasthan" ) echo 'selected'; }  ?>  value="Rajasthan">Rajasthan</option>
                                                    <option <?php if(isset($state)) { if($state == "Sikkim" ) echo 'selected'; }  ?>  value="Sikkim">Sikkim</option>
                                                    <option <?php if(isset($state)) { if($state == "Tamil Nadu" ) echo 'selected'; }  ?>  value="Tamil Nadu">Tamil Nadu</option>
                                                    <option <?php if(isset($state)) { if($state == "Telangana" ) echo 'selected'; }  ?>  value="Telangana">Telangana</option>
                                                    <option <?php if(isset($state)) { if($state == "Tripura" ) echo 'selected'; }  ?>  value="Tripura">Tripura</option>
                                                    <option <?php if(isset($state)) { if($state == "Uttar Pradesh" ) echo 'selected'; }  ?>  value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option <?php if(isset($state)) { if($state == "Uttarakhand" ) echo 'selected'; }  ?>  value="Uttarakhand">Uttarakhand</option>
                                                    <option <?php if(isset($state)) { if($state == "West Bengal" ) echo 'selected'; }  ?>  value="West Bengal">West Bengal</option>
                                                </select>
                                                <label id="statecheck" class="text-danger">Enter State</label>
                                            </div>
                                        </div>






                                        </div>             </div>
                          </div>
                      </div>
                  </div>



            <!-- </div> -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header">
						<div class="card-title">Type</div>
					</div>
                    <div class="card-body">
                        
                        <div class="row ">
                          
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Type Of Customer</label>
                                    <!-- <input id="TypeofCustomer" name="TypeofCustomer" type="hidden" value="" /> -->
                                    <select class="form-control" tabindex="3" id="typeofcustomer" name="typeofcustomer">     
                                      <option value=""> Select Type</option>
                                      <option <?php if(isset($typeofcustomer)) { if($typeofcustomer == "Regular" ) echo 'selected'; }  ?> value="Regular"> Regular</option>
                                      <option <?php if(isset($typeofcustomer)) { if($typeofcustomer == "New" ) echo 'selected'; }  ?> value="New"> New</option>
                                    </select>
                               <label id="typeofcustomercheck" class="text-danger">Type Of Customer</label>           

                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputEmail">No of Visit</label>
                                    <input type="number" tabindex="12" class="form-control" id="noofvisit" name="noofvisit"  value="<?php if(isset($noofvisit )) echo $noofvisit ; ?>">
                                    <label id="noofvisitcheck" class="text-danger">Enter number Of VIsit</label>           

                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                    <label for="inputEmail">Frequency Of Visit</label>
                                    <input type="number" tabindex="12" class="form-control" id="frequencyofvisit" name="frequencyofvisit"  value="<?php if(isset($frequencyofvisit )) echo $frequencyofvisit ; ?>">
                                    <label id="frequencyofvisitcheck" class="text-danger">Enter Frequency OF Visit</label>           
                                </div>
                            </div>
                      


                    


                        </div>

                       
                    </div>


                    
                </div>
               
             </div>
             <div>
          <div id="BulkUploadModal" class="modal">
              <div class="modal-content">
                 <span class="bulkclose" style="width:4%;">&times;</span>
                   <iframe src="customeruploadbulk.php" height="200px"></iframe>
             </div>
          </div>
         <!-- </div> -->

      
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header">
						<div class="card-title">Financial Info</div>
					</div>
                    <div class="card-body">

                    <div class="row"> 
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                    <div class="form-group">
                                        <label >Sub Group</label>
                                        <select class="form-control comp-field chosen-select choMandatoryFields" data-val="true" id="subgroup" name="subgroup">
                                            <option value="">Select a Account Group...</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Reserve & Surplus" ) echo 'selected'; }  ?>  value="Reserve & Surplus">Reserve &amp; Surplus</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Sundry Creditors" ) echo 'selected'; }  ?> value="Sundry Creditors">Sundry Creditors</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Loans ( Liability)" ) echo 'selected'; }  ?> value="Loans ( Liability)">Loans ( Liability)</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Bank OD" ) echo 'selected'; }  ?> value="Bank OD">Bank OD</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Opening Stock" ) echo 'selected'; }  ?> value="Opening Stock">Opening Stock</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Cash-in-hand" ) echo 'selected'; }  ?> value="Cash-in-hand">Cash-in-hand</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Bank Accounts" ) echo 'selected'; }  ?> value="Bank Accounts">Bank Accounts</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Investments" ) echo 'selected'; }  ?> value="Investments">Investments</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Loans and Advances" ) echo 'selected'; }  ?> value="Loans and Advances">Loans and Advances</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Books ( for Students)" ) echo 'selected'; }  ?> value="Books ( for Students)">Books ( for Students)</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Books ( for Library )" ) echo 'selected'; }  ?> value="Books ( for Library )">Books ( for Library )</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Printing & stationery" ) echo 'selected'; }  ?> value="Printing & stationery">Printing &amp; stationery</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "School Fees" ) echo 'selected'; }  ?> value="School Fees">School Fees</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Staff Salary" ) echo 'selected'; }  ?> value="Staff Salary">Staff Salary</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Sundry Debtors" ) echo 'selected'; }  ?> value="Sundry Debtors">Sundry Debtors </option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Sales tax payable" ) echo 'selected'; }  ?> value="Sales tax payable">Sales tax payable</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "checking" ) echo 'selected'; }  ?> value="checking">checking</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Test1" ) echo 'selected'; }  ?> value="Test1">Test1</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "test2" ) echo 'selected'; }  ?> value="test2">test2</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Test3" ) echo 'selected'; }  ?> value="test3">Test3</option>
                                            <option <?php if(isset($subgroup)) { if($subgroup == "Test4" ) echo 'selected'; }  ?> value="test4">Test4</option>
                                        </select>
                                        <label id="subgroupcheck" class="text-danger">Select Sub Group</label>           

                                    </div>
                                </div>
                                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                        <label for="inputEmail">Group</label>
                                        <input type="text"  tabindex="12" class="form-control" id="group" name="groups"  value="<?php if(isset($groups )) echo $groups ; ?>">
                                        <!-- <label id="groupcheck" class="text-danger">Enter Frequency OF Visit</label>            -->
                                    </div>
                                </div>
                               
                                        <script>
                                            function watch() {
                                            $('#ledgername').val($('#customername').val());

                                        }
                                        function mobile() {
                                            $('#whatsappnumber').val($('#mobilenumber').val());

                                        }
                                        </script>
                                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                        <label for="inputEmail">Ledger Name</label>
                                        <input type="text" readonly  tabindex="12" class="form-control" id="ledgername" name="ledgername"  value="<?php if(isset($ledgername )) echo $ledgername ; ?>">
                                        <!-- <label id="frequencyofvisitcheck" class="text-danger">Enter Frequency OF Visit</label>            -->
                                    </div>
                                </div>
                                 



                                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                  <div class="custom-control custom-checkbox mt-4">
                                     <input type="checkbox" tabindex="70" value="Yes"  <?php if($status==0){echo'checked';}?> tabindex="16"  class="custom-control-input" id="status" name="status">
                                     <label class="custom-control-label" for="status">Status</label>
                                  </div><br /><br />
                               </div>


                               <!-- <div class="row d-flex ">
                                   <div class="col-xl-8 col-lglg-4 col-md-4 col-sm-4 col-12"></div>
                                <div class="col-xl-2 col-lglg-4 col-md-4 col-sm-4 col-12">
                                  <div class="custom-control custom-checkbox mt-4">
                                     <input type="checkbox" tabindex="70" value="Cost Center"  <?php //if($costcenter==0){echo'checked';}?> tabindex="16"  class="custom-control-input" id="costcenter" name="costcenter">
                                     <label class="custom-control-label" for="status">Cost Center</label>
                                  </div><br /><br />
                               </div>
                               <div class="col-xl-2 col-lglg-4 col-md-4 col-sm-4 col-12">
                                  <div class="custom-control custom-checkbox mt-4 ml-4">
                                     <input type="checkbox" tabindex="70" value="Inventory"  <?php //if($inventory==0){echo'checked';}?> tabindex="16"  class="custom-control-input" id="inventory" name="inventory">
                                     <label class="custom-control-label" for="status">Inventory</label>
                                  </div><br /><br />
                               </div>
                                </div> -->
                                    <!-- </div> -->
                                    <div class="col-md-6">
                                                        <label class="control-label col-xs-12 col-sm-4 align-left bolder" for="password"></label>
                                                        <div class="col-xs-12 col-sm-8">
                                                            <input type="checkbox" id="costcenter" name="costcenter" class="ace ace-checkbox-2" value="Yes" <?php if(isset($costcenter)=="Yes"){echo'checked';}?> />
                                                            <label class="lbl" for="ace-settings-navbar"> Cost Center</label>
                                                            <!-- <input id="CostCenterYesNo" name="CostCenterYesNo" type="hidden" value="" /> -->
                                                            &nbsp;<input type="checkbox" id="inventory" name="inventory" class="ace ace-checkbox-2"  value="Yes" <?php if(isset($inventory)=="Yes"){echo'checked';}?>/>
                                                            <label class="lbl" for="ace-settings-navbar"> Inventory</label>
                                                            <!-- <input id="InventoryYesNo" name="InventoryYesNo" type="hidden" value="" /> -->
                                                        </div>                                                        
                                                    </div>


                        </div>
                        <div class="row ">
					   <div class="col-md-2 d-flex" > 
						<button type="button" id="customerdownload" name="customerdownload" tabindex="71" class="btn btn-primary mb-2"><span class="icon-download"></span>Download</button>
						<button type="button" id="customerupload" name="customerupload" onclick="customerBulkupload()" tabindex="72" class="btn btn-primary mb-2 ml-2"><span class="icon-upload"></span>Upload</button>
					   </div>
					        <div class="col-md-2"> </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2 ">						
							<button type="submit" name="submitcustomer" id="submitcustomer"  class="btn btn-primary"  tabindex="73">Submit</button>
						    <button type="button" class="btn btn-outline-secondary" tabindex="74">Cancel</button>		
					  </div>
                        
                         </div>
                         
                        </div>
                        
                 <!-- </div> -->
      
           
            </div>


        </div>
    </div>
</div>
</form>
</div>



