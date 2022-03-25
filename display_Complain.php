<?php
	include_once("header2.php");
?>
<!-- <div class="col-md-offset-3 col-md-9" style="text-align:right;">
<a  href='innotice.php?id=".$row["noticeid"]."'> -->

<div class="widget-header">
<h2 class="widget-title smaller"><b>COMPLAIN</b></h2><br>												
 </div> 


</a>
</div>
<!-- <i class="ace-icon fa fa-th-large"></i> -->

<?php
    $cnn=mysqli_connect("localhost","root","","elegance");
    
    $mid=$_SESSION["mid"];
    $qry="select description from complain_box where complain_box.mid='$mid'";
    ;

    // select description from member,complain_box where complain_box.mid=member.mid AND complain_box.mid='$mid'
   // select fname,mid, from member,complain_box where complain_box.mid=member.mid;
	$result=$cnn->query($qry);
	$str="<table border='2' class='table  table-bordered table-hover' ><tr><th>  COMPLAIN DETAIL</th></tr>";
		while($row=$result->fetch_assoc())
		{
            $str.="<tr><td>"."<a href='displaycomplain.php' >".$row["description"]." </a>"."</td></tr>";
		}
		$str.="</table>";
        echo $str;
        
    //     $yourURL="displaycomplain.php";
    //    echo ("<script>location.href='$yourURL'</script>");
?>
<?php
	include_once("footer2.php");
?>