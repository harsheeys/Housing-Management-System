
<?php
	include_once("header2.php");
?>
<?php
    
    $houseno = "";

    if(isset($_POST['btn']))
    {
        $houseno = $_POST["txt1"];

        $cnn = mysqli_connect("localhost","root","","elegance");

        $qry = "delete from house where houseno='$houseno'";

        //echo $qry;

        $cnn->query($qry);


    }
?>
    

<div class="container">

<form method="post">

 
    House Number: <input type="text" class="form-control" placeholder="Enter House Number" name="txt1">
        
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
<?php
    include_once("footer2.php");
?>