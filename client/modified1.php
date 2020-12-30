<?php    
    
include "../connection.php";        
$sql = "select * from customer";    
$result = mysqli_query($conn, $sql);    
?>    
<html>    
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" /> 
		<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 	
		<ul>
			<li style="float:right;"><a href="../view.php"> Back to homepage</a></li>
		</ul>
		<h1><center>Customer Data</center></h1>
		
		<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Customer Number</td>    
                <td>First Name</td>    
                <td>Middle Name</td>    
                <td>Last Name</td>    
                <td>Gender</td>    
                <td>DOB</td>    
                <td>Address</td>    
                <td>Pincode</td>    
                <td>Contact Number</td>
                <td>Mother Name</td>    
                <td>Mother Status</td>    
                <td>Father Name</td>    
                <td>Father Status</td>    
                <td>Marital Status</td>    
                <td>Spouse</td>    
                <td colspan = "2">Action</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Customer_Num;?>  
				</td>  
				<td>  
					<?php echo $row->First_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Middle_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Last_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Gender;?>  
				</td>  
				<td>  
					<?php echo $row->DOB;?>  
				</td>  
				<td>  
					<?php echo $row->Address;?>  
				</td>  
				<td>  
					<?php echo $row->Pincode;?>  
				</td>  
				<td> 
					<?php echo $row->Contact_Number;?>  
				</td>  
				<td>  
					<?php echo $row->Mother_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Mother_Status;?>  
				</td>  
				<td>  
					<?php echo $row->Father_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Father_Status;?>  
				</td>  
				<td>  
					<?php echo $row->Marital_status;?>  
				</td>
				<td>  
					<?php echo $row->Spouse;?>  
				</td>
				<td> <a href="delete.php?id=<?php echo $row->Customer_Num;?>" onclick="return confirm('Are You Sure want to delete')">Delete    
				</a> </td>  
			</tr>  
		<?php } ?>  			
        </table>   		
    </body>    
</html>