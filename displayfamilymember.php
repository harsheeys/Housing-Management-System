<?php
	include_once("header2.php");
?>

<h2><b> FAMILY DETAILS</b> </h2>



<?php
$fname="";
$lname="";
$str="";
$x=1;
    $cnn=mysqli_connect("localhost","root","","elegance");
    $mid=$_SESSION["mid"];
    //echo $mid;
    //$houseid=$_SESSION["houseid"];
     $qry="select houseid from member where mid='$mid'";
    //$qry="select mid from member where houseid='$houseid' AND mid='$mid'";
    //echo $qry;
    $result=$cnn->query($qry);
    $row=$result->fetch_assoc();
    $houseid=$row["houseid"];


    $cnn=mysqli_connect("localhost","root","","elegance");
    $qry="select * from member where houseid='$houseid'";
    $result=$cnn->query($qry);
    
	//$str.="<table border='2' class='table  table-bordered table-hover'>";

        $cnt=mysqli_num_rows($result);
    
		if($cnt==0)
		{
			$str="record not found";
		}
		else{
		?>
			<div class="form-group">
            <div class="col-sm-9">

		<?php
	   $str="<table border='5' class='table table-bordered table-hover' >";
?>
		</div>
		</div>
<?php
		while($row=$result->fetch_assoc())
		 {
			
			 

			if($x==1)
			{
				$str.="<tr>";
				
			}
			$x++;
			//$nm=$row["sid"];
			
			
			$str.="<td><b>".$row["fname"]." ".$row["lname"]."</b><br><img src='img\\".$row["mpic"]."'height='150' width='200'style='border:3px solid' ></a></td>";
			

			if($x==5)
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
		    $qry="select * from member";
            $result=$cnn->query($qry);
			//$cnt=mysqli_num_rows($result);
			$str.="</table>";
			echo $str;
 ?>


<?php
	include_once("footer2.php");
?>

