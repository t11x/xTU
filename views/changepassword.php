<?php 
require '../connect.php';
session_start();

$passwordHash = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$sql = "SELECT * FROM user WHERE email = $_SESSION[email] and password = $passwordHash";
$result = $con->query($sql);
if (mysqli_num_rows($result)==1){
    if ($_POST['new_pass']==$_POST['check_new_pass']){
        $passwordHash = password_hash($_POST['new_pass'], PASSWORD_DEFAULT);
        $sql_newpass = "UPDATE user SET password = $passwordHash WHERE email = $_SESSION[email]";
    } else {
        echo "<script>
        alert('password is not match')
        window.location = 'edit_user.php'
    </script>";
    }
    
} else {
    echo "<script>
        alert('wrong password')
        window.location = 'edit_user.php'
    </script>";
}

?>