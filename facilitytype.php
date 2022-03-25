
<?php
	include_once("header2.php");
?>
    <?php
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from facility_type";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th>Facitlity Type</th><th>CM ID</th><th></tr>";

        while($row = $result->fetch_assoc())
            {
                $fcid=$row["fcid"];
                $facilitytype = $row["facilitytype"];
                $cmid = $row["cmid"];
                
                $edit="<a href='facilitytypeupdate.php?id=$fcid'>Edit</a>";                
                $delete="<a href='facilitytypedelete.php?id=$fcid'>Delete</a>";

                $str.="<tr><td>$facilitytype</td><td>$cmid</td><td>$edit</td><td>$delete</td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>
    

