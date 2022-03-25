<?php
	include_once("header2.php");
?>
<center>
<div class="widget-header widget-header-large">
	<h3 class="widget-title grey lighter">
	<i class="ace-icon fa fa-leaf green"></i>
    <span style="font-weight:bold ">THANK YOU FOR DONATE FOOD</span>
	
	</h3>											
	</div>
    </center>
    <br>
    <br>
    <br>

<?php
	$cnn=mysqli_connect("localhost","root","","elegance");
	$qry="select * from foodwaste ";
	$result=$cnn->query($qry);
	$str="<table border='2' class='table  table-bordered table-hover'><tr><th>REQUEST DATE</th><th>REQUEST TIME</th><th>IS TAKEN</th></tr>";
		while($row=$result->fetch_assoc())
		{
            $str.="<tr><td>".$row["dor"]."</td><td>".$row["request_time"]."</td>";
        
        if (empty($row["istaken"]))
        {
            $str.="<td>NOT AVILABLE</td>";
        }
          else
          {
                $str.="<td>".$row["istaken"]."</td><tr>";
          }
        }
		$str.="</table>";
		echo $str;
?>
<?php
	include_once("footer2.php");
?>