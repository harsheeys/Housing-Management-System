<?php
	include_once("header2.php");
?>
<h2><b>BANQUET HALL</b> </h2>
<?php
$hallname="";
$capacity="";
$str="";
$hallid;
$x=1;
    
	$cnn=mysqli_connect("localhost","root","","elegance");
	$qry="select * from banquet_hall ";
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
			$nm=$row["hallid"];
			
			
			$str.="<td><a href='display_banquethall_detail.php?nm=$nm' style='color:black; font-weight:bold;'>".$row["hallname"]."<br><img src='img\\".$row["himg"]."'height='200' width='250'style='border:3px solid black'  ></a><br><b>"."Capacity :- ".$row["capacity"]."</td>";
			

			if($x==4)
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
 ?>
<?php
	include_once("footer2.php");
?>