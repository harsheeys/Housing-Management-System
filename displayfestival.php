
<?php
	include_once("header2.php");
?>
    <?php
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from festivaltype";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th>Festival Type</th><th>Image</th><</tr>";

        while($row = $result->fetch_assoc())
            {
                $ftitle = $row["ftitle"];
                $fimg = $row["fimg"];
                
                
                $str.="<tr><td>$ftitle</td><td>$fimg<td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>
    
