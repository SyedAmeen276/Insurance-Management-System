<?php
include "../connection.php";    
if(isset($_GET['id'])){    
$sql = "delete from claim_dept where claim_id = '".$_GET['id']."'";    
$result = mysqli_query($conn,$sql);    
}
header('Location:modified1.php');
?>