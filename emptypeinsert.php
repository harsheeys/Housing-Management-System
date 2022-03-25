<?php
    include_once("header2.php");
?>
    <?php
    
    $emptype = "";
    $cmid = "";


    if(isset($_POST['btn']))
    {
        $emptype = $_POST['txt1'];
        $cmid = $_POST['txt2'];
       

        $cnn = mysqli_connect("localhost","root","","elegance");

        $qry = "insert into employee_type (emptype,cmid) values ('$emptype', '$cmid')";

        //echo $qry;

        $cnn->query($qry);


    }
    
    
    
    
    
    
    
    
    
    
    ?>
<div class="container">

<form method="post">

 
    Employee Type: <input type="text" class="form-control"  placeholder="Enter Employee Type" name="txt1">
        
    Cm ID: <input type="text" class="form-control"  placeholder="Enter Cm ID" name="txt2">

  
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
<?php
    include_once("footer2.php");
?>