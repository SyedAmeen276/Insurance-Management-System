<html>    
    <head>    
        <title>claim Form</title>    
    </head>    
    <body>    
       <link href = "registration.css" type = "text/css" rel = "stylesheet" />
		<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 
		<ul>
		<li style="float:right;"><a href="../view.php">Back to homepage</a></li>    
		</ul>
		<h2>Claim</h2>    
        <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">
				<div class = "form_group">    
                    <label>Claim_id:</label>    
                    <input type = "text" name = "claim_id" value = " " required/>    
                </div>
          
                <div class = "form_group">    
                    <label>Claim_Date	</label>
					<input type = "date" name = "claim_date" value = "" required />
                </div>
				<div class = "form_group">    
                    <label>Reason:</label>    
                    <input type = "text" name = "reason" value = "" required />    
                </div>
				<div class = "form_group">    
                    <label>Sanction Amount: </label>    
                    <input type = "text" name = "sanc_amt" value = ""  required />    
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