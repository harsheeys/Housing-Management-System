<?php include_once("header2.php"); ?>

<?php
	$mid=$_SESSION["mid"];
?>
 
<div class="page-header">
							<h1>
								Update Profile
								
							</h1>
						</div>
						
                           
								<!--    PAGE CONTENT BEGINS -->        
								<form class="form-horizontal" role="form" method="post">
								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Memeber Id:</label>

										<div class="col-sm-9">
											<input type="text" name="mid" readonly value="<?php echo $mid; ?>" class="col-xs-10 col-sm-5" value="<?php $mid; ?>">
										</div>
									</div>
									

								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">First name:</label>

										<div class="col-sm-9">
											<input type="text" name="fname"  class="col-xs-10 col-sm-5" value="<?php $fname; ?>">
										</div>
									</div>

                                    
								<!-- PAGE CONTENT BEGINS -->
								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Last name:</label>

										<div class="col-sm-9">
											<input type="text" name="lname"  class="col-xs-10 col-sm-5" value="<?php $lname;?>"> 
										</div>

										</div>
										
	
								<!-- PAGE CONTENT BEGINS -->
								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">profile:</label>

										<div class="col-sm-9">
											<input type="text" name="mpic" class="col-xs-10 col-sm-5" value="<?php $mpic;?>"> 
										</div>

										</div>

										


								<!-- PAGE CONTENT BEGINS -->
								
								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Aadhar Number:</label>

										<div class="col-sm-9">
											<input type="text" name="adharno" class="col-xs-10 col-sm-5" value="<?php $adharno;?>"> 
										</div>

										</div>

											
								<!-- PAGE CONTENT BEGINS -->
								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">DOB</label>

										<div class="col-sm-9">
											<input type="text" name="dob"  class="col-xs-10 col-sm-5" value="<?php $dob;?>"> 
										</div>

										</div>

										
								<!-- PAGE CONTENT BEGINS -->
								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Contact:</label>

										<div class="col-sm-9">
											<input type="text" name="cno"  class="col-xs-10 col-sm-5" value="<?php $cno;?>"> 
										</div>
									</div>


									


									<!-- PAGE CONTENT BEGINS -->
								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Email:</label>

										<div class="col-sm-9">
											<input type="text" name="email"  class="col-xs-10 col-sm-5" value="<?php $email;?>"> 
										</div>
									</div>

									
								<!-- PAGE CONTENT BEGINS -->
								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-left" for="form-field-1">House ID:</label>

										<div class="col-sm-9">
											<input type="text" name="houseid"  class="col-xs-10 col-sm-5" value="<?php $houseid;?>"> 
										</div>
									</div>

									
								<!-- PAGE CONTENT BEGINS -->
								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-left" for="form-field-1">Gender:</label>

										<div class="col-sm-9">
											<input type="text" name="gen"  class="col-xs-10 col-sm-5" value="<?php $gen;?>"> 
										</div>
									</div>

									
								
									<div class="clearfix form-actions">
										<div class="col-md-offset-4 col-md-9">
											<button class="btn btn-info" type="submit" name="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											
										</div>
									</div>

									<div class="hr hr-24"></div>
									<!-- PAGE CONTENT BEGINS -->
								
										<!--<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image </label>

										<div class="col-sm-9">
											<input type="text" name="txtpic"  class="col-xs-10 col-sm-5" value="">
                                            <img src= height='100' width='100'> 
										</div>-->

									

										
										<div class="col-xs-12">
								

									

										<?php


											$fname = "";
											$lname = "";
											$mpic = "";
											$dob = "";
											$cno = "";
											$houseid = "";
											$gen = "";
											$doj = "";
											$email = "";
											$adharno = "";
											

											if(isset($_POST["submit"]))
											{

												$fname = $row["fname"];
												$lname = $row["lname"];
												$mpic = $row["mpic"];
												$dob = $row["dob"];
												$cno = $row["cno"];
												$houseid = $row["houseid"];
												$gen = $row["gen"];
												$doj = $row["doj"];
												$email = $row["email"];
												$adharno = $row["adharno"]; 
												
												
												$cnn=mysqli_connect("localhost","root","","elegance");
												$qry="update member set fname='$fname', lname='$lname', mpic='$mpic', dob='$dob', cno='$cno', email='$email', houseid='$houseid', adharno='$adharno', doj='$doj', isactive='YES', iscurrent='YES', gen='$gen' where mid='$mid'";
												echo $qry;
												$result=$cnn->query($qry);

											}
												
										?>

<?php include_once("footer2.php"); ?>