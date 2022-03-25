
<?php
	include_once("header2.php");
?>
    <?php
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from financialyear";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th>Fyid</th><th>Fyname</th></tr>";

        while($row = $result->fetch_assoc())
            {
                $fyid = $row["fyid"];
                $fyname = $row["fyname"];
                


                $qry1 = "SELECT commitee.cmid as cmid , fname,lname, rolename ,houseno,blockname FROM member,commitee,role,house,block
                where member.mid=commitee.mid and commitee.roleid=role.roleid and house.houseid=member.houseid and block.blockid=house.blockid and fyid='$fyid'";
                
                $result1 = $cnn-> query($qry1);
                $str1="";
                $str1="<table class='table table-bordered'><tr><th>Cmid</th><th>Mid</th><th>Roleid</th></tr>";

                while($row1 = $result1->fetch_assoc())
                {

                    $fname=$row1["fname"];
                    $lname =$row1["lname"];
                    $fullname="$fname $lname";
                    $houseno=$row1["houseno"];
                    $blockname=$row1["blockname"];
                    $address="$houseno $blockname";
                    $rolename =$row1["rolename"];
                    
                    
                    $str1.="<tr><td>$fullname</td><td>$address</td><td>$rolename</td></tr>";
                }
                
                $str1.="</table>";
                $str.="<tr><td>$fyid</td><td>$fyname</td></tr><tr><td colspan='2'>$str1</td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>
    
