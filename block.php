
<?php
	include_once("header2.php");
?>
    <?php
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from block";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th>BLock</th></tr>";

        while($row = $result->fetch_assoc())
            {
                $blockid=$row["blockid"];
                $blockname = $row["blockname"];
                
                $edit="<a href='blockupdate.php?id=$blockid'>Edit</a>";                
                $delete="<a href='blockdelete.php?id=$blockid'>Delete</a>";

                $str.="<tr><td>$blockname</td><td>$edit</td><td>$delete</td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>
    
