
<?php
	include_once("header2.php");
?>
<div class="page-header">
							<h1>
							Banquets
						
							</h1>
						</div>

    <?php
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from banquet_hall";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th>FC ID</th><th>Hall Name</th><th>capacity</th><th>charges</th><th> Detail</th><th>himg</th></tr>";

        while($row = $result->fetch_assoc())
            {
                $fcid = $row["fcid"];
                $hallname = $row["hallname"];
                $capacity = $row["capacity"];
                $charges= $row["charges"];
                $detail = $row ["detail"];
                $himg = $row ["himg"];
                
                $str.="<tr><td>$fcid</td><td>$hallname<td>$capacity</td><td>$charges</td><td><$detail</td><td>$himg</td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>
    
