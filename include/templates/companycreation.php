<?php 
   $id=0;
   $idupd=0;
 if(isset($_POST['submitcompanybtn']) && $_POST['submitcompanybtn'] != '')
 {
if($_POST['companyname'] != '' && $_POST['cinno'] != '' && $_POST['address'] != '' 
&& $_POST['pincode'] != ''
 && $_POST['state'] != '' && $_POST['country'] != '' &&
$_POST['phonenumber'] != '' && $_POST['email'] != '' && $_POST['faxnumber'] != '' 
&& $_POST['loginshortername'] != ''
&& $_POST['website'] != '' && $_POST['booksstartfrom'] != '')
  { 
	
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $companyupdatedetails = $userObj->updatecompany($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>editcompany&msc=2';</script>
    <?php	}
    else{   
	
		$companyadddetails = $userObj->addcompany($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>editcompany&msc=1';</script>
        <?php
    }
 }  
 
}
$del=0;
if(isset($_GET['del']))
{
$del=$_GET['del'];
}
if($del>0)
{
	$companydeletedetails = $userObj->deletecompany($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>editcompany&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$companydetails = $userObj->getcompany($mysqli,$idupd); 
	
	if (sizeof($companydetails)>0) {
        for($icompany=0;$icompany<sizeof($companydetails);$icompany++)  {			
			$companyid                	 = $companydetails['companyid'];
			$companyname          		 = $companydetails['companyname'];
			$cinno          	    	 = $companydetails['cinno'];
			$address      			     = $companydetails['address'];
			$address1      			     = $companydetails['address1'];
			$address2       			 = $companydetails['address2'];
			$pincode                	 = $companydetails['pincode'];
			$state       		    	 = $companydetails['state'];
			$country     			     = $companydetails['country'];
			$phonenumber     		     = $companydetails['phonenumber'];
			$faxnumber        		     = $companydetails['faxnumber'];
			$email     			         = $companydetails['email'];
			$website	    		     = $companydetails['website'];			
			$panno	    		         = $companydetails['panno'];
			$itwardcircleno	    		 = $companydetails['itwardcircleno'];
			$tanno	    		         = $companydetails['tanno'];
			$gst                         = $companydetails['gst'];

            $pfno                        = $companydetails['pfno']; 
			$esicno                      = $companydetails['esicno']; 
			$loginshortername            = $companydetails['loginshortername']; 
			$booksstartfrom              = $companydetails['booksstartfrom']; 
            $status                      = $companydetails['status'];  

		}
	}
}

  ?>
  

<!-- Page header start -->
<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Company Creation</li>
					</ol>

					<a href="editcompany">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Company</button>
					</a>
				</div>
				<!-- Page header end -->
				
				<!-- Main container start -->
				<div class="main-container">
                <form id="company" name="company" action=""  enctype="multipart/form-data"  method="post">			
				<input type="hidden" class="form-control" value="<?php if(isset($companyid )) echo $companyid ; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter id">
                                     
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">General Info</div>
								<div class="card-body">
									<!-- Row start -->
									
									<div class="row gutters">
							
									<div class="col-xs-12 col-sm-8">
									<div class="row gutters">
								
  <div class="col-6">
  
											<div class="form-group">
												<label class="label">Company Name</label><span class="text-danger">*</span>
													<input type="text" tabindex="1"  value="<?php if(isset($companyname)) echo $companyname; ?>"  name="companyname" id="companyname" class="form-control" placeholder="Enter Company Name">
													<span class="text-danger" id="companynamecheck">Enter Company Name</span>
											</div>
										</div>
  
  
 
 <div class="col-6">
 <div class="form-group">
												<label class="label">CIN No</label><span class="text-danger">*</span>
													<input type="text" tabindex="2"  value="<?php if(isset($cinno)) echo $cinno; ?>"  name="cinno" id="cinno" class="form-control" placeholder="Enter CIN No">
													<span class="text-danger" id="cinnocheck">Enter CIN No</span>
											</div>
								</div>	</div>
								<div class="row gutters">
								<div class="col-md-6">
								<div class="form-group">
												<label class="label">Address</label><span class="text-danger">*</span>
													<input type="text" tabindex="4"  value="<?php if(isset($address)) echo $address; ?>"  name="address" id="address" class="form-control" placeholder="Enter Address">
													<span class="text-danger" id="addresscheck">Enter Address</span>
											</div>	</div>
									<div class="col-md-6">
									<div class="form-group">
												<label class="label">Address1</label>
													<input type="text" tabindex="5"  value="<?php if(isset($address1)) echo $address1; ?>"  name="Address1" id="Address1" class="form-control" placeholder="Enter Address1">
												</div>
											</div>
											</div>
											<div class="row gutters">
										<div class="col-md-6">
										<div class="form-group">
												<label class="label">Address2</label>
													<input type="text" tabindex="6" value="<?php if(isset($address2)) echo $address2; ?>"   name="Address2" id="Address2" class="form-control" placeholder="Enter Address2">
												</div>
										</div>
										<div class="col-md-6">
										<div class="form-group">
												<label class="label">Pin Code</label><span class="text-danger">*</span>
													<input type="number" tabindex="7" value="<?php if(isset($pincode)) echo $pincode; ?>"  name="pincode" id="pincode"  class="form-control" placeholder="Enter Pincode">
													<span class="text-danger" id="pincodecheck">Enter Pincode</span>
											</div>
										</div>
										</div>
										<div class="row gutters">
										<div class="col-md-6">
											<div class="form-group">
												<label class="label">State</label><span class="text-danger">*</span>
													<input type="text" tabindex="8" value="<?php if(isset($state)) echo $state; ?>"  name="state" id="state" class="form-control" placeholder="Enter State">
													<span class="text-danger" id="statecheck">Enter State</span>
												</div>
											</div>
											<div class="col-md-6">
											<div class="form-group">
												<label class="label">Country</label><span class="text-danger">*</span>
													<input type="text" tabindex="9" value="<?php if(isset($country)) echo $country; ?>"  name="country" id="country" class="form-control" placeholder="Enter Country">
													<span class="text-danger" id="countrycheck">Enter Country</span>
												</div>
											</div>
										
											</div>
										</div>
										<div class="col-sm-3 center">
										<div class="col-12">
										<?php if($idupd==0){?>
										<div class="form-group">
                                        <label>Company Image</label><br>
										<img width="150" style="height:200px; margin: 0px auto;" id="viewimage" >
                                        <input type="file" tabindex="3"  class="form-control w-50" accept="image/*" onchange="loadFile(event)" value="<?php if(isset($companyimage )) echo $companyimage ; ?>" id="companyimage" name="companyimage" >
								         </div>
										<?php }?>
										 </div>										
							<script>
								var loadFile = function(event) {
									var image = document.getElementById("viewimage");
									image.src = URL.createObjectURL(event.target.files[0]);
								};
							</script></div>
									
										
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Phone Number</label><span class="text-danger">*</span>
													<input type="number" tabindex="10" value="<?php if(isset($phonenumber)) echo $phonenumber; ?>"  name="phonenumber" id="phonenumber" class="form-control" placeholder="Enter Phone Number">
													<span class="text-danger" id="phonenumbercheck">Enter Phone Number</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Fax Number</label><span class="text-danger">*</span>
													<input type="text" tabindex="11" name="faxnumber" id="faxnumber" value="<?php if(isset($faxnumber)) echo $faxnumber; ?>"  class="form-control" placeholder="Enter Fax Number">
													<span class="text-danger" id="faxnumbercheck">Enter Fax Number</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Mail Id</label><span class="text-danger">*</span>
													<input type="text" tabindex="12" name="email" id="email" value="<?php if(isset($email)) echo $email; ?>"  class="form-control" placeholder="Enter Mail Id">
													<span class="text-danger" id="emailcheck">Enter Mail Id</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Website</label><span class="text-danger">*</span>
													<input type="text" tabindex="13" name="website" id="website" value="<?php if(isset($website)) echo $website; ?>"  class="form-control" placeholder="Enter Website">
													<span class="text-danger" id="websitecheck">Enter Website</span>
												</div>
											</div>



										

									</div>
									<!-- Row end -->

								</div>
							</div>

							<div class="card">
								<div class="card-header">Tax Info </div>
								<div class="row card-body">
								<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="form-group">
												<label class="label">PAN No</label>
													<input type="text" tabindex="14" name="panno" id="panno" value="<?php if(isset($panno)) echo $panno; ?>"  class="form-control" placeholder="Enter PAN No">
													<span class="text-danger" id="pancheck">Enter Pan Number</span>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="form-group">
												<label class="label">IT Ward Circle No</label>
													<input type="text" tabindex="15" name="itwardcircleno" id="itwardcircleno" value="<?php if(isset($itwardcircleno)) echo $itwardcircleno; ?>"  class="form-control" placeholder="Enter IT Ward Circle No">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">TAN No</label>
													<input type="text" tabindex="16" name="tanno" id="tanno" value="<?php if(isset($tanno)) echo $tanno; ?>"  class="form-control" placeholder="Enter TAN No">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">GST</label>
													<input type="text"  tabindex="17"  name="gst" id="gst" value="<?php if(isset($gst)) echo $gst; ?>"  class="form-control" placeholder="Enter GST">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">PF No</label>
													<input type="text"  tabindex="18"  name="pfno" id="pfno" value="<?php if(isset($pfno)) echo $pfno; ?>"  class="form-control" placeholder="Enter PF No">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">ESIC No</label>
													<input type="text"  tabindex="19"  name="esicno" id="esicno" value="<?php if(isset($esicno)) echo $esicno; ?>"  class="form-control" placeholder="Enter ESIC No">
												</div>
											</div>
								</div>

								<div class="row">
									<div class="col-md-4">
									</div>

									<div class="col-md-4">
									</div>

									
								</div>

							</div>

							<div class="card">
								<div class="card-header">Other Info</div>
								<div class="row card-body">
									
								<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Login - Shorter Name</label><span class="text-danger">*</span>
													<input type="text"  tabindex="20"  name="loginshortername" id="loginshortername" value="<?php if(isset($loginshortername)) echo $loginshortername; ?>"  class="form-control" placeholder="Enter Login - Shorter Name">
													<span class="text-danger" id="loginshorternamecheck">Enter Login - Shorter Name</span>
												</div>
											</div>											
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label class="label">Books Start From</label><span class="text-danger">*</span>
												<div class="custom-date-input">												
													<input type="text"  tabindex="21"  name="booksstartfrom" id="booksstartfrom" value="<?php if(isset($booksstartfrom)) echo $booksstartfrom; ?>"  class="form-control datepicker" placeholder="Enter Books Start From">
													<span class="text-danger" id="booksstartfromcheck">Enter Books Start From</span>
												</div>
													
												</div>
												</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">	</div>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
											<!-- Checkbox example -->
									<div class="custom-control custom-checkbox">
									<input type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> tabindex="22"  class="custom-control-input" id="status" name="status">
										<label class="custom-control-label" for="status">Status</label>
									</div>
									</div></div>
								<div class="row">
								

									<div class="col-md-6">
									</div>
									<div class="col-md-4">
									</div>
									<div class="col-md-2">
										<button type="submit"  tabindex="23"  id="submitcompanybtn" name="submitcompanybtn" value="Submit" class="btn btn-primary">Submit</button>
										<button type="reset"  tabindex="24"  id="cancelbtn" name="cancelbtn" class="btn btn-outline-secondary">Cancel</button><br /><br />
									</div>
								</div>

							</div>

						</div>
					</div>
					<!-- Row end -->
					</form>

				</div>