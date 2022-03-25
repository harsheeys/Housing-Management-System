<?php
	include_once("header2.php");
?>
<center>
<div class="widget-header widget-header-large">
	<h3 class="widget-title grey lighter">
	<i class="ace-icon fa fa-leaf green"></i>
    <span style="font-weight:bold ">THANK YOU FOR DONATE</span>
	
	</h3>											
	</div>
    </center>
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
            $str.="<tr><td>".$row["things"]."</td><td>".$row["dod"]."</td>";
        
        if (empty($row["pics"]))
        {
            $str.="<td>NOT AVILABLE</td>";
        }
          else
          {
                $str.="<td><img src='img\\".$row["pics"]."'height='100' width='200'style='border:3px solid'></td><tr>";
          }
        }
		$str.="</table>";
		echo $str;
?>
<?php
	include_once("footer2.php");
?>