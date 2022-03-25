
<?php
    include_once("header2.php");
?>
<?php 
    $houseid= "";
    $housename = "";
   
 
    $houseid =$_GET["id"];   
    $cnn = mysqli_connect("localhost","root","","elegance");

    if(isset($_POST['btn']))
    {
        $housename = $_POST["txt1"];
    
        
       
        $qry = "update club set houseid='$houseid', housename='$housename'"; 

        $cnn->query($qry);
        
        
    }

    $qry = "select * from  club where houseid='$houseid', housename='$housename'"; 
    $result=$cnn->query($qry);
    
    $row=$result->fetch_assoc();
    
    $fcid = $row["fcid"];
    $opentime = $row["opentime"];
    $closetime = $row["closetime"];

 
    ?>

<div class="container">

<form method="post">

     House ID: <input type="text" class="form-control"  value="<?php echo $houseid; ?>" name="txt1">
     House Name: <input type="text" class="form-control"  value="<?php echo $housename; ?>" name="txt2">
    

     
        
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
    

<?php
    include_once("footer2.php");
?>