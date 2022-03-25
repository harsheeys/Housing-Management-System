
<?php
	include_once("header2.php");
?>
    <?php
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from club";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th>Fc ID</th><th>Open Time</th><th>Close Time</th></tr>";

        while($row = $result->fetch_assoc())
            {
                $clubid=$row["clubid"];
                $fcid = $row["fcid"];
                $opentime = $row["opentime"];
                $closetime = $row["closetime"];
                
                $edit="<a href='clubupdate.php?id=$clubid'>Edit</a>";                
                $delete="<a href='clubdelete.php?id=$clubid'>Delete</a>";

                $str.="<tr><td>$fcid</td><td>$opentime</td><td>$closetime</td><td>$edit</td><td>$delete</td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>
    

