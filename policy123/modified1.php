<?php    
    
include  "../connection.php";   
    
if(isset($_POST['Policy_Num'] )){    
$sql = "delete from policy_data where id = '".$_POST['Policy_Num']."'";    
$result = mysqli_query($conn,$sql);    
}    
    
$sql = "SELECT s.Agent_code,s.Customer_Num,s.DOC,s.Ins_Period,s.Pay_Period,s.Policy_Num,s.Product,s.Sum_Assured,m.Mode from policy_data s , premium m WHERE s.Policy_Num=m.Policy_Num";   
$result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>      
	<link href = "policy.css" type = "text/css" rel = "stylesheet" /> 
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
                <td>types</td>    
                <td>Sum Assured</td>    
                <td>Payment Period</td>    
                <td>Installmet period</td>  
				<td>Mode</td>
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
					<?php echo $row->Mode;?>  
				</td>
				<td> <a href="delete.php?pol=<?php echo $row->Policy_Num;?>" onclick="return confirm('Are You Sure')">Delete    
				</a> </td>  
			</tr>  
		<?php } ?>  			
        </table>   		
    </body>    
</html>