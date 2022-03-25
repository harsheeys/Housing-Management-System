<?php
    include_once("header2.php");
?>
    <?php
    
    $fyid = "";
    $fyname = "";

  


    if(isset($_POST['btn']))
    {
        $fyname = $_POST['txt1'];
              
       

        $cnn = mysqli_connect("localhost","root","","elegance");

        $qry = "insert into financialyear (fyname) values ('$fyname')";

        //echo $qry;

        $cnn->query($qry);


    }
    
    
    
    
    
    
    
    
    
    
    ?>
<div class="container">

<form method="post">

 
    Financial Year  : <input type="text" class="form-control"  placeholder="Enter Financial Year" name="txt1">
 
        
  

  
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
<?php
    include_once("footer2.php");
?>