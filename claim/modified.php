<?php    
include "input.php";
    
    
$sql = "select * from claim_dept";    
$result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>    
		<link href = "registration.css" type = "text/css" rel = "stylesheet" />  
	    <link href = "../style.css" type = "text/css" rel = "stylesheet" /> 	
		<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Claim_id</td>    
                <td>Claim_date</td>    
                <td>Reasons</td>    
                <td>Sanc_amt</td>    
                <td colspan = "2">Action</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->claim_id;?>  
				</td>  
				<td>  
					<?php echo $row->claim_date;?>  
				</td>  
				<td>  
					<?php echo $row->reason;?>  
				</td>  
				<td>  
					<?php echo $row->sanc_amt;?>  
				</td>  
				
				<td> <a href="delete.php?id=<?php echo $row->claim_id;?>" onclick="return confirm('Are You Sure')">Delete    
				</a>
				</td>  
			</tr>  
		<?php } ?>  			
        </table>   
		

<?php header('Location: modified1.php')?>; 		
    </body>    
</html>