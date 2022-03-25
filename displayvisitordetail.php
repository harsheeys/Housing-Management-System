<?php
	include_once("header2.php");
?>
 
<h2><b>VISITOR DETAILS</b> </h2>
<?php



//	$cnn=mysqli_connect("localhost","root","","elegance");
    $cnn=mysqli_connect("localhost","root","","elegance");
    $qry="select houseid from member";
    $result=$cnn->query($qry);
    $row=$result->fetch_assoc();
    $houseid=$row["houseid"];

    $mid=$_SESSION["mid"];
    
    $cnn=mysqli_connect("localhost","root","","elegance");
	$qry="select guest_detail.fname,guest_detail.lname,date,in_time,houseno,mid from guest_detail,house,member where guest_detail.houseid=house.houseid AND member.houseid=house.houseid AND member.mid='$mid' ";
	$result=$cnn->query($qry);
	$str="<table border='2' class='table  table-bordered table-hover'><tr><th>NAME</th><th>DATE</th><th>TIME</th></tr>";
		while($row=$result->fetch_assoc())
		{
			$str.="<tr><td>".$row["fname"]." ".$row["lname"]."</td><td>".$row["date"]."</td><td>".$row["in_time"]."</td></tr>";
		}
		$str.="</table>";
		echo $str;
?>
<?php
	include_once("footer2.php");
?>