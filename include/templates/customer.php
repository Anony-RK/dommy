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
            $state                    = $getcustomer['country'];
            $state                    = $getcustomer['state'];
            $state                    = $getcustomer['district'];
            

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
                                                <!-- <label id="customeridcheck" class="text-danger">Enter Customer Code</label> -->

                                            </div>
                                        </div>
                                       <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label >Customer Name</label>
                                                <input type="text" tabindex="2" onkeyup="watch()" class="form-control" id="customername" name="customername" value="<?php if(isset($customername )) echo $customername ; ?>" placeholder="Enter Customer Name">
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
                                            <input type="date" tabindex="4" class="form-control" id="dateofbirth" name="dateofbirth" value="<?php if(isset($dateofbirth )) echo $dateofbirth ; ?>">
                                            <label id="dateofbirthcheck" class="text-danger">Select Date Of Birth</label>

                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Age<span class="required">*</span></label>
                                                <input type="number" id="age" tabindex="5" name="age" class="form-control"  value="<?php if(isset($age )) echo $age ; ?>" >
                                                <label id="agecheck" class="text-danger" >Enter Age</label>
                                            </div>
                                        </div>
                                    
                                    <div class="col-xl-6 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Mobile Number <span class="required">*</span></label>
                                                <input type="number" onkeyup="mobile()" id="mobilenumber" tabindex="6" name="mobilenumber" class="form-control"  value="<?php if(isset($mobilenumber )) echo $mobilenumber ; ?>" placeholder="Enter Mobile Number">
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
                                                <input type="text" tabindex="8" id="whatsappnumber" name="whatsappnumber" class="form-control" value="<?php if(isset($whatsappnumber )) echo $whatsappnumber ; ?>">                                           
                                                <label id="whatsappnumbercheck" class="text-danger">Enter Whatsapp Number</label>
                                                </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Anniversary Date</label>
                                                <input type="date" tabindex="9" id="anniverserydate" name="anniverserydate" class="form-control" value="<?php if(isset($anniverserydate )) echo $anniverserydate ; ?>">
                                                <label id="anniverserydatecheck" class="text-danger">Select Anniversary Date</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Email Id</label>
                                                <input type="email" tabindex="10" id="emailid" name="emailid" class="form-control" value="<?php if(isset($emailid )) echo $emailid ; ?>">
                                                <label id="emailidcheck" class="text-danger">Enter Email Id</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Need Membership</label>
                                                <select class="form-control" tabindex="11" id="needmembership" name="needmembership">
                                                
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
                                                <input type="text" tabindex="12" id="gstno" name="gstno" class="form-control" value="<?php if(isset($gstno )) echo $gstno ; ?>">
                                                <!-- <label id="gstnovalid" class="text-danger">Enter Valid GST Number</label> -->
                                                <label id="gstnocheck" class="text-danger">Enter GST Number</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Contact Persion</label>
                                                <input type="text" tabindex="13" id="contactpersion" name="contactpersion" class="form-control" value="<?php if(isset($contactpersion )) echo $contactpersion ; ?>">
                                                <label id="contactpersioncheck" class="text-danger">Enter Contact Persion</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Address 1</label>
                                                <input type="text" tabindex="14" id="address1" name="address1" class="form-control" value="<?php if(isset($address1 )) echo $address1 ; ?>">
                                                <label id="address1check" class="text-danger">Enter Address 1</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Address 2</label>
                                                <input type="text" tabindex="15" id="address2" name="address2" class="form-control" value="<?php if(isset($address2 )) echo $address2 ; ?>">
                                                <label id="address2check" class="text-danger">Enter Address 2</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Pin Code</label>
                                                <input type="number" tabindex="16" id="pincode" name="pincode" class="form-control" value="<?php if(isset($pincode )) echo $pincode ; ?>">
                                                <label id="pincodecheck" class="text-danger">Enter Pincode</label>
                                            </div>
                                        </div>
                                       

                                        <script>
