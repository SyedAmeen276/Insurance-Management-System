<?php
include "../connection.php";    
if(is_numeric($_GET['pol'])){    
$sql = "delete from policy_data where Policy_Num = '".$_GET['pol']."'";    
$result = mysqli_query($conn,$sql);    
}
header('Location:modified1.php');
?>