<?php
		include "../connection.php";
		$fn=$_POST['First_Name'];
		$mn=$_POST['Middle_Name'];
		$d=$_POST['DOB'];
		$ln=$_POST['Last_Name'];
		$g=$_POST['Gender'];
		$a=$_POST['Address'];
		$p=$_POST['Pincode'];
		$con=$_POST['Contact_Number'];
		$mon=$_POST['Mother_Name'];
		$mos=$_POST['Mother_Status'];
		$fan=$_POST['Father_Name'];
		$fas=$_POST['Father_Status'];
		$ms=$_POST['Marital_Status'];
		$s=$_POST['Spouse'];
		$query="insert into customer(First_Name,Middle_Name,Last_Name,Gender,DOB,Address,Pincode,Contact_Number, Mother_Name, Mother_Status,Father_Name, Father_Status, Marital_status, Spouse) values('$fn','$mn','$ln','$g','$d','$a',$p,$con,'$mon','$mos','$fan','$fas','$ms','$s')";
		mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
?>