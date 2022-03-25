<?php
    include_once("header2.php");
?>
    <?php
    
    $facilitytype = "";
    $cmid = "";


    if(isset($_POST['btn']))
    {
        $emptype = $_POST['txt1'];
        $cmid = $_POST['txt2'];
       

        $cnn = mysqli_connect("localhost","root","","elegance");

        $qry = "insert into facility_type (faciliyttype,cmid) values ('$emptype', '$cmid')";

        //echo $qry;

        $cnn->query($qry);


    }
    
    
    
    
    
    
    
    
    
    
    ?>
<div class="container">

<form method="post">

 
    Facility Type: <input type="text" class="form-control"  placeholder="Enter Facility Type" name="txt1">
        
    Cm ID: <input type="text" class="form-control"  placeholder="Enter Cm ID" name="txt2">

  
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
<?php
    include_once("footer2.php");
?>