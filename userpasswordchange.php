<?php include_once("header2.php");?>

<div class="page-header">
							<h1>
							Change Password
						
							</h1>
						</div>

  


								<!--    PAGE CONTENT BEGINS -->        
								
                                    
								<!--    PAGE CONTENT BEGINS -->        
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>

										<div class="col-sm-9">
											<input type="text" name="txtname"  class="col-xs-10 col-sm-5">
										</div>
									</div>

                                    
								<!--    PAGE CONTENT BEGINS -->        
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password</label>

										<div class="col-sm-9">
											<input type="text" name="txtpass"  class="col-xs-10 col-sm-5">
										</div>
									</div>

                                    <form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Re-Type Password </label>

										<div class="col-sm-9">
											<input type="text" name="txtpass"  class="col-xs-10 col-sm-5">
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

										</div>
									</div>
								</div><!-- PAGE CONTENT ENDS -->
							</div>
				

<?php

$username="";
$pwd="";
if(isset($_POST["submit"]))
{
        $username=$_POST["txtname"];
        $pwd=$_POST["txtpass"];

        $cnn=mysqli_connect("localhost","root","","elegance");
        $qry="update member set pwd='$pwd' where username='$username'";
        $result=$cnn->query($qry);

        
}
?>
<?php include_once("footer2.php");?>