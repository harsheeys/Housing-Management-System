
<?php
	include_once("header2.php");
?>
<?php
    
    $emptype = "";

    if(isset($_POST['btn']))
    {
        $emptype = $_POST['txt1'];

        $cnn = mysqli_connect("localhost","root","","elegance");

        $qry = "delete from employee_type where emptype='$emptype'";

        //echo $qry;

        $cnn->query($qry);


    }
?>
    

<div class="container">

<form method="post">

 
    Employee Type <input type="text" class="form-control" placeholder="Enter Employee ID" name="txt1">
        
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
<?php
    include_once("footer2.php");
?>