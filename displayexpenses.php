
<?php
	include_once("header2.php");
?>
<div class="page-header">
							<h1>
							Employees/Workers Expenses
						
							</h1>
						</div>
    <?php
    
        $cnn = mysqli_connect("localhost","root", "", "elegance");

        $qry = "select emptype,salary,doa,otherexpenses_amount,month,year,other_expenses_detail from employee_type,expenses
        where employee_type.empid=expenses.empid ";

        $result = $cnn-> query($qry);

        $cnt = mysqli_num_rows($result);

        $str="<table class='table table-bordered'><tr><th>Employee</th><th>Salary</th><th>Date of Admission</th><th>Other Expenses amount</th><th>month</th><th>Year</th><th>Other Expenses details</th></tr>";

        while($row = $result->fetch_assoc())
            {   
                $emptype = $row["emptype"];
                $salary = $row["salary"];
                $doa = $row["doa"];
                $otherexpenses_amount = $row["otherexpenses_amount"];
                $month= $row["month"];
                $year = $row ["year"];
                $other_expenses_detail = $row ["other_expenses_detail"];
                
                $str.="<tr><td>$emptype</td><td>$salary</td><td>$doa<td>$otherexpenses_amount</td><td>$month</td><td>$year</td><td>$other_expenses_detail</td></tr>";
                

            }

            $str.="</table>";
        
        
    
        ?>
    
    
    <?php 
        echo $str;
    ?>
    <?php
	include_once("footer2.php");
?>
    
