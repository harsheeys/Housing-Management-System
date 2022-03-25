
<?php
	include_once("header2.php");
?>
    <?php
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from gym";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th>Gym Name</th><th>FC ID</tr>";

        while($row = $result->fetch_assoc())
            {
                $gymname = $row["gymname"];
                $fcid = $row["fcid"];
                
                
                $str.="<tr><td>$gymname</td><td>$fcid</td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>
    
