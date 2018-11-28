<?php 
require '../connect.php';
session_start();
if(isset($_POST['signup'])){
    // echo $_POST['email']."<br><br>";
    // echo $_POST['pass']."<br><br>";
    // echo $_POST['check_pass']."<br><br>";

    $passwordHash = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (email, password, userType) VALUES ('$_POST[email]', '$passwordHash', 'user')";
    $result = $con->query($sql);
    echo "<script>
                    alert('signup success')
                    window.location = 'login.php'
                </script>";

    if(!$result){
        echo $con->error;
    }
} elseif (isset($_POST['login'])){
    $sql = "SELECT * FROM user WHERE email = '$_POST[email]'";
    $result = $con->query($sql);
    if(mysqli_num_rows($result)==0){
        echo "<script>
                alert('email does not exist')
                window.location = 'login.php'
            </script>";
    } else {
        $row = $result->fetch_assoc();
        if(password_verify($_POST['pass'], $row['password'])){
            $_SESSION['email']=$_POST['email'];
            $_SESSION['userType']=$row['userType'];
            $_SESSION['userID']=$row['userID'];
            echo "<script>
                    alert('login success')
                    window.location = '../index.php'
                </script>";
        } else {
            echo "<script>
                    alert('password is not correct')
                    window.location = 'login.php'
                </script>";
        }
    }
}

?>