<?php
	include_once("header2.php");
?>
    <?php
    $mid=$_SESSION["mid"];

    $cnt="";
    $str="";
    $mid="";
    if(isset($_POST['btn']))
    {
        $cno=$_POST['txt1'];
        
 
    
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select * from member where cno='$cno' ";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

       
        if($cnt>0)
{
    $str="<div class='alert alert-success'>
    <strong>Member</strong> Records  $cnt </div> ";
    $str.="<table class='table table-bordered'><tr><th> Name</th><th>Address</th><th>Gender</th></tr>";

    while($row=$result->fetch_assoc())
    {
        $gen=$row["gen"];
        $qry1 = "SELECT commitee.cmid as cmid , fname,lname, rolename ,houseno,blockname FROM member,commitee,role,house,block
                where member.mid=commitee.mid and commitee.roleid=role.roleid and house.houseid=member.houseid and block.blockid=house.blockid and gen='$gen'";
       
       
       $result1 = $cnn-> query($qry1);
                
                $str1="<table class='table table-bordered'><tr><th>Name</th><th>Address</th><th>Gender</th></tr>";

                while($row1 = $result1->fetch_assoc())
                {

                    $fname=$row1["fname"];
                    $lname =$row1["lname"];
                    $fullname="$fname $lname";
                    $houseno=$row1["houseno"];
                    $blockname=$row1["blockname"];
                    $address="$houseno $blockname";
                    
                    
                    
                    $str1.="<tr><td>$fullname</td><td>$address</td></tr>";
                }
                
                $str1.="</table>";
                $str.="<tr><td>$fullname</td><td>$address</td><td>$gen</td></tr>";
    }
    $str.="</table>";
}
else
{
    $str="<div class='alert alert-success'>
    <strong></strong> No Records Found </div> ";
    
}
    }
    ?>
    <form method="post">

 
Contact Number  : <input type="text" class="form-control"  placeholder="Enter Contact Number" name="txt1" >

    



    
<input type="submit" name="btn" class="btn btn-primary">


</form>


<?php
echo $str;
?>
<?php
	include_once("footer2.php");
?>
    
