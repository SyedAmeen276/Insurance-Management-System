<html>    
		<head>    
        <title>Registration Form</title>    
    </head>    
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />    
		<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 	
		<ul>
			<li style="float:right;"><a href="../view.php"> Back to homepage</a></li>
		</ul>
		<h2>Policy</h2>    
        <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">
				<div class = "form_group">    
                    <label>Policy Number:</label>    
                    <input type = "text" name = "Policy_Num" required pattern="[0-9]{9}"/>    
					<font size = "1">Enter 9 digit number.</font>
                </div>
                <div class = "form_group">    
                    <label>Customer Number:</label>    
                    <select name = "Customer_Num">
					<?php 
						include "../connection.php";
						$sql="select * from customer";
						$result = mysqli_query($conn,$sql);
						$i=0;
						while($row=mysqli_fetch_object($result)){
							$i++;
					?>
						<option value = "<?php echo $row->Customer_Num?>"><?php echo $row->Customer_Num?></option>
						<?php } ?>
						</select>
                </div>    
                <div class = "form_group">    
                    <label>Agent Code:</label>    
                    <select name = "Agent_code">
					<?php 
						include "../connection.php";
						$sql="select * from agent";
						$result = mysqli_query($conn,$sql);
						$i=0;
						while($row=mysqli_fetch_object($result)){
							$i++;
					?>
						<option value = "<?php echo $row->Agent_code?>"><?php echo $row->Agent_code?></option>
						<?php } ?>
					</select>
                </div>    
                <div class = "form_group">    
                    <label>DOC:</label>    
                    <input type = "date" name = "DOC" value = "" required />    
                </div>  
				<div class = "form_group">    
                    <label>Product:</label>    
                    <input type = "text" name = "Product" value = "" required />    
                </div>
				
				<div class = "form_group">    
                    <label>Sum Assured: </label>    
                    <input type = "text" name = "Sum_assured" value = ""  required />    
                </div>
				<div class = "form_group">    
                    <label>Payment Period: </label>    
                    <input type = "text" name = "Payment_period" value = ""  required />    
                </div>
				<div class = "form_group">    
                    <label>Insurance Period: </label>    
                    <input type = "text" name = "Ins_period" value = ""  required />    
                </div>
				<div class = "form_group">    
                    <label>Premium mode: </label>    
                    <input type = "radio" name = "mode" value = "MLY" required />Monthly
					<input type = "radio" name = "mode" value = "YLY" required />Yearly
					<input type = "radio" name = "mode" value = "QLY" required />Quarterly
					<input type = "radio" name = "mode" value = "SSS" required />Single premium 
				</div>
				<div class = "form_group">    
                    <input type = "submit" value = "submit"/>    
                </div>
				<div class = "form_group">    
                    <input type = "reset" value = "reset"/>    
                </div>
				
            </div>    
        </form>    
    </body>    
</html>    