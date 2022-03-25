
<?php
	include_once("header2.php");
?>
<div class="page-header">
							<h1>
							My Parking
						
							</h1>
						</div>
    <?php
    
        $houseno = $_SESSION["houseno"];
        $blockname = $_SESSION["blockname"];
        $houseid = $_SESSION["houseid"];
        $blockid = $_SESSION["blockid"];


        //echo $houseno;
        //echo $blockname;
        //echo $houseid;
        //echo $blockid;
        
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from parking_member where houseid ='$houseid'";

        //echo $qry;

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th> Parking Name</th></tr>";

        while($row = $result->fetch_assoc())
            {
                
                $parking_name = $row["parking_name"];
               
                
                
                $str.="<tr><td>$parking_name</td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>
    
