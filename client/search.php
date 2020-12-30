<?php

	include "../connection.php";
	


	if (isset($_GET['Customer_Num'])) {
		$id = $_GET['Customer_Num'];
		echo "connected";
		$query1 = mysql_query("select * from customer where Customer_Num=$id");

	}
    
        //  <!-- $ab=$_GET['Customer_Num'];
        // $query= "select * from customer where Customer_Num='$ab'";
        // $result=mysqli_query($conn,$query) ;
        // //  or die ($query."cannot connect to query"); -->
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Customer Number</td>    
                <td>First Name</td>        
                <td>Last Name</td>    
                <td>Gender</td>    
                <td>DOB</td>    
                <td>Address</td>       
                <td>Contact Number</td>
                <td>Mother Name</td>    
          
                <td>Father Name</td>    
      
                 
				<td>Claim id</td>     
                <td colspan = "2">Action</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($query1)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Customer_Num;?>  
				</td>  
				<td>  
					<?php echo $row->First_Name;?>  
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
					<?php echo $row->Contact_Number;?>  
				</td>  
				<td>  
					<?php echo $row->Mother_Name;?>  
				</td>  
				
				<td>  
					<?php echo $row->Father_Name;?>  
				</td>  
				
				<td>  
					<?php echo $row->claim_id;?>  
				</td>  
			</tr>  
		<?php } ?>  			
        </table>   		
    </body>    
</html>
</body>
</html>