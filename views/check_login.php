<?php 
if(isset($_POST['signup'])){
    echo $_POST['email']."<br><br>";
    echo $_POST['pass']."<br><br>";
    echo $_POST['check_pass']."<br><br>";

    $sql = "INSERT INTO user (email, password, userType) VALUES (email, pass, 0)";
    $result = $con->query($sql);
}

?>