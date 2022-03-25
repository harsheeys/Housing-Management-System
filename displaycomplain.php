<?php
	include_once("header2.php");
?>

<!-- <i class="ace-icon fa fa-spinner fa-spin orange bigger-125"></i> -->
<!-- <i class="normal-icon ace-icon fa fa-user red bigger-130"></i> -->
<!-- <i class="normal-icon ace-icon fa fa-user red bigger-130"></i> -->
<div class="widget-header">
<h2 class="widget-title smaller"><b> VIWE COMPLAIN</b></h2><br>												
 </div> 
<br>
<?php
    $cnn=mysqli_connect("localhost","root","","elegance");
    
    $mid=$_SESSION["mid"];
    $qry="select fname,lname,description,issolved,cimg from member,complain_box where complain_box.mid=member.mid AND complain_box.mid='$mid'";
   // select fname,mid, from member,complain_box where complain_box.mid=member.mid;
	$result=$cnn->query($qry);
	$str="<table border='2' class='table  table-bordered table-hover'><tr><th>NAME</th><th>DESCERIPTION</th><th>IMAGE</th><th>IS SOLVED</th>";
		while($row=$result->fetch_assoc())
		{
			$str.="<tr><td>".$row["fname"]."  ".$row["lname"]."</td><td>".$row["description"].
			"</td><td><img src='img\\".$row["cimg"]."'height='100' width='100'></td><td>".$row["issolved"]."</td></tr>";
		}
		$str.="</table>";
		echo $str;
?>
<?php
	include_once("footer2.php");
?>