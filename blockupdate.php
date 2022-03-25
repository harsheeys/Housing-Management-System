
<?php
    include_once("header2.php");
?>
<?php 
    $blockid= "";
    $blockname = "";
   
 
    $blockid =$_GET["id"];   
    $cnn = mysqli_connect("localhost","root","","elegance");

    if(isset($_POST['btn']))
    {
        $blockname = $_POST["txt1"];
        
       
        $qry = "update employee_type set emptype='$blockname'"; 

        $cnn->query($qry);
        
        
    }

    $qry = "select * from  block where blockid='$blockid'"; 
    $result=$cnn->query($qry);
    
    $row=$result->fetch_assoc();
    
    $blockname = $row["blockname"];

 
    ?>

<div class="container">

<form method="post">

     Block Name: <input type="text" class="form-control"  value="<?php echo $blockname; ?>" name="txt1">

     
        
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
    

<?php
    include_once("footer2.php");
?>