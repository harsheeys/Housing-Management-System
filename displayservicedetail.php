<?php
	include_once("header2.php");
?>
<h2><b> SERVICE DETAILS</b> </h2>
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
<?php
	include_once("footer2.php");
?>