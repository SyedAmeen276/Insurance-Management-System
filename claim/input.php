<?php
		include "../connection.php";
		$ci=$_POST['claim_id'];
		$cd=$_POST['claim_date'];
		$re=$_POST['reason'];
		$sa=$_POST['sanc_amt'];
		$query="insert into claim_dept(claim_id,claim_date,reason,sanc_amt) values('$ci','$cd','$re','$sa')";
		mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
?>


