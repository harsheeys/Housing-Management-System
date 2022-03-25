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
        $fname=$_POST['txt1'];
        
        
 
    
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

 
 
    $str="<div class='alert alert-success'>
    <strong>Member</strong> Records  $cnt </div> ";
    $str.="<table class='table table-bordered'><tr><th> Name</th><th>Address</th></tr>";
    

        
        $qry = "SELECT fname,lname, houseno,blockname FROM member,house,block
                where fname like '$fname'and  house.houseid=member.houseid and block.blockid=house.blockid ";
                
                
                //echo $qry;
       
       
       $result = $cnn-> query($qry);
 
       $cnt = mysqli_num_rows($result);
        
       
       if($cnt>0)
{
                $str1="<table class='table table-bordered'><tr><th>Name</th><th>Address</th></tr>";

                while($row = $result->fetch_assoc())
                {

                    $fname=$row["fname"];
                    $lname =$row["lname"];
                    $fullname="$fname $lname";
                    $houseno=$row["houseno"];
                    $blockname=$row["blockname"];
                    $address="$houseno $blockname";
                    
                    
                    $str1.="<tr><td>$fullname</td><td>$address</td></tr>";
                    
                    
                    
                    
                
                
                $str1.="</table>";
                $str.="<tr><td>$fullname</td><td>$address</td></tr>";
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

 
First Name  : <input type="text" class="form-control"  placeholder="Enter First Name" name="txt1" >

    



    
<input type="submit" name="btn" class="btn btn-primary">


</form>


<?php
echo $str;
?>
<?php
	include_once("footer2.php");
?>
    
