<?php
	include_once("header2.php");
?>




<?php
	$cnn=mysqli_connect("localhost","root","","elegance");
	$qry="select fname,lname,contactno,epic,emptype from employee_details,employee_type where employee_details.empid=employee_type.empid";
	$result=$cnn->query($qry);
    $str="<table border='2' class='table  table-bordered table-hover'><tr><th>EMPLOYEE NAME</th><th>EMPLOYEE TYPE</th><th>CONTACT NO</th><th>IMAGE</th></tr>";
		while($row=$result->fetch_assoc())
		{
			$str.="<tr><td>".$row["fname"]." ".$row["lname"]."</td><td>".$row["emptype"]."</td><td>".$row["contactno"]."</td><td><img src='img\\".$row["epic"]."'height='100' width='100'></td></tr>";
            
            
		}
		$str.="</table>";
		echo $str;
?>
<?php
	include_once("footer2.php");
?>





