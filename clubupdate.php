
<?php
    include_once("header2.php");
?>
<?php 
    $clubid= "";
    $fcid = "";
    $opentime = "";
    $closetime = "";
   
 
    $blockid =$_GET["id"];   
    $cnn = mysqli_connect("localhost","root","","elegance");

    if(isset($_POST['btn']))
    {
        $fcid = $_POST["txt1"];
        $opentime = $_POST["txt2"];
        $closetime = $_POST["txt3"];
        
       
        $qry = "update club set fcid='$fcid', opnetime='$opentime', closetime='$closetime'"; 

        $cnn->query($qry);
        
        
    }

    $qry = "select * from  club where fcid='$fcid', opentime='$opentime', closetime='$closetime'"; 
    $result=$cnn->query($qry);
    
    $row=$result->fetch_assoc();
    
    $fcid = $row["fcid"];
    $opentime = $row["opentime"];
    $closetime = $row["closetime"];

 
    ?>

<div class="container">

<form method="post">

     Fc ID: <input type="text" class="form-control"  value="<?php echo $fcid; ?>" name="txt1">
     Open Time: <input type="text" class="form-control"  value="<?php echo $opentime; ?>" name="txt2">
     Close Time: <input type="text" class="form-control"  value="<?php echo $closetime; ?>" name="txt3">

     
        
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
    

<?php
    include_once("footer2.php");
?>