<?php
    include_once("header2.php");
?>
    <?php
    
    $blockname = "";
  


    if(isset($_POST['btn']))
    {
        $blockname = $_POST['txt1'];
       
       

        $cnn = mysqli_connect("localhost","root","","elegance");

        $qry = "insert into block (blockname) values ('$blockname')";

        //echo $qry;

        $cnn->query($qry);


    }
    
    
    
    
    
    
    
    
    
    
    ?>
<div class="container">

<form method="post">

 
    Block Name: <input type="text" class="form-control"  placeholder="Enter Block Name" name="txt1">
        
  

  
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
<?php
    include_once("footer2.php");
?>