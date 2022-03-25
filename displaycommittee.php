<?php
	include_once("header2.php");
?>


<h2><b>COMMITTEE</b> </h2>
<?php


$fname="";
$lname="";
$rolename="";
$str="";
$x=1;
	$cnn=mysqli_connect("localhost","root","","elegance");
	$qry="select fname,lname,mpic,rolename from member,commitee,role where member.mid=commitee.mid AND commitee.roleid=role.roleid";
    $result=$cnn->query($qry);
    
    $cnt=mysqli_num_rows($result);
    
    if($cnt==0)
    {
        $str="record not found";
    }
    else{
        $str="<table border='5' class='table table-bordered table-hover' >";
	while($row=$result->fetch_assoc())
		 {
			
			if($x==1)
			{
				$str.="<tr>";
				
			}
			$x++;
			//$nm=$row["sid"];
			$str.="<td><b>".$row["fname"]." ".$row["lname"]."</b><br><img src='img\\".$row["mpic"]."'height='150' width='200'style='border:3px solid'><br><b>".$row["rolename"]."</b></td>";
			// $str.="<td>".$row["pname"]."<br><img src='img\\".$row["pimg"]."'height='100' width='200'><br>Original Price:-Rs.<strike><font style='color:grey;'> ".$row["aprice"]."</strike></font><br>Discounted Price:-Rs. ".$row["oprice"]."</td>";

			if($x==3)
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
		    $qry="select fname,lname,mpic,rolename from member,commitee,role where member.mid=commitee.mid AND member.roleid=commitee.roleid";
            $result=$cnn->query($qry);
			//$cnt=mysqli_num_rows($result);
			$str.="</table>";
			echo $str;
 ?>
<?php
	include_once("footer2.php");
?>