<?php    
    
include "../connection.php";    
    
$sql = "select * from policy_data";    
$result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>      
		<link href = "registration.css" type = "text/css" rel = "stylesheet" />    
		<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 
		
		<ul>
			<li style="float:right;"><a href="../view.php"> Back to homepage</a></li>
		</ul>
		<h1><center>Policy Data</center></h1>
	
		<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Policy Number</td>    
                <td>Customer Number</td>    
                <td>Agent code</td>    
                <td>DOC</td>    
                <td>Product</td>    
                <td>Sum Assured</td>    
                <td>Payment Period</td>    
                <td>Installmet period</td>  
				<td>Policy info</td>
                <td colspan = "2">Action</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Policy_Num;?>  
				</td>  
				<td>  
					<?php echo $row->Customer_Num;?>  
				</td>  
				<td>  
					<?php echo $row->Agent_code;?>  
				</td>  
				<td>  
					<?php echo $row->DOC;?>  
				</td>  
				<td>  
					<?php echo $row->Product;?>  
				</td>  
				<td>  
					<?php echo $row->Sum_Assured;?>  
				</td>  
				<td>  
					<?php echo $row->Pay_Period;?>  
				</td>  
				<td>  
					<?php echo $row->Ins_Period;?>  
				</td>  
				<td>  
					<a href="../view.php?Policy_Num=<?php echo $row->Policy_Num;?>">Policy Data </a>
				</td>
				<td> <a href="delete.php?pol=<?php echo $row->Policy_Num;?>" onclick="return confirm('Are You Sure')">Delete    
				</a> </td>  
			</tr>  
		<?php } ?>  			
        </table>   		
    </body>    
</html>