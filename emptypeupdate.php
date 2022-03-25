
<?php
    include_once("header2.php");
?>
<?php 
    $emid = "";
    $emptype = "";
    $cmid = "";
 
    $empid =$_GET["id"];   
    $cnn = mysqli_connect("localhost","root","","elegance");

    if(isset($_POST['btn']))
    {
        $emptype = $_POST["txtemptype"];
        $cmid = $_POST["txtcmid"];
       
        $qry = "update employee_type set emptype='$emptype', cmid='$cmid' where empid='$empid'"; 

        $cnn->query($qry);
        
        
    }

    $qry = "select * from  employee_type where empid='$empid'"; 
    $result=$cnn->query($qry);
    
    $row=$result->fetch_assoc();
    
    $emptype = $row["emptype"];
    $cmid = $row["cmid"];
 
    ?>

<div class="container">

<form method="post">

     Employee Type: <input type="text" class="form-control"  value="<?php echo $emptype; ?>" name="txtemptype">

     Cm ID: <input type="text" class="form-control"  value="<?php echo $cmid; ?>" name="txtcmid" >
        
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
    

<?php
    include_once("footer2.php");
?>