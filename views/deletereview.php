<?php 
require '../connect.php';
$sql = "DELETE FROM review WHERE reviewID = $_GET[id]";
$result = $con->query($sql);
header("Location: edit_user.php");
?>