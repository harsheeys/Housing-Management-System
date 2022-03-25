
<?php
	include_once("header2.php");
?>
    <?php
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from employee_type";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th>Employee Type</th><th>Cm ID</tr>";

        while($row = $result->fetch_assoc())
            {
                $empid=$row["empid"];
                $emptype = $row["emptype"];
                $cmid = $row["cmid"];
                $edit="<a href='emptypeupdate.php?id=$empid'>Edit</a>";                
                $delete="<a href='emptypedelete.php?id=$empid'>Delete</a>";

                $str.="<tr><td>$emptype</td><td>$cmid</td><td>$edit</td><td>$delete</td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>
    