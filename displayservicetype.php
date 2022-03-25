
<?php
	include_once("header2.php");
?>
    <?php
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from servicetype";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th>Service Type</th><th>Image</th><</tr>";

        while($row = $result->fetch_assoc())
            {
                $stype = $row["stype"];
                $simg = $row["simg"];
                
                
                $str.="<tr><td>$stype</td><td>$simg<td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>

    
