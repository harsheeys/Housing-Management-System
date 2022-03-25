
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
    $str.="<table class='table table-bordered'><tr><th> Name</th><th>Gender</th><th><House ID</th></tr>";

    while($row=$result->fetch_assoc())
    {
        $fname = $row["fname"];
        $lname = $row["lname"];
        $gen = $row["gen"];
        $houseid=$row["houseid"];
        $mid=$row["mid"];
        $str.="<tr><td>$fname $lname</td><td>$gen</td><td>$houseid</td></tr>";
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
         
        <div class="container">

<form method="post">

 
    Contact Number  : <input type="text" class="form-control"  placeholder="Enter Contact Number" name="txt1" >
    
        
  

  
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
<?php echo $cnt; ?>

<?php
echo $str;
?>

<?php
 $fyid="";
 $roleid="";
 $mid="";

  if(isset($_POST['btn1']))
{
    $fyid = $_POST['cmbfy'];
    $roleid=$_POST['cmbrole'];
    
          
   

    $cnn = mysqli_connect("localhost","root","","elegance");

    $qry = "insert into commitee (fyid,roleid,mid) values ('$fyid','$roleid','$mid')";

    //echo $qry;

    $cnn->query($qry);


}
?>


<form method="post">

   Financial Year : 
   <select name="cmbfy" class="form-control">
   <?php
$cnn = mysqli_connect("localhost","root", "", "elegance");

$qry = "select * from financialyear ";

$result = $cnn-> query($qry);

$cnt = mysqli_num_rows($result);

while($row = $result->fetch_assoc())
    {
        $fyname = $row["fyname"];
        $fyid=$row["fyid"];

        echo "<option value='$fyid'> $fyname</option>";
    }

    

?>

</select>
   Role : 
   
   <select name="cmbrole" class="form-control">
   <?php
$cnn = mysqli_connect("localhost","root", "", "elegance");

$qry = "select * from role ";

$result = $cnn-> query($qry);

$cnt = mysqli_num_rows($result);

while($row = $result->fetch_assoc())
    {
        $rolename = $row["rolename"];
        $roleid=$row["roleid"];

        echo "<option value='$roleid'> $rolename</option>";
    }

    

?>

</select><br>



    
<input type="submit" name="btn1" class="btn btn-primary">


</form>






    
    


<?php
	include_once("footer2.php");
?>
    
