<?php    
    
include "input.php";    
    
$sql = "select * from paid_premium";    
$result = mysqli_query($conn,$sql);    
$sql1 = "select * from unpaid_premium";
$result1 = mysqli_query($conn,$sql1);  
?>    
<html>    
    <body>
	<link href = "../style.css" type = "text/css" rel = "stylesheet" />    
	<link href = "registration.css" type = "text/css" rel = "stylesheet" />    
	<center>    
	<h1> Premium details</h1>
	<h2> Paid Premiums </h2>
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Receipt Number</td>    
                <td>Receipt Date</td>    
                <td>Policy_Num</td>    
				<td>Premium</td>    
				<td>Mode</td>    
				<td>Last Date</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Receipt_Num;?>  
				</td>  
				<td>  
					<?php echo $row->Receipt_Date;?>  
				</td>  
				<td>  
					<?php echo $row->Policy_Num;?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row1 = mysqli_fetch_object($result1)){
						if($row1->Policy_Num==$row->Policy_Num)
							echo $row1->Premium;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row1 = mysqli_fetch_object($result1)){
						if($row1->Policy_Num==$row->Policy_Num)
							echo $row1->Mode;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row1 = mysqli_fetch_object($result1)){
						if($row1->Policy_Num==$row->Policy_Num)
							echo $row1->Last_date;
					}	
					?>  
				</td>  
			</tr> 
		<?php }?>
        </table>
		<h2> Unpaid Premiums </h2>
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Policy_Num</td>    
				<td>Premium</td>    
				<td>Mode</td>    
				<td>Last Date</td>    
				<td>Fine</td>
				<td>Lateness</td>
            </tr>  
	<?php    
    
		while($row1 = mysqli_fetch_object($result1)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row1->Policy_Num;?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row1 = mysqli_fetch_object($result1)){
						if($row1->Policy_Num==$row->Policy_Num)
							echo $row1->Premium;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row1 = mysqli_fetch_object($result1)){
						if($row1->Policy_Num==$row->Policy_Num)
							echo $row1->Mode;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row1 = mysqli_fetch_object($result1)){
						if($row1->Policy_Num==$row->Policy_Num)
							echo $row1->Last_date;
					}	
					?>  
				</td>  
				<td>  
					<?php echo $row1->Fine;?>  
				</td>  
				<td>  
					<?php echo $row1->Lateness;?>  
				</td>  
				
			</tr> 
		<?php }?>
        </table>
		<?php header('Location:modified1.php');?>
    </body>    
</html>