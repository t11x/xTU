<?php 
require '../connect.php';
$sql = "DELETE FROM store WHERE storeID = $_GET[id]";
$result = $con->query($sql);
header("Location: store_table.php");
?>