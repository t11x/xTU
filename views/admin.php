<?php 

    require '../connect.php';

    require './templates/header.php';
    $parts = explode("?", $_SERVER['REQUEST_URI']);   
    $current = $parts[0];
?>
<link rel="stylesheet" href="../assets/css/edit_user.css" />
<div style="margin-bottom:100px;"></div>
<!-- Admin section -->
<div class="container config-con" id="adminsection">
    <div class="user-title">Administration</div>
    <div class="user-head">Links</div>
    <!-- <br><strong>Approval</strong><br> -->
    <a href="approve_table.php" target="_blank" class="special-link">Approve stores</a>
    <!-- <a href="" target="_blank" class="special-link">Approve store owners</a> -->
    <!-- <br><strong>Edit and Delete</strong><br> -->
    <a href="store_table.php" target="_blank" class="special-link">Edit/Delete stores</a>
    <a href="user_table.php" target="_blank" class="special-link">Edit/Delete users</a>
    <a href="report_table.php" target="_blank" class="special-link">View reports/bugs</a>
</div>
<!-- END admin section -->
<?php

require './templates/footer.php';
?>