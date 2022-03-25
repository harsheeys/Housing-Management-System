<?php
include_once("header2.php");
?>
<html>
<head>
	<title></title>
</head>
<body>
<style>

.row {
    margin-left: -12px;
    margin-right: -14px;
    
}
</style>
<center>
<div class="row">
<div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
																	<b>Company Info</b>
</div>
<div class="col-xs-6 col-sm-3 pricing-box">
<div class="widget-box widget-color-dark">
 <div class="widget-header"> 
<h5 class="widget-title bigger lighter"></h5>
</div>
<!-- <div class="widget-body">
<div class="widget-main"> --> 


<div class="profile-info-row">
													 <div class="profile-info-name"> Username </div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="username">alexdoe</span>
													</div>
												</div>
<?php
    $nm=$_GET["nm"];
	$cnn=mysqli_connect("localhost","root","","elegance");
	$qry="select * from servicedetail  where sid='$nm'";
    $result=$cnn->query($qry);
    //echo $qry;
    $str="<table border='2' class='table  table-bordered table-hover'><tr><th>NAME</th><th>CONTACT-NUMBER</th><th>IMAGE</th></tr>";
		while($row=$result->fetch_assoc())
		{
            $str.="<tr><td>".$row["fname"]." ".$row["lname"]."<td>".$row["cno"]."</td>"."<td>
            <img src='img\\".$row["sdimg"]."'height='100' width='100'></td></tr>";
			
		}
		$str.="</table>";
        echo $str;
?>
													<!-- <ul class="list-unstyled spaced2">
														<li>
															<i class="ace-icon fa fa-check green"></i>
															10 GB Disk Space
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															200 GB Bandwidth
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															100 Email Accounts
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															10 MySQL Databases
														</li>

														<li>
															<i class="ace-icon fa fa-check green"></i>
															$10 Ad Credit
														</li>

														<li>
															<i class="ace-icon fa fa-times red"></i>
															Free Domain
														</li>
													</ul> -->

													<!-- <hr>
													<div class="price">
														$5
														<small>/month</small>
													</div> -->
												</div>

												<div>
													<!-- <a href="#" class="btn btn-block btn-inverse"> -->
														<!-- <i class="ace-icon fa fa-shopping-cart bigger-110"></i>
														<span>Buy</span> -->
													</a>
												</div>
											</div>
										</div>
									</div>

</div>
</center>