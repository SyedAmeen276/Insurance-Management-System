<?php
		include "../connection.php";
		$ac=$_POST['Agent_code'];
		$an=$_POST['Agent_Name'];
		$d=$_POST['DOB'];
		$a=$_POST['Address'];
		$p=$_POST['Pincode'];
		$con=$_POST['Contact_Number'];
		$br=$_POST['Branch'];
		$query="insert into agent(Agent_code,Agent_name,DOB, Address, Pincode, Branch, Contact_Num) values('$ac','$an','$d','$a',$p,'$br',$con)";
		mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
?>