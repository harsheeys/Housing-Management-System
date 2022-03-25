
<?php
	include_once("header2.php");
?>
    <?php
    
        $mid = $_SESSION["mid"];

        $ftid=$_GET["ftid"];

        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from festivaldetail where ftid = '$ftid'";

        //echo $qry;

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th>Title</th><th>Start Date</th><th>Timing</th><th>Festival Details</th><th>Rules</th><th> Google Form</th></tr>";

        while($row = $result->fetch_assoc())
            {
                 $title = $row['title'];
                 $dos = $row['dos'];
                 $timing = $row['timing'];
                 $fdec = $row['fdec'];
                 $rules = $row['rules'];
                 $ftid = $row['ftid'];
                 $gformlink ="<a href='". $row['gformlink']."'> Link</a>";
            

                 $str.="<tr><td>$title</td><td>$dos</td><td>$timing</td><td>$fdec</td><td>$rules</td><td>$gformlink</td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>
    
