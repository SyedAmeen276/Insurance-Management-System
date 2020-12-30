<?php
		include "../connection.php";
		$pn=$_POST['Policy_Num'];
		$cn=$_POST['Customer_Num'];
		$ac=$_POST['Agent_code'];
		$d=$_POST['DOC'];
		$p=$_POST['Product'];
		$sa=$_POST['Sum_assured'];
		$pp=$_POST['Payment_period'];
		$ip=$_POST['Ins_period'];
		$mode=$_POST['mode'];
		if ($mode=='MLY'){
			$pre = $sa/($ip*12);
			$ld = date('Y-m-d', strtotime($d. ' + 1 months'));
		}
		else if ($mode=='QLY'){
			$pre = $sa/($ip*4);
			$ld = date('Y-m-d', strtotime($d. ' + 3 months'));
			
		}
		else if ($mode=='YLY'){
			$pre = $sa/($ip);
			$ld = date('Y-m-d', strtotime($d. ' +  1 years'));
		}
		else if ($mode=='SSS'){
			$pre = $sa;
			$ld = $d;
		}
		
		$query="insert into policy_data(Policy_Num,Customer_Num,Agent_code,DOC,Product,Sum_Assured,Pay_Period,Ins_Period) values($pn,$cn,'$ac','$d','$p',$sa,$pp,$ip)";
		mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
		$query2="insert into premium(Policy_Num,Premium,Mode,Last_date) values($pn,$pre,'$mode','$ld')";
		mysqli_query($conn,$query2) or die($query2."Can't Connect to Query...");
		$query3="insert into unpaid_premium(Policy_Num,Fine,Lateness) values($pn,0,0)";
		mysqli_query($conn,$query3) or die($query2."Can't Connect to Query...");
?>