<?php
		include "../connection.php";
		$pn=$_POST['Pol'];
		$pay=$_POST['pay'];
		if($pay=='Yes'){
			$d=date("Y-m-d");
			$r=time()%(100000000000);
			$query="insert into paid_premium(Receipt_Num,Receipt_Date,Policy_Num) values('$r','$d','$pn')";
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
			$sql1="select * from premium";
			$result1 = mysqli_query($conn,$sql1);
			while($row1=mysqli_fetch_object($result1)){
				if($row1->Policy_Num=$pn){
					if ($row1->Mode=='MLY'){
						$ld = date('Y-m-d', strtotime($d. ' + 1 months'));
					}
					else if ($row1->Mode=='QLY'){
						$ld = date('Y-m-d', strtotime($d. ' + 3 months'));
					}
					else if ($row1->Mode=='YLY'){
						$ld = date('Y-m-d', strtotime($d. ' +  1 years'));
					}
				}
			}
			$query2="update premium set last_date= '$ld' where Policy_Num='$pn'";
			mysqli_query($conn,$query2) or die($query2."Can't Connect to Query...");
			$query3="update unpaid_premium set Fine=0,Lateness=0 where Policy_Num='$pn' ";
			mysqli_query($conn,$query3) or die($query3."Can't Connect to Query...");
		}
		else if($pay=='No'){
			$now = time();
			$sql="select * from unpaid_premium";
			$result = mysqli_query($conn,$sql);
			$i=0;
			while($row=mysqli_fetch_object($result)){
				$i++;
				if($row->Policy_Num == $pn){
					$ld=$row->last_date;
				}
			}
			$your_date = strtotime($ld);
			if($now>$your_date)
			$datediff = $now - $your_date;
			$late= round($datediff / (60 * 60 * 24));
			$f=$late*50;
			$query1="insert into unpaid_premium(Policy_Num,Fine,Lateness) values('$pn',$f,$late)";
			mysqli_query($conn,$query1) or die($query1."Can't Connect to Query...");
		}
		
?>