function selectdist(){
    var distval = document.getElementById("district").value;
var tamilnadu = ["Ariyalur", "Chengalpattu","Chennai", "Coimbatore",
        "Cuddalore", "Dharmapuri","Dindigul", "Erode",
        "Kallakurichi", "Kanchipuram","Kanyakumari",
        "Karur", "Krishnagiri","Madurai", "Mayiladuthurai",
        "Nagapattinam", "Nilgiris","Namakkal", "Perambalur",
        "Pudukkottai", "Ramanathapuram","Ranipet", "Salem",
        "Sivaganga", "Tenkasi","Tirupur", "Tiruchirappalli",
        "Theni", "Tirunelveli","Thanjavur", "Thoothukudi",
        "Tirupattur", "Tiruvallur","Tiruvarur", "Tiruvannamalai",
        "Vellore", "Viluppuram","Virudhunagar"];  
     tamilnadu.forEach((element) => {
            for(var i = 0; i< tamilnadu.length;i++) {
                // console.log(tamilnadu[i]);
                if(tamilnadu[i] == distval ) {
                    document.getElementById('state').value="Tamil Nadu";
                    document.getElementById('country').value="India";
                }
            }
               
            
        });
 }
</script>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">District</label>                                               
                                                <select class="form-control chosen-select comp-field " id="district"  onchange="selectdist()" name="district">
                                                    <option   value="">Select district</option>
                                                    <option <?php if(isset($state)) { if($state == "Ariyalur" ) echo 'selected'; }  ?>  value="Ariyalur">Ariyalur</option>
                                                    <option <?php if(isset($state)) { if($state == "Chengalpattu" ) echo 'selected'; }  ?>  value="Chengalpattu">Chengalpattu </option>
                                                    <option <?php if(isset($state)) { if($state == "Chennai" ) echo 'selected'; }  ?>  value="Chennai">Chennai </option>
                                                    <option <?php if(isset($state)) { if($state == "Coimbatore" ) echo 'selected'; }  ?>  value="Coimbatore">Coimbatore </option>
                                                    <option <?php if(isset($state)) { if($state == "Cuddalore" ) echo 'selected'; }  ?>  value="Cuddalore">Cuddalore</option>
                                                    <option <?php if(isset($state)) { if($state == "Dharmapuri" ) echo 'selected'; }  ?>  value="Dharmapuri">Dharmapuri</option>
                                                    <option <?php if(isset($state)) { if($state == "Dindigul" ) echo 'selected'; }  ?>  value="Dindigul">Dindigul</option>
                                                    <option <?php if(isset($state)) { if($state == " Erode" ) echo 'selected'; }  ?>  value="Erode"> Erode</option>
                                                    <option <?php if(isset($state)) { if($state == "Kallakurichi" ) echo 'selected'; }  ?>  value="Kallakurichi">Kallakurichi</option>
                                                    <option <?php if(isset($state)) { if($state == "Kanchipuram" ) echo 'selected'; }  ?>  value="Kanchipuram">Kanchipuram</option>
                                                    <option <?php if(isset($state)) { if($state == "Kanyakumari" ) echo 'selected'; }  ?>  value="Kanyakumari">Kanyakumari</option>
                                                    <option <?php if(isset($state)) { if($state == "Karur" ) echo 'selected'; }  ?>  value="Karur">Karur</option>
                                                    <option <?php if(isset($state)) { if($state == "Krishnagiri" ) echo 'selected'; }  ?>  value="Krishnagiri">Krishnagiri</option>
                                                    <option <?php if(isset($state)) { if($state == "Madurai" ) echo 'selected'; }  ?>  value="Madurai">Madurai</option>
                                                    <option <?php if(isset($state)) { if($state == "Mayiladuthurai" ) echo 'selected'; }  ?>  value="Mayiladuthurai">Mayiladuthurai</option>
                                                    <option <?php if(isset($state)) { if($state == "Nagapattinam" ) echo 'selected'; }  ?>  value="Nagapattinam">Nagapattinam</option>
                                                    <option <?php if(isset($state)) { if($state == "Nilgiris" )  echo 'selected'; }  ?>  value="Nilgiris">Nilgiris</option>
                                                    <option <?php if(isset($state)) { if($state == "Namakkal" ) echo 'selected'; }  ?>  value="Namakkal">Namakkal</option>
                                                    <option <?php if(isset($state)) { if($state == "Puducherry" ) echo 'selected'; }  ?>  value="Puducherry">Puducherry</option>
                                                    <option <?php if(isset($state)) { if($state == "Perambalur" ) echo 'selected'; }  ?>  value="Perambalur">Perambalur</option>
                                                    <option <?php if(isset($state)) { if($state == "Pudukkottai" ) echo 'selected'; }  ?>  value="Pudukkottai">Pudukkottai</option>
                                                    <option <?php if(isset($state)) { if($state == "Ramanathapuram" ) echo 'selected'; }  ?>  value="Ramanathapuram">Ramanathapuram</option>
                                                    <option <?php if(isset($state)) { if($state == "Ranipet " ) echo 'selected'; }  ?>  value="Ranipet">Ranipet</option>
                                                    <option <?php if(isset($state)) { if($state == "Salem" ) echo 'selected'; }  ?>  value="Salem">Salem</option>
                                                    <option <?php if(isset($state)) { if($state == "Sivagangai" ) echo 'selected'; }  ?>  value="Sivagangai">Sivagangai</option>
                                                    <option <?php if(isset($state)) { if($state == "Tenkasi" ) echo 'selected'; }  ?>  value="Tenkasi">Tenkasi</option>
                                                    <option <?php if(isset($state)) { if($state == "Tirupur" ) echo 'selected'; }  ?>  value="Tirupur">Tirupur</option>
                                                    <option <?php if(isset($state)) { if($state == "Tiruchirappalli" ) echo 'selected'; }  ?>  value="Tiruchirappalli">Tiruchirappalli</option>
                                                    <option <?php if(isset($state)) { if($state == "Theni" ) echo 'selected'; }  ?>  value="Theni">Theni</option>
                                                    <option <?php if(isset($state)) { if($state == "Tirunelveli" ) echo 'selected'; }  ?>  value="Tirunelveli">Tirunelveli</option>
                                                    <option <?php if(isset($state)) { if($state == "Thanjavur" ) echo 'selected'; }  ?>  value="Thanjavur">Thanjavur</option>
                                                    <option <?php if(isset($state)) { if($state == "Thoothukudi" ) echo 'selected'; }  ?>  value="Thoothukudi">Thoothukudi</option>
                                                    <option <?php if(isset($state)) { if($state == "Tirupattur" ) echo 'selected'; }  ?>  value="Tirupattur">Tirupattur</option>
                                                    <option <?php if(isset($state)) { if($state == "Tiruvallur" ) echo 'selected'; }  ?>  value="Tiruvallur">Tiruvallur</option>
                                                    <option <?php if(isset($state)) { if($state == "Tiruvarur" ) echo 'selected'; }  ?>  value="Tiruvarur">Tiruvarur</option>
                                                    <option <?php if(isset($state)) { if($state == "Tiruvannamalai" ) echo 'selected'; }  ?>  value="Tiruvannamalai">Tiruvannamalai</option>
                                                    <option <?php if(isset($state)) { if($state == "Vellore" ) echo 'selected'; }  ?>  value="Vellore">Vellore</option>
                                                    <option <?php if(isset($state)) { if($state == "Viluppuram" ) echo 'selected'; }  ?>  value="Viluppuram">Viluppuram</option>
                                                    <option <?php if(isset($state)) { if($state == "Virudhunagar" ) echo 'selected'; }  ?>  value="Virudhunagar">Virudhunagar</option>
                                                </select>
                                                <label id="statecheck" class="text-danger">Select State</label>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">State</label>
                                                 <input type="number" readonly tabindex="6" id="state" name="state" class="form-control" value="" <?php if(isset($state )) echo $state ; ?>> 
                                                <!-- <label id="statecheck" class="text-danger">Select State</label> -->
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Country</label>
                                                <input type="number" tabindex="6" id="country" name="country" class="form-control" value="" <?php if(isset($country )) echo $country ; ?>>                                               
                                               
                                                <!-- <label id="countrycheck" class="text-danger">Select Country</label> -->
                                            </div>
                                        </div>
                                </div></div>
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
                                    <select class="form-control" tabindex="20" id="typeofcustomer" name="typeofcustomer">     
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
                                    <input type="number" tabindex="21" class="form-control" id="noofvisit" name="noofvisit"  value="<?php if(isset($noofvisit )) echo $noofvisit ; ?>">
                                    <label id="noofvisitcheck" class="text-danger">Enter number Of VIsit</label>           

                                </div>
                            </div>
                            <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                            <div class="form-group">
                                    <label for="inputEmail">Frequency Of Visit</label>
                                    <input type="number" tabindex="22" class="form-control" id="frequencyofvisit" name="frequencyofvisit"  value="<?php if(isset($frequencyofvisit )) echo $frequencyofvisit ; ?>">
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
                                        <select class="form-control comp-field chosen-select choMandatoryFields" tabindex="23" data-val="true" id="subgroup" name="subgroup">
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
                                        <input type="text"  tabindex="24" class="form-control" id="group" name="groups"  value="<?php if(isset($groups )) echo $groups ; ?>">
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
                                        <input type="text" readonly  tabindex="25" class="form-control" id="ledgername" name="ledgername"  value="<?php if(isset($ledgername )) echo $ledgername ; ?>">
                                        <!-- <label id="frequencyofvisitcheck" class="text-danger">Enter Frequency OF Visit</label>            -->
                                    </div>
                                </div>
                                 



                                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                  <div class="custom-control custom-checkbox mt-4">
                                     <input type="checkbox" tabindex="26" value="Yes"  <?php if($status==0){echo'checked';}?> tabindex="16"  class="custom-control-input" id="status" name="status">
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
                                                            <input type="checkbox" tabindex="27" id="costcenter" name="costcenter" class="ace ace-checkbox-2" value="Yes" <?php if(isset($costcenter)=="Yes"){echo'checked';}?> />
                                                            <label class="lbl" for="ace-settings-navbar"> Cost Center</label>
                                                            <!-- <input id="CostCenterYesNo" name="CostCenterYesNo" type="hidden" value="" /> -->
                                                            &nbsp;<input type="checkbox" tabindex="28" id="inventory" name="inventory" class="ace ace-checkbox-2"  value="Yes" <?php if(isset($inventory)=="Yes"){echo'checked';}?>/>
                                                            <label class="lbl" for="ace-settings-navbar"> Inventory</label>
                                                            <!-- <input id="InventoryYesNo" name="InventoryYesNo" type="hidden" value="" /> -->
                                                        </div>                                                        
                                                    </div>


                        </div>
                        <div class="row ">
					   <div class="col-md-2 d-flex" > 
						<button type="button" id="customerdownload" name="customerdownload" tabindex="29" class="btn btn-primary mb-2"><span class="icon-download"></span>Download</button>
						<button type="button" id="customerupload" name="customerupload" onclick="customerBulkupload()" tabindex="30" class="btn btn-primary mb-2 ml-2"><span class="icon-upload"></span>Upload</button>
					   </div>
					        <div class="col-md-2"> </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2 ">						
							<button type="submit" name="submitcustomer" id="submitcustomer"  class="btn btn-primary"  tabindex="31">Submit</button>
						    <button type="button" class="btn btn-outline-secondary" tabindex="32">Cancel</button>		
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



