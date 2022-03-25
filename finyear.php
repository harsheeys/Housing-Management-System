
<?php
	include_once("header2.php");
?>
    <?php
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from financialyear";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th>Financial Year</th></tr>";

        while($row = $result->fetch_assoc())
            {
                $fyid=$row["fyid"];
                $fyname = $row["fyname"];
                
                $edit="<a href='updatefinyear.php?id=$fyid'>Edit</a>";                
                $delete="<a href='deletefinyear.php?id=$fyid'>Delete</a>";

                $str.="<tr><td>$fyname</td><td>$edit</td><td>$delete</td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>
    
