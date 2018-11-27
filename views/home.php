    <!-- Carousel -->
    <!-- <div class="carouselbox">
        <img src='https://f.ptcdn.info/645/047/000/ohl4zjyn4DbiuAARqzW-o.jpg' alt='somtum' class='centerphoto'>
        <div class="photodescription">
            <h4>ส้มตำร้านลุงป้า</h4>
            ที่อยู่: หน้าหอ VKP แมนชั่น<br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus beatae nam eius molestias nesciunt.
        </div>
    </div> -->
    <!--  Kon -->
    <div class="carousel">
        <div class="carousel-box">
            <img class="carousel-image" src="https://www.ryoiireview.com/upload/article/201703/1490086420_6f23487b6525f7b2dc3fdb16620dbae5.jpg" alt="ย่างเนย" />
        </div>
        <div class="carousel-box">
            <img class="carousel-image" src="http://www.tu.ac.th/uploads/_tu_img/home/domerangsit.jpg" alt="TU" />
        </div>
        <div class="carousel-box">
            <img class="carousel-image" src="https://f.ptcdn.info/645/047/000/ohl4zjyn4DbiuAARqzW-o.jpg" alt="ส้มตำ" />
        </div>
        <div class="carousel-box">
            <img class="carousel-image" src="https://img.wongnai.com/p/1920x0/2016/07/04/887148ed96434c79bcc2faa51dc73efc.jpg" alt="TU" />
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Shortcuts -->
    <div class="container card-align">
    <a href="<?php echo "views/search.php?category=1"; ?>">
    <div class="card">
        <img class="cardicon" src="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Food-Dome-512.png" alt="food">
        <div class="carddescription">
            Food
        </div>
    </div>
    </a>
    <a href="<?php echo "views/search.php?category=2"; ?>">
    <div class="card">
        <img class="cardicon" src="https://balithisweek.com/wp-content/uploads/2016/10/btw-icon-cafe.png" alt="Cafe">
        <div class="carddescription">
            Café
        </div>
    </div>
    </a>
    <a href="<?php echo "views/search.php?category=3"; ?>">
    <div class="card">
        <img class="cardicon" src="https://image.flaticon.com/icons/svg/227/227310.svg" alt="Store">
        <div class="carddescription">
            Store
        </div>
    </div>
    </a>
    <a href="<?php echo "views/search.php?category=4"; ?>">
    <div class="card">
        <img class="cardicon" src="https://image.flaticon.com/icons/svg/1048/1048380.svg" alt="Phamacy">
        <div class="carddescription">
            Pharmacy
        </div>
    </div>
    </a>
    <a href="<?php echo "views/search.php?category=5"; ?>">
    <div class="card">
        <img class="cardicon" src="https://png.pngtree.com/svg/20161203/others_906370.png" alt="Others">
        <div class="carddescription">
            Others
        </div>
    </div>
    </div>
    </a>
    <!-- Shortcuts End -->


    <div class="container">

        <!-- Alert Promotion -->
        <div class="alert">
            <span class="alert-closebtn" onclick="this.parentElement.style.display='none';"><i class="fas fa-times"></i></span> 
            <strong>ย่างเนย</strong> มา 4 จ่าย 3 เฉพาะวันนี้เท่านั้น!&nbsp;&nbsp;<a href="#" class="more">more...</a>
        </div><!-- End Alert Promotion -->

        <!-- Nearby You -->
        <div class="head-part">NEARBY YOU</div>
        <div class="long-box">
            <div class="head-sub"><i class="fas fa-utensils"></i> Food</div>
            <div class="place-card-align">
            <?php 
                $sql = "SELECT * FROM store WHERE storeType =1 and approve =1 LIMIT 4";
                $result = $con->query($sql);
                if(!$result){
                    $con->error;
                }
                while ($row = $result->fetch_assoc()){
                    $sql_image = "SELECT photo FROM photos WHERE storeID=$row[storeID]";
                    $result_image = $con->query($sql_image);
                    $row_image = $result_image->fetch_assoc();

                    $sql_rating = "SELECT AVG(rating) AS rating FROM review WHERE storeID=$row[storeID]";
                    $result_rating = $con->query($sql_rating);
                    $row_rating = $result_rating->fetch_assoc();
                    $rating = round($row_rating['rating'], 1);
                    ?>
                    <div class="place-card"><a href="./views/store.php?id=<?php echo $row['storeID']; ?>">
                    <div class="place-card-pic-box"><span class="rating-star rating-on-pic"><i class="fas fa-star"></i> <?php echo $rating ?></span><img class="place-card-pic"  src="<?php echo $row_image['photo']; ?> " alt="<?php echo $row['name']; ?>"></div>
                    <div class="place-card-description">
                    <div class="head-sub"><?php echo $row['name']; ?> 
                    <!-- <span class="operate-box">OPEN</span>  -->
                    </div>
                    <?php echo $row['description']; ?> 
                    </div></a>
                    </div>
                    <?php
                    }?>
            </div> <!-- place-card-align end -->
        </div> <!-- long-box end -->

         <div class="long-box">
            <div class="head-sub"><i class="fas fa-coffee"></i> Café</div>
            <div class="place-card-align">
            <?php 
                $sql = "SELECT * FROM store WHERE storeType=2 and approve =1 LIMIT 4";
                $result = $con->query($sql);
                if(!$result){
                    $con->error;
                }
                while ($row = $result->fetch_assoc()){
                    $sql_image = "SELECT photo FROM photos WHERE storeID=$row[storeID]";
                    $result_image = $con->query($sql_image);
                    $row_image = $result_image->fetch_assoc();

                    $sql_rating = "SELECT AVG(rating) AS rating FROM review WHERE storeID=$row[storeID]";
                    $result_rating = $con->query($sql_rating);
                    $row_rating = $result_rating->fetch_assoc();
                    $rating = round($row_rating['rating'], 1);
                    ?>
                    <div class="place-card"><a href="./views/store.php?id=<?php echo $row['storeID'] ?>">
                    <div class="place-card-pic-box"><span class="rating-star rating-on-pic"><i class="fas fa-star"></i> <?php echo $rating ?></span><img class="place-card-pic"  src="<?php echo $row_image['photo']; ?> " alt="<?php echo $row['name']; ?> "></div>
                    <div class="place-card-description">
                    <div class="head-sub"><?php echo $row['name']; ?> 
                    <!-- <span class="operate-box">OPEN</span>  -->
                    </div>
                    <?php echo $row['description']; ?> 
                    </div></a>
                    </div>
                    <?php
                    }?>
            </div> <!-- place-card-align end -->
        </div> <!-- long-box end -->

        <div class="long-box">
            <div class="head-sub"><i class="fas fa-store"></i> Store</div>
            <div class="place-card-align">
            <?php 
                $sql = "SELECT * FROM store WHERE storeType=3 and approve =1 LIMIT 4";
                $result = $con->query($sql);
                if(!$result){
                    $con->error;
                }
                while ($row = $result->fetch_assoc()){
                    $sql_image = "SELECT photo FROM photos WHERE storeID=$row[storeID]";
                    $result_image = $con->query($sql_image);
                    $row_image = $result_image->fetch_assoc();

                    $sql_rating = "SELECT AVG(rating) AS rating FROM review WHERE storeID=$row[storeID]";
                    $result_rating = $con->query($sql_rating);
                    $row_rating = $result_rating->fetch_assoc();
                    $rating = round($row_rating['rating'], 1);
                    ?>
                    <div class="place-card"><a href="./views/store.php?id=<?php echo $row['storeID'] ?>">
                    <div class="place-card-pic-box"><span class="rating-star rating-on-pic"><i class="fas fa-star"></i> <?php echo $rating ?></span><img class="place-card-pic"  src="<?php echo $row_image['photo']; ?> " alt="<?php echo $row['name']; ?> "></div>
                    <div class="place-card-description">
                    <div class="head-sub"><?php echo $row['name']; ?> 
                    <!-- <span class="operate-box">OPEN</span>  -->
                    </div>
                    <?php echo $row['description']; ?> 
                    </div></a>
                    </div>
                    <?php
                    }?>
            </div> <!-- place-card-align end -->
        </div> <!-- long-box end -->

        <div class="long-box">
            <div class="head-sub"><i class="fas fa-store"></i>Pharmacy</div>
            <div class="place-card-align">
            <?php 
                $sql = "SELECT * FROM store WHERE storeType=4 and approve =1 LIMIT 4";
                $result = $con->query($sql);
                if(!$result){
                    $con->error;
                }
                while ($row = $result->fetch_assoc()){
                    $sql_image = "SELECT photo FROM photos WHERE storeID=$row[storeID]";
                    $result_image = $con->query($sql_image);
                    $row_image = $result_image->fetch_assoc();

                    $sql_rating = "SELECT AVG(rating) AS rating FROM review WHERE storeID=$row[storeID]";
                    $result_rating = $con->query($sql_rating);
                    $row_rating = $result_rating->fetch_assoc();
                    $rating = round($row_rating['rating'], 1);
                    ?>
                    <div class="place-card"><a href="./views/store.php?id=<?php echo $row['storeID'] ?>">
                    <div class="place-card-pic-box"><span class="rating-star rating-on-pic"><i class="fas fa-star"></i> <?php echo $rating ?></span><img class="place-card-pic"  src="<?php echo $row_image['photo']; ?> " alt="<?php echo $row['name']; ?> "></div>
                    <div class="place-card-description">
                    <div class="head-sub"><?php echo $row['name']; ?> 
                    <!-- <span class="operate-box">OPEN</span>  -->
                    </div>
                    <?php echo $row['description']; ?> 
                    </div></a>
                    </div>
                    <?php
                    }?>
            </div> <!-- place-card-align end -->
        </div> 

        <div class="long-box">
            <div class="head-sub"><i class="fas fa-store"></i> Others</div>
            <div class="place-card-align">
            <?php 
                $sql = "SELECT * FROM store WHERE storeType=5 and approve =1 LIMIT 4";
                $result = $con->query($sql);
                if(!$result){
                    $con->error;
                }
                while ($row = $result->fetch_assoc()){
                    $sql_image = "SELECT photo FROM photos WHERE storeID=$row[storeID]";
                    $result_image = $con->query($sql_image);
                    $row_image = $result_image->fetch_assoc();

                    $sql_rating = "SELECT AVG(rating) AS rating FROM review WHERE storeID=$row[storeID]";
                    $result_rating = $con->query($sql_rating);
                    $row_rating = $result_rating->fetch_assoc();
                    $rating = round($row_rating['rating'], 1);
                    ?>
                    <div class="place-card"><a href="./views/store.php?id=<?php echo $row['storeID'] ?>">
                    <div class="place-card-pic-box"><span class="rating-star rating-on-pic"><i class="fas fa-star"></i> <?php echo $rating ?></span><img class="place-card-pic"  src="<?php echo $row_image['photo']; ?> " alt="<?php echo $row['name']; ?> "></div>
                    <div class="place-card-description">
                    <div class="head-sub"><?php echo $row['name']; ?> 
                    <!-- <span class="operate-box">OPEN</span>  -->
                    </div>
                    <?php echo $row['description']; ?> 
                    </div></a>
                    </div>
                    <?php
                    }?>
            </div> <!-- place-card-align end -->
        </div> 

                

        



    </div>

    <!-- ADD BUTTON -->
    
    <a href="views/additem.php"><span class="xadd-button"><i class="fa fa-plus fa-3x"></i>
    <span class="tooltiptext">Add a store</span></span></a>

      
    <script>
        $(document).ready(function(){
            $('.carousel').slick({
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true
            });
        });
    </script>
    </div> <!-- container end -->
