
<?php
	include_once("header2.php");
?>
<?php
    
    $facilitytype = "";

    if(isset($_POST['btn']))
    {
        $facilitytype = $_POST['txt1'];

        $cnn = mysqli_connect("localhost","root","","elegance");

        $qry = "delete from facility_type where facilitytype='$facilitytype'";

        //echo $qry;

        $cnn->query($qry);


    }
?>
    

<div class="container">

<form method="post">

 
    Facility Type <input type="text" class="form-control" placeholder="Enter Facility Type" name="txt1">
        
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
<?php
    include_once("footer2.php");
?>