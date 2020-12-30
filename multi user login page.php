<!DOCTYPE HTML>
<?php

$user = 'root';
$pass = '';
$db = 'insu';


$conn  = new mysqli('localhost', $user ,$pass ,$db) or die("unable to connect");
 
if (isset($_POST['Login'])){
	
	$user = $_POST['User'];
	$pass = $_POST['pass'];
	$usertype = $_POST['Usertype'];
	$query  = "SELECT * FROM `multiuserloginpage` WHERE Username='".$user."' and password = '".$pass."' and usertype= '".$usertype."'";
	$result = mysqli_query($conn , $query);
	if ($result)
	{
		while($row = mysqli_fetch_array($result)){
		echo'<script type="text/javascript"> alert ("you are login successful and you are logined as '.$row['usertype'].'")</script>';
		}
		if($usertype=="admin")
		{
			?>
			<script type="text/javascript">window.location.href="view.php"</script>
			<?php
		}
		elseif($usertype ="normaluser")
		{
			?>
			<script type="text/javascript">window.location.href="view.php"</script>
			<?php
		}
		else
		{
			echo 'no result';
		}
	}
	
	
}
	






?>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Multi user Login page</title>
</head>
<body>
	<form method = "post">
  <table>
  <tr>
  <td> Username : <input type="text" name = "User" placeholder = "enter your username" </td>
  </tr>
  <tr> 
  <td> Password : <input type="password" name = "pass" placeholder = "enter your password"  </td>
  </tr>
  <tr>
  <td>Select user type : <select name ="Usertype">
  <option value="admin"> Admin</option>
  <option value="User">User</option>
  
  </select>
  </td>
  </tr>
  <td> 
  <td>
  <input type = "Submit" name ="Login" value = "Login"
  </td>
  </td>
  </table>
	
	</form>
</body>
</html>
