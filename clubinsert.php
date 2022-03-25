<?php
    include_once("header2.php");
?>
    <?php
    
    $fcid = "";
    $opentime = "";
    $closetime = "";
  


    if(isset($_POST['btn']))
    {
        $blockname = $_POST['txt1'];
        $opentime = $_POST['txt2'];
        $closetime = $_POST['txte']
       
       

        $cnn = mysqli_connect("localhost","root","","elegance");

        $qry = "insert into block (fcid, opentime, closetime) values ('$fcid', '$opentime', '$closetime')";

        //echo $qry;

        $cnn->query($qry);


    }
    
    
    
    
    
    
    
    
    
    
    ?>
<div class="container">

<form method="post">

 
    Block Name: <input type="text" class="form-control"  placeholder="Enter Fc ID" name="txt1">
    Open Time : <input type="text" class="form-control"  placeholder="Enter Open Time" name="txt2">
    Close Time : <input type="text" class="form-control"  placeholder="Enter Clsoe Time" name="txt3">
        
  

  
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
<?php
    include_once("footer2.php");
?>