
<?php
	include_once("header2.php");
?>
<?php
    
    $fcid = "";

    if(isset($_POST['btn']))
    {
        $fcid = $_POST['txt1'];

        $cnn = mysqli_connect("localhost","root","","elegance");

        $qry = "delete from block where fcid='$fcid'";

        //echo $qry;

        $cnn->query($qry);


    }
?>
    

<div class="container">

<form method="post">

 
    FC ID: <input type="text" class="form-control" placeholder="Enter Fc ID" name="txt1">
        
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
<?php
    include_once("footer2.php");
?>