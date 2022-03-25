
<?php
	include_once("header2.php");
?>
<div class="page-header">
							<h1>
							 Approved Parking Bookings
						
							</h1>
						</div>
    <?php
    
        $mid = $_SESSION["mid"];

        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from parking_guest where isbook='approved'";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th>From Date</th><th> To Date</th><th>Booking Reason</th><th>Name</th><th>Car NO</th><th>Where From</th><th>Mobile NO</th><th>E-Mail</th></tr>";

        while($row = $result->fetch_assoc())
            {
                $dos = $row["dos"];
                $doe = $row["doe"];
                $doreason = $row["doreason"];
                $fname = $row["fname"];
                $lname = $row["lname"];
                $carno = $row["carno"];
                $fromwhere = $row["fromwhere"];
                $mobileno = $row["mobileno"];
                $email = $row["email"];
                
                $str.="<tr><td>$dos</td><td>$doe</td><td>$doreason</td><td>$fname $lname</td><td>$carno</td><td>$fromwhere</td><td>$mobileno</td><td>$email</td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>
    
