<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>xTU</title>
  
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <script type="text/javascript" src="/node_modules/bulma-extensions/bulma-carousel/dist/bulma-carousel.min.js"></script>
  <script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../assets/js/slick.js"></script>
  <link rel="stylesheet" href="../assets/css/slick.css">
  <link rel="stylesheet" href="../assets/css/slick-theme.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
</head>
<body>
    <!-- Navbar -->
    <div class="navbar-box">
        <div class="container">
            <div class="nav-left">
                <a href="../index.php"><img id="title-logo" src="https://i.imgur.com/mZfzt9s.png" alt="1024x545"></a>
                <div class="nav-list dd-h">Categories <i class="fas fa-angle-down"></i>
            
            <!-- Dropdown container -->
            <div class="dropdown-box">
                <div class="dropdown-subcat">
                    <div class="dropdown-subcat-head"><i class="fas fa-utensils"></i></div>
                    <div class="dropdown-item">
                        <a href="<?php echo "search.php?category=1"; ?>"><img src="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Food-Dome-512.png" alt=""><div class="dd-t">Food</div></a>
                        <a href="<?php echo "search.php?category=2"; ?>"><img src="https://balithisweek.com/wp-content/uploads/2016/10/btw-icon-cafe.png" alt=""><div class="dd-t">Café</div></a>
                        <a href="<?php echo "search.php?category=3"; ?>"><img src="https://image.flaticon.com/icons/svg/227/227310.svg" alt=""><div class="dd-t">Store</div></a>
                        <a href="<?php echo "search.php?category=4"; ?>"><img src="https://image.flaticon.com/icons/svg/1048/1048380.svg" alt=""><div class="dd-t">Pharmacy</div></a>
                        <a href="<?php echo "search.php?category=5"; ?>"><img src="https://png.pngtree.com/svg/20161203/others_906370.png" alt=""><div class="dd-t">Others</div></a>
                    </div>
                </div><!-- END Subcat -->
            </div><!-- END dropdown container --></div><!-- END dropdown menu -->
            </div><!-- END Nav-left -->

            <div class="nav-right">
                <span class="nav-list">ThammaTrans</span>
                <?php
                            if(isset($_SESSION['email'])){
                                ?>
                                <a href="edit_user.php"><span class="nav-item nav-user"><i class="fas fa-user-circle nav-icon"></i>
                                    <span class="nav-hide-text">&nbsp;
                                        <?php echo $_SESSION['email']; ?>
                                    </span>
                                </span></a>
                                &nbsp;
                                <a href="logout.php"><span class="nav-item nav-user" style="height: 36px;">
                                
                                        Logout
                                        
                                </span></a>
                                <?php
                            } else {
                                ?>
                                <a href="login.php"><span class="nav-item nav-user"><i class="fas fa-user-circle nav-icon"></i>
                                    <span class="nav-hide-text">&nbsp;
                                        <?php echo 'Login / Sign up' ; ?>
                                    </span>
                                </span></a>
                                <?php
                            }
                        ?>

                <a href="search.php"><span class="nav-item nav-search"><i class="fas fa-search fa-lg"></i>
                    <span class="nav-hide-text">&nbsp; Search</span>
                </span></a>
            </div><!-- END Nav-right -->
        </div><!-- END container -->
    </div>
    <!-- END NAVBAR BOX -->