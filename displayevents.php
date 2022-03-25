
<?php
	include_once("header2.php");
?>
<div class="page-header">
							<h1>
							Events
						
							</h1>
						</div>
    <?php
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from festivaltype";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<ul class='ace-thumbnails clearfix'>";

        while($row = $result->fetch_assoc())
            {
                $ftid=$row["ftid"];
                $ftitle ="<a href='eventdetails.php?ftid=$ftid'>".$row["ftitle"]."</a>";
                $fimg = $row["fimg"];
                $img="<img src='img//$fimg' height='200' width='200'>";
                
                $str.="<li>$ftitle<br>$img</li>";
                

            }

            $str.="</ul>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>


    <?php
	include_once("footer2.php");
?>
    
