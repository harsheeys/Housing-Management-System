
<?php
    include_once("header2.php");
?>
<?php 
    $fcid = "";
    $facilitytype = "";
    $cmid = "";
 
    $fcid =$_GET["id"];   
    $cnn = mysqli_connect("localhost","root","","elegance");

    if(isset($_POST['btn']))
    {
        $facilitytype = $_POST["txt1"];
        $cmid = $_POST["txt2"];
       
        $qry = "update facility_type set facilitytype='$facilitytype', cmid='$cmid' where fcid='$fcid'"; 

        $cnn->query($qry);
        
        
    }

    $qry = "select * from  facility_type where fcid='$fcid'"; 
    $result=$cnn->query($qry);
    
    $row=$result->fetch_assoc();
    
    $facilitytype = $row["facilitytype"];
    $cmid = $row["cmid"];
 
    ?>

<div class="container">

<form method="post">

     Facility Type: <input type="text" class="form-control"  value="<?php echo $facilitytype; ?>" name="txt1">

     Cm ID: <input type="text" class="form-control"  value="<?php echo $cmid; ?>" name="txt2" >
        
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
    

<?php
    include_once("footer2.php");
?>