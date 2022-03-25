<?php
	include_once("header2.php");
?>
<h2><b>FESTIVAL TYPE</b> </h2>
<?php
$ftitle="";
$str="";
$fdid;
$x=1;
    
	$cnn=mysqli_connect("localhost","root","","elegance");
	$qry="select * from festivaltype ";
	$result=$cnn->query($qry);
	// $str="<table border='2' class='table  table-bordered table-hover'><tr><th>FESTIVAL-TITEL
	// </th><th>FESTIVAL-IMAGE</th><th>EDIT</th><th>DELETE</th></tr>";
		// while($row=$result->fetch_assoc())
		// {
        //     $str.="<tr><td>".$row["ftitle"]."</td><td>
        //     <img src='img\\".$row["fimg"]."'height='200' width='200'></td>
		// 	<td><a class='btn btn-xs btn-info' href='updatefestivaltype.php?id=".$row["ftid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><td><a class='btn btn-xs btn-danger' href='deletefestivaltype.php?id=".$row["ftid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
		// }
		// $str.="</table>";
		// echo $str;




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
			$nm=$row["ftid"];
			
			
			$str.="<td><a href='displayfestivaldetail.php?nm=$nm'><b>".$row["ftitle"]."<br><img src='img\\".$row["fimg"]."'height='200' width='200'style='border:3px solid'  ></a></td>";
			

			if($x==6)
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
		    $qry="select * from festivaltype";
            $result=$cnn->query($qry);
			//$cnt=mysqli_num_rows($result);
			$str.="</table>";
			echo $str;
 ?>
<?php
	include_once("footer2.php");
?>