<?php
include "input1.php";
$f=0;
?>
<html>    
    <head>    
        <title>Policy Information</title>    
    </head>    
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />
        <h2>Premium</h2>    
        <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" >    
			<div class = "container">
			<?php while($row = mysqli_fetch_object($result)){?>
				<div class = "form_group">
                    <label>Policy Number: </label><label><?php $f=1; echo $row->Policy_Num;?></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">
					<label>Customer Number: </label><label><?php echo $row->Customer_Num;?></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Agent Code: </label><label><?php echo $row->Agent_code;?></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>DOC: </label><label><?php echo $row->DOC;?></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Product: </label><label><?php echo $row->Product;?></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Sum Assured: </label><label><?php echo $row->Sum_Assured;?></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Payment Period: </label><label><?php echo $row->Pay_Period;?> years</label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Insurance Period: </label><label><?php echo $row->Ins_Period;?> years</label>
                </div>
				<div class = "form_group">
				<input name='Pol' value="<?php echo $row->Policy_Num;?>" hidden>
				</div>
				<div class = "form_group">
				</div>				
                <div class = "form_group">    
                    <label>Premium payed?: </label>    
                    <input type = "radio" name = "pay" value = "Yes" required />Yes
					<input type = "radio" name = "pay" value = "No" required />No
				</div>
				<div class = "form_group">    
                    <input type = "submit" value = "submit"/>    
                </div>
				<div class = "form_group">    
                    <input type = "reset" value = "reset"/>    
                </div>

			<?php }
			if ($f == 0){
				echo "Policy Not Found";
				echo "<a href='premium.php'>Back to search page</a>";
			}?>
				
            </div>    
        </form>    
    </body>    
</html>