<?php 
require '../connect.php';
$sql = "UPDATE store SET approve = 1 WHERE storeID = $_GET[id]";
$result = $con->query($sql);
header("Location: store_table.php");
?>