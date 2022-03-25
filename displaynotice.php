<?php
	include_once("header2.php");
?>
<div class="col-md-offset-3 col-md-9" style="text-align:right;">
<a  href='innotice.php?id=".$row["noticeid"]."'>
<button class="btn btn-info" type="submit" name="btnsubmit" >
<i class="ace-icon fa fa-check bigger-110"></i>
INSERT

</button>

</a>
</div>
<h2><b>NOTICE</b> </h2>
<?php
	$cnn=mysqli_connect("localhost","root","","elegance");
	$qry="select noticid,commitee.cmid,fname,lname,description,timing,issolved from commitee,notice,member where commitee.cmid=notice.cmid AND commitee.mid=member.mid";
	$result=$cnn->query($qry);
	$str="<table border='2' class='table  table-bordered table-hover'><tr><th>COMMITTEE  NAME</th>
	
    <th>DESCRIPTION</th><th>TIME</th>
    <th>IS DONE</th><th>EDIT</th><th>DELETE</th></tr>";
		while($row=$result->fetch_assoc())
		{
			$str.="<tr><td>".$row["fname"]."  ".$row["lname"]."</td><td>".$row["description"].
			"</td><td>".$row["timing"].
            "</td><td>".$row["issolved"]."</td>
            <td><a class='btn btn-xs btn-info' href='updatenotice.php?id=".$row["noticid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><td><a class='btn btn-xs btn-danger' href='deletenotice.php?id=".$row["noticid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
		}
		$str.="</table>";
		echo $str;
?>
<?php
	include_once("footer2.php");
?>