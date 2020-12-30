<html>    
    <head>    
        <title>Registration Form</title>    
    </head>    
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />
		<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 
		<ul>
		<li style="float:right;"><a href="../view.php">Back to homepage</a></li>    
		</ul>
		<h2>Agent</h2>    
        <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">
				<div class = "form_group">    
                    <label>Agent Code:</label>    
                    <input type = "text" name = "Agent_code" required pattern="[0-9]{3}[A-Z a-z]{3}[0-9]{3}"/>    
                </div>
                <div class = "form_group">    
                    <label>Name:</label>    
                    <input type = "text" name = "Agent_Name" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Date of Birth:	</label><input type = "date" name = "DOB" value = "" required />
                </div>
				<div class = "form_group">    
                    <label>Address:</label>    
                    <input type = "text" name = "Address" value = "" required />    
                </div>
				<div class = "form_group">    
                    <label>Pincode: </label>    
                    <input type = "text" name = "Pincode" value = ""  required />    
                </div>
				<div class = "form_group">    
                    <label>Branch: </label>    
                    <input type = "text" name = "Branch" value = ""  required" />    
                </div>
				
				<div class = "form_group">    
                    <label>Contact Number: </label>    
                    <input type = "text" name = "Contact_Number" value = ""  required pattern="[0-9]{10}" />    
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