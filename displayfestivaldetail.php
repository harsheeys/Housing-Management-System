<?php
	include_once("header2.php");
?>
<h2><b> FESTIVAL DETAILS</b> </h2>
<?php
     $nm=$_GET["nm"];
	$cnn=mysqli_connect("localhost","root","","elegance");
	$qry="select * from festivaldetail where feid='$nm'";
	$result=$cnn->query($qry);
	$str="<table border='2' class='table  table-bordered table-hover'><tr><th>FESTIVAL-TITEL
    </th><th>DATE OF START</th><th>DATE OF END</th><th>TIMEING</th><th>DESCRIPTION</th><th>RULES</th></tr>";
		while($row=$result->fetch_assoc())
		{
            $str.="<tr><td>".$row["title"]."</td>
            <td>".$row["dos"]."</td><td>".$row["doe"]."</td><td>".$row["timing"]."</td>
            <td>".$row["fdec"]."</td><td>".$row["rules"]."</td></tr>";
			
		}
		$str.="</table>";
		echo $str;
?>
<?php
	include_once("footer2.php");
?>