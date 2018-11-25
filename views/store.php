<?php 
    echo $_GET['id'];
    require '../connect.php';
    require './templates/header.php';

    $sql = "SELECT * FROM store WHERE storeID = $_GET[id]";
                $result = $con->query($sql);
                if(!$result){
                    $con->error;
                }
                $row = $result->fetch_assoc();

    $sql_img = "SELECT photo FROM photos WHERE storeID = $_GET[id]";
    $result_img = $con->query($sql_img);
    if(!$result_img){
        $con->error;
    }
    $row_img = $result_img->fetch_assoc()
?>

<link rel="stylesheet" href="../assets/css/store.css"/>
<div class="container">
    <!-- Store Head -->
    <div class="store-head">
        <img src="<?php echo $row_img[photo];?>" alt="">
        <div class="store-title"><?php echo $row['name']; ?></div>
        <div class="store-location-basic"><i style="margin-right:10px;" class="fas fa-map-marker-alt"></i><?php echo $row['shortloc']; ?></div>
        <div class="store-category"><img src="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Food-Dome-512.png" alt="">Food</div>
    </div><!-- END Store head -->
    <?php
    $sql_promo = "SELECT * FROM promotion WHERE storeID = $_GET[id]";
    $result_promo = $con->query($sql_promo);
    $count_promo = mysqli_num_rows($result_promo);
    if($count_promo>0){
        $row_promo = $result_promo->fetch_assoc()
        ?>
    <div class="section-box promotion-box">
        <div class="section-box-head"><i class="fas fa-bell"></i> Promotions</div>
        <p><?php echo $row_promo['promotionName']; ?></p>
        <p><?php echo $row_promo['promotionDescription']; ?></p>
        <a href="" class="store-button promotion-button"><i class="fas fa-plus"></i> Post promotions</a>
    </div><!-- END Promotion box -->
    <?php } ?>

    <div class="section-box detail-box">
        <!-- Hours -->
        <div class="section-box-head"><i class="fas fa-clock"></i> Hours</div>
        <p>
        <table>
            <tr>
                <td>Monday - Thursday</td>
                <td>17:00 - 00:00</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td class="alert-red">Closed</td>
            </tr>
            <tr>
                <td>Saturday - Sunday</td>
                <td>16:00 - 00:00</td>
            </tr>
        </table>
        </p>
        <!-- Contact -->
        <div class="section-box-head"><i class="fas fa-external-link-alt"></i> Contact</div>
        <p class="contact-align">
            <a href="<?php echo $row['phone']; ?>"><i class="fas fa-phone"></i> <?php echo $row['phone']; ?></a>
            <a href="<?php echo $row['facebook']; ?>"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="<?php echo $row['line']; ?>"><i class="fab fa-line"></i> LINE</a>
            <a href="<?php echo $row['site']; ?>"><i class="fas fa-globe"></i> Website</a>
        </p>
        <!-- More info -->
        <div class="section-box-head"><i class="fas fa-info-circle"></i> More info</div>
        <p><?php echo $row['descriptino']; ?></p>
        <a href="" class="store-button"><i class="far fa-edit"></i> Edit</a>
        <a href="" class="store-button"><i class="fas fa-user-tie"></i> Are you the owner?</a>
    </div><!-- END Detail box -->



    <div class="section-box photo-box">
        <div class="section-box-head"><i class="fas fa-images"></i> Photos & Videos</div>
        <div class="photo-container">
        <?php 
        $sql_img = "SELECT photo FROM photos WHERE storeID = $_GET[id]";
        $result_img = $con->query($sql_img);
        if(!$result_img){
            $con->error;
        }
        while ($row_img = $result_img->fetch_assoc()){
        ?>
            <a href=""><img src="<?php echo $row_img[photo]; ?>" alt=""></a>

        <?php } ?>
        </div>
        <a href="" class="store-button report-button"><i class="fas fa-exclamation-triangle"></i> Report photos</a>
        <a href="" class="store-button"><i class="fas fa-plus"></i> Add more photos</a>
    </div><!-- END Photo box -->

    

    <div class="section-box location-box">
        <div class="section-box-head"><i class="fas fa-map-marked-alt"></i> Location</div>
        <div id="googleMap"></div>
        <a href="" class="store-button report-button"><i class="fas fa-bug"></i> Report location</a>
        <a href="" class="store-button map-button"><i class="fas fa-compass"></i> Get direction</a>
    </div><!-- END Google Map box -->

    <div class="section-box rating-box">
        <div class="section-box-head"><i class="fas fa-pen-nib"></i> Rating & Reviews</div>
        <?php
        $sql_ratingcount = "SELECT AVG(rating) AS rating FROM review WHERE storeID=$row[storeID]";
                    $result_ratingcount = $con->query($sql_ratingcount);
                    $row_ratingcount = $result_ratingcount->fetch_assoc();
                    $rating = round($row_ratingcount['rating'], 1);
            
        $sql_rating = "SELECT * FROM review, user WHERE storeID = $_GET[id] AND review.userID = user.userID ";
        $result_rating = $con->query($sql_rating);
        $count_rating = mysqli_num_rows($result_rating);
    
        ?>
        <table>
            <tr>
                <td rowspan="5" style="text-align:center"><div id="sum-rating"><?php echo $rating ?></div><?php echo $count_rating ?> users</td>
                <!-- <td>5</td>
                <td><div class="rating-bar bar-5"></div></td>
            </tr>
            <tr>
                <td>4</td>
                <td><div class="rating-bar bar-4"></div></td>
            </tr>
            <tr>
                <td>3</td>
                <td><div class="rating-bar bar-3"></div></td>
            </tr>
            <tr>
                <td>2</td>
                <td><div class="rating-bar bar-2"></div></td>
            </tr>
            <tr>
                <td>1</td>
                <td><div class="rating-bar bar-1"></div></td> -->
            </tr>
        </table><!-- END Star -->

        <div class="review-container">
            <div class="review-box">
                <?php
                while($row_rating = $result_rating->fetch_assoc()){
                ?>
                <div class="review-title"><?php echo $row_rating['reviewTitle']; ?></div>
                <p><?php echo $row_rating['review']; ?></p>
                <div class="reviewer-info">
                    <span class="reviewer-name"><?php echo $row_rating['email']; ?></span><br>
                    <?php echo $row_rating['email']; ?>
                </div>
                <a href="">Report abuse</a>
            </div><!-- END review box -->
               <?php } ?>
        </div>
        <div class="reviewee">
            <form action="/userprofile.php" method="POST">
                
                <div class="section-box-head">Write your own review and/or rate the store.</div><br>
                <input type="hidden" name="user_id">
                <input type="text" name="title" placeholder="Title" class="review-input"><br>
                <textarea name="description" placeholder="Description..." class="review-input"></textarea><br>
                <input type="submit" value="Send" class="store-button">
                <select class="select-star">
                    <option value="">Select a star</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </form>
        </div>
    </div><!-- END Rating and reviews -->


    <!-- GOOGLE MAPS -->
    <?php
     $sql_loc = "SELECT * FROM location WHERE storeID = $_GET[id]";
     $result_loc = $con->query($sql_loc);
     if(!$result_loc){
         $con->error;
     }
     $row_loc = $result_loc->fetch_assoc() 
    ?>
    <script>
        function locationMap() {
            var locationPin = {lat: <?php echo $row_loc['latitude']; ?>, lng: <?php echo $row_loc['longitude']; ?>};
            // Set location & Zoom
            var mapProp = {
                center: locationPin,
                zoom: 19,
            };
            // Get a map element
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

            var marker = new google.maps.Marker({
                position: locationPin,
                map: map,
                title: '<?php echo $row['name']; ?>',
                label: 'A'
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCeNTOtMkHpQ-yjDtCeVLIwWAM1OCo1JY&callback=locationMap"></script>
</div>

<?php

require './templates/footer.php';
?>