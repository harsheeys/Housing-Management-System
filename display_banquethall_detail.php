<?php
	include_once("header2.php");
?>



<div class="col-md-offset-3 col-md-9" style="text-align:right;">
<a  href='checkbooking.php'>
<button class="btn btn-info" type="submit" name="btnsubmit" >
<i class="ace-icon fa fa-check bigger-110"></i>
CHECK BOOKING

</button>

</a>
</div>


<h2><b>BANQUET HALL</b> </h2>
<?php
$nm=$_GET["nm"];
$hallname="";
$capacity="";
$str="";
$hallid;
$x=1;
   if(isset($_POST["btnsubmit"]))
	{
	// 	session_start();
    //    // $row=$result->fetch_assoc();
	// 	$_SESSION["hallid"]=$hallid;
	// 	$cnn=mysqli_connect("localhost","root","","elegance");
	//     $qry="select * from banquet_hall where hallid='$hallid'";
		// $mid=$row2["mid"];
		// $_SESSION["mid"]=$mid;

		// $hallid=$row["hallid"];
		// $_SESSION["hallid"]=$hallid;
		// //$cnn=mysqli_connect("localhost","root","","elegance");
		// $qry2="select * from banquet_hall hallid='$hallid' ";
		// $result2=$cnn->query($qry2);
		// $row2=$result2->fetch_assoc();
		 
		// $hallid=$_GET["nm"];
		// $_SESSION["hallid"] = $hallid;

		$yourURL="inbanquet_hall.php";
		echo ("<script>location.href='$yourURL'</script>");
			
	}
	$cnn=mysqli_connect("localhost","root","","elegance");
	$qry="select * from banquet_hall where hallid='$nm' ";
	$hallid=$_GET["nm"];
    $_SESSION["hallid"] = $hallid;
	$result=$cnn->query($qry);
	$cnt=mysqli_num_rows($result);
    
		if($cnt==0)
		{
			$str="record not found";
		}
		else{
	   $str="<table border='2' class='table table-bordered table-hover' >";
		while($row=$result->fetch_assoc())
		 {
			if($x==1)
			{
				$str.="<tr>";
				
			}
			$x++;
		//	$nm=$row["hallid"];
			
			
			$str.="<td><b>".$row["hallname"]."<br><img src='img\\".$row["himg"]."'height='200' width='250'style='border:3px solid black'><br>"."Capacity :- ".$row["capacity"]."<br>"."Charges :- ".$row["charges"]."<br>Detail :- ".$row["detail"]."</td>";
			

			if($x==2)
			{
				$str.="</tr>";
				$x=1;
			}

		 }
		  $str.="</table>";
		
        }	   
?>
	
<?php
            //$fname=$_POST["txtusername"];
            //$pwd=$_POST["txtpassword"];
            $cnn=mysqli_connect("localhost","root","","elegance");
		    $qry="select * from banquet_hall";
            $result=$cnn->query($qry);
			//$cnt=mysqli_num_rows($result);
			$str.="</table>";
			echo $str;
			// $hallid=$_GET["nm"];
			// $_SESSION["hid"] = $hallid;
 ?>
 
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form class="form-horizontal" role="form" method="post">
<div class="space-4"></div>									

<div class="clearfix form-actions">
<div class="col-md-offset-3 col-md-9">

<button class="btn btn-info" type="submit" name="btnsubmit">
<i class="ace-icon fa fa-check bigger-110"></i>
BOOK NOW
</button>

</div>
</div>
</a>										
</form>
</body>
</html>
<?php
	include_once("footer2.php");
?>