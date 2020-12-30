<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<html>
<head>
<title>
Life Insurance 
</title>
</head>
<body>
<link href = "policy/style.css" type = "text/css" rel = "stylesheet" />  
<link href = "style.css" type = "text/css" rel = "stylesheet" />  

<nav> 

<ul>
	<li><a href="agent/agent.php"> <h3>Agent Registration</h3></a></li>
	<li><a href="client/client.php"><h3> Client Registration</h3></a></li>
	<li><a href="policy/policy.php"><h3> Policy Registration</h3></a></li>
	<li><a href="premium/premium.php"><h3>Payment</h3></a></li>
	<li><a href="Claim/claim.php"><h3>Claim Department</h3></a></li>
	
</ul>

</nav> 
<div class="title">
<font color="red"><h1><center>Life Insurance Corporation of BIT</center></h1></font>

</div>


<ul style="position: fixed; bottom: 0; width: 100%;">
        <li><a href="agent/modified1.php"><h3> Agents Data</h3></a></li>
	<li><a href="client/modified1.php"><h3> Customers Data</h3></a></li>
	<li><a href="policy/modified1.php"><h3> Policies Data</h3></a></li>
	<li><a href="premium/modified1.php"><h3> Payment Data</h3></a></li>
</ul>

</div>