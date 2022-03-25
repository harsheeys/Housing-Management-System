<?php
    include_once("header2.php");
?>
<div class="page-header">
							<h1>
							New Banquet Booking
						
							</h1>
						</div>
    <?php
    
    

        $register_date = "";
        $start_date = "";
        $end_date = "";
        $start_time = "";
        $end_time = "";
        $notes = "";
        $persons = "";
        $dop = "";
  


    if(isset($_POST['btn']))
    {
        $register_date = $_POST['txt1'];
        $start_date = $_POST['txt2'];
        $end_date = $_POST['txt3'];
        $start_time = $_POST['txt4'];
        $end_time = $_POST['txt5'];
        $notes = $_POST['txt6'];
        $persons = $_POST['txt7'];
        
       

        $cnn = mysqli_connect("localhost","root","","elegance");

        $date = date('m/d/y h:i:s a', time());
        

        $qry = "insert into banquet_hallbooking (register_date, start_date, end_date, start_time, end_time, notes, persons, hallid, isapprove) values ('$register_date', '$start_date', '$end_date', '$start_time', '$end_time', '$notes', '$persons', '1', 'Rejected')";


       //echo $qry;

        $cnn->query($qry);


    }
    
    
    
    
    
    
    
    
    
    
    ?>
<div class="container">

<form method="post">

 
    Register Date: <input type="date" class="form-control"  placeholder="Enter Register date" name="txt1">
    Start Date: <input type="date" class="form-control"  placeholder="Enter Starting date" name="txt2">
    End Date: <input type="date" class="form-control"  placeholder="Enter Ending date" name="txt3">
    Start Time: <input type="text" class="form-control"  placeholder="Enter Start time" name="txt4">
    End Time: <input type="text" class="form-control"  placeholder="Enter End time" name="txt5">
    Notes: <input type="text" class="form-control"  placeholder="Enter Notes" name="txt6">
    Persons: <input type="text" class="form-control"  placeholder="persons" name="txt7">
    
   
        
  

  
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
<?php
    include_once("footer2.php");
?>