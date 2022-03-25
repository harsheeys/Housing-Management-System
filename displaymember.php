<?php
	include_once("header2.php");
?>
<style>
body{
    background-color: #E4E6E9;
    padding-bottom: 0;
    font-family: 'Open Sans';
    font-size: 11px;
    color: #393939;
    line-height: 1.5;
}

</style>

<?php

$nm=$_GET["nm"];
$cnn=mysqli_connect("localhost","root","","elegance");
 $qry="select * from member";
$result=$cnn->query($qry);
$cnt=mysqli_num_rows($result);
//echo $qry;

$str="<table border='2' class='table  table-bordered table-hover'><tr><th>USER-NAME</th><th>PASSWORD</th><th>FIRST-NAME</th><th>LAST-NAME</th><th>IMAGE</th><th>GENDER</th><th>HOUSE-ID</th><th>CONTECT-NUMBER</th><th>E-MAIL</th><th>ADHARCARD-NUMBER</th><th>DATE OF BIRTH</th><th>DATE OF JOIN</th><th>DO-ANNIVARSARY</th><th>ISCURRENT</th><th>ISACTIVE</th><th>JOB-TYPE</th><th>ROLE-ID</th><th>EDIT</th><th>DELETE</th></tr>";

	//echo $qry;

			while($row=$result->fetch_assoc())
			{
                $str.="<tr><td>".$row["username"]."</td><td>".$row["pwd"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>"."<img src='img\\".$row["mpic"]."'height='50' width='50'>.
                </td><td>".$row["gen"]."</td><td>".$row["houseid"]."</td><td>".$row["cno"]."</td><td>".$row["email"]."</td><td>".$row["adharno"]."</td><td>".$row["dob"]."</td><td>".$row["doj"]."</td><td>".$row["doannivarsry"]."</td><td>".$row["isactive"]."</td><td>".$row["iscurrent"]."</td><td>".$row["jobtype"]."</td><td>".$row["roleid"]."</td>
                <td><a class='btn btn-xs btn-info' href='updatemember.php?id=".$row["mid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><td><a class='btn btn-xs btn-danger' href='deletemember.php?id=".$row["mid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
                 
            }
            $str.="</table>";
            echo $str;
    
    ?>




<?php
	include_once("footer2.php");
?>
