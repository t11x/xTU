<?php 
    require '../connect.php';
    require './templates/header.php';
    session_start();
    ?>
<link rel="stylesheet" href="../assets/css/login.css" />
<div class="login-bg"></div>
    <div class="container">
        <div class="alignitems">
            <img class="log-lg" src="https://i.imgur.com/mZfzt9s.png" alt="xTU">
            <div id="login-box">
                <div id="login">
                    <br>
                    <div class="login-title">Log in to xTU</div>
                    <div class="login-subtitle">To access your account.</div>
                    <br>
                    <form action="check_login.php" method="POST">
                        <input type="email" name="email" size="32" placeholder="E-mail" class="log-txt"><br>
                        <input type="password" minlength=8 name="pass" size="32" placeholder="Password" class="log-txt"><br><br>
                        <input type="submit" value="Log in" class="log-button" name="login">
                    </form>
                    <br>
                    <a href="forgot_password.php" target="_blank">Forgot password?</a><br><br>
                    <div id="signup-switch">Don't have an account? Click here to sign up</div>
                </div>
                <div id="signup">
                    <div id="login-switch"><i class="fas fa-chevron-circle-left"></i> Back to Log in</div>
                    <div class="login-title">Sign up to xTU</div>
                    <div class="login-subtitle">Become a partner with us.</div>
                    <br>
                    <form action="check_login.php" method="POST" onsubmit="return checkPass()">
                        <input type="email" name="email" size="32" placeholder="E-mail" class="log-txt"><br>
                        <input id="pass" minlength=8 type="password" required name="pass" size="32" placeholder="Password" class="log-txt"><br>
                        <input id="check_pass" minlength=8 type="password" required name="check_pass" size="32" placeholder="Confirm password" class="log-txt"><br><br>
                        <div class="login-subtitle">By clicking Sign up, you agree to User Agreement,
                            <br>Privacy Policy, and Cookie Policy</div>
                        <br>
                        <input type="submit" value="Sign up" class="log-button" name="signup">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("signup-switch").addEventListener("click", function(){
            document.getElementById('login-box').style.height = "400px"
            document.getElementById('signup').style.display = "block"
            document.getElementById('login').style.display = "none"
        })
        document.getElementById("login-switch").addEventListener("click", function(){
            document.getElementById('login-box').style.height = "350px"
            document.getElementById('signup').style.display = "none"
            document.getElementById('login').style.display = "block"
        })

        function checkPass(){
            if (document.getElementById('pass').value==document.getElementById('check_pass').value){
                return true
            } else {
                alert('password is not match')
                return false
            }
        }
    </script>
</body>
<!-- NO FOOTER -->