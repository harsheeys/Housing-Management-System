<?php
	include_once("header2.php");
?>

<h3 >
<i class="ace-icon fa fa-check bigger-110"></i>
<b>DONATAION</b> </h3>
<br>
<br>
<br>
<?php
	$cnn=mysqli_connect("localhost","root","","elegance");
	$qry="select * from donate ";
	$result=$cnn->query($qry);
	$str="<table border='2' class='table  table-bordered table-hover'><tr><th>THINGS</th><th>DATE OF DONATE</th><th>DONATE IMAGE</th></tr>";
		while($row=$result->fetch_assoc())
		{
            $str.="<tr><td>".$row["things"]."</td><td>".$row["dod"]."</td><td>
            <img src='img\\".$row["pics"]."'height='200' width='200'style='border:3px solid'></td></tr>";
		}
		$str.="</table>";
		echo $str;
?>
<?php
	include_once("footer2.php");
?>