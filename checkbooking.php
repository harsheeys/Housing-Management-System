<?php
include_once("header2.php");
?>
<?php
$hallid="";
if(isset($_POST["btnsubmit"]))
{
$hallid=$_SESSION["hallid"];
//echo $hallid;
$date=$_POST["txtsd"];

  //$cd=date('y-m-d H:i');
    $cnn=mysqli_connect("localhost","root","","elegance");
    // $qry="SELECT start_date,end_date,start_time,end_time FROM banquet_hallbooking,banquet_hall where banquet_hallbooking.hallid=banquet_hall.hallid and banquet_hallbooking.hallid='$hallid' AND ( banquet_hallbooking.start_date>='$cd' OR banquet_hallbooking.end_date>='$cd') order by start_date";
    //$hallid=$_GET["nm"];
    //$_SESSION["hallid"] = $hallid;
    //$hallid=$_SESSION["hallid"];
    //echo $hallid;

    //$mid=$_SESSION["mid"];

     $qry="SELECT start_date,end_date,start_time,end_time FROM banquet_hallbooking,banquet_hall where banquet_hallbooking.hallid=banquet_hall.hallid and banquet_hallbooking.hallid='$hallid' AND start_date>='$date' ";

     $str="<table border='2' class='table  table-bordered table-hover'><tr><th>START-DATE</th><th>END-DATE</th><th>START-TIME</th><th>END-TIME</th></tr>";
   // echo $qry;
    $result=$cnn->query($qry);  
    $cnt=mysqli_num_rows($result);
    if($cnt==0)
    {
        echo "NO BOOKING YET...";
    }
    else
    {
        while($row=$result->fetch_assoc())
         {
            $str.="<tr><td>".$row["start_date"]."</td><td>".$row["end_date"]."</td><td>".$row["start_time"]."</td><td>".$row["end_time"]."</td>";
         }
    $str.="</table>";
    echo $str;
   // echo $cnt;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form class="form-horizontal" role="form" method="post">

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date</label>

										<div class="col-sm-9">
											<input type="date" id="form-field-1" placeholder="DATE" class="col-xs-10 col-sm-5" name="txtsd">
										</div>
									</div>


                                    <div class="space-4"></div>									

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit" name="btnsubmit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												 SUBMIT
											</button>
                                            </div>
                                            </div>
                                    </form>
</body>
</html>
