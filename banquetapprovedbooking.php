
<?php
	include_once("header2.php");
?>
<div class="page-header">
							<h1>
							Approved Banquet Bookings
						
							</h1>
						</div>
    <?php
    
        $mid = $_SESSION["mid"];

        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from banquet_hallbooking where isapprove='approved'";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th>Register Date</th><th>Start Date</th><th>End Date</th><th>Start Time</th><th>End Time</th><th>Notes</th><th>Persons</th></tr>";

        while($row = $result->fetch_assoc())
            {
                 $register_date = $row['register_date'];
                 $start_date = $row['start_date'];
                 $end_date = $row['end_date'];
                 $start_time = $row['start_time'];
                 $end_time = $row['end_time'];
                 $notes = $row['notes'];
                 $persons = $row['persons'];

                 $str.="<tr><td>$register_date</td><td>$start_date</td><td>$end_date</td><td>$start_time</td><td>$end_time</td><td>$notes</td><td>$persons</td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>
    
