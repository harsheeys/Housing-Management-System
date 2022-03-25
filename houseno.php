
<?php
	include_once("header2.php");
?>
    <?php
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from house";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th>House</th></tr>";

        while($row = $result->fetch_assoc())
            {
                $houseid=$row["houseid"];
                $houseno = $row["houseno"];
                
                $edit="<a href='hnoupdate.php?id=$houseid'>Edit</a>";                
                $delete="<a href='hnodelete.php?id=$houseid'>Delete</a>";

                $str.="<tr><td>$houseno</td><td>$edit</td><td>$delete</td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>
    
