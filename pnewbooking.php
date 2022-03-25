<?php
    include_once("header2.php");
?>
<div class="page-header">
							<h1>
							New Parking Bookings
						
							</h1>
						</div>
    <?php

    $mid = $_SESSION["mid"];
    
    $dos = "";
    $doe = "";
    $doreason = "";
    $fname = "";
    $lname = "";
    $carno = "";
    $fromwhere = "";
    $mobileno = "";
    $email = "";
    $mid = "";
    $ispay = "";
    $isbook = "";
  


    if(isset($_POST['btn']))
    {
        $dos = $_POST['txt1'];
        $doe = $_POST['txt2'];
        $doreason = $_POST['txt3'];
        $fname = $_POST['txt4'];
        $lname = $_POST['txt5'];
        $carno = $_POST['txt6'];
        $fromwhere = $_POST['txt7'];
        $mobileno = $_POST['txt8'];
        $email = $_POST['txt9'];
       
       

        $cnn = mysqli_connect("localhost","root","","elegance");

        $date = date('m/d/y h:i:s a', time());
        

        $qry = "insert into parking_guest (dos, doe, doreason, fname, lname, carno, fromwhere, mobileno, email, pktid, ispay, isbook, mid) values ('$dos', '$doe', '$doreason', '$fname', '$lname', '$carno', '$fromwhere', '$mobileno', '$email', '1', 'approved', 'approved', '$mid')";

       // echo $qry;

        $cnn->query($qry);


    }
    
    
    
    
    
    
    
    
    
    
    ?>
<div class="container">

<form method="post">

 
    From: <input type="date" class="form-control"  placeholder="Enter starting date" name="txt1">
    To: <input type="date" class="form-control"  placeholder="Enter finishing date" name="txt2">
    Boking Reason: <input type="text" class="form-control"  placeholder="Enter booking reason" name="txt3">
    First Name: <input type="text" class="form-control"  placeholder="Enter First Name" name="txt4">
    Last Name: <input type="text" class="form-control"  placeholder="Enter Last Name" name="txt5">
    Car NO: <input type="text" class="form-control"  placeholder="Enter Car NO" name="txt6">
    Where From: <input type="text" class="form-control"  placeholder="Where From" name="txt7">
    Mobile NO: <input type="text" class="form-control"  placeholder="Enter Mobile NO" name="txt8">
    E-Mail: <input type="text" class="form-control"  placeholder="Enter E-Mail" name="txt9">
        
  

  
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
<?php
    include_once("footer2.php");
?>