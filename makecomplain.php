<?php
    include_once("header2.php");
?>
<div class="page-header">
							<h1>
							Make Complain
						
							</h1>
						</div>
    <?php

    $mid = $_SESSION["mid"];
    
    $description = "";
   
    
  


    if(isset($_POST['btn']))
    {
        $description = $_POST['txtcom'];
       
        $cnn = mysqli_connect("localhost","root","","elegance");

        $date = date('m-d-y', time());
        

        $qry = "insert into complain_box (description, mid, dateofcomplain, issolved) values ('$description', '$mid', '$date', 'NO')";

       //echo $qry;

       $cnn->query($qry);


    }
    
    
    
    
    
    
    
    
    
    
    ?>
<div class="container">

<form method="post">

 
Write Your Complain here: <textarea rows="15" cols="20" class="form-control" name="txtcom" id="txtcom"> </textarea>
    
   
        
  <input type="submit" name="btn" class="btn btn-primary">
  

</form>
<?php
    include_once("footer2.php");
?>