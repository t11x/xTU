<?php 

    echo $_GET['id'];

?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/store.css"/>
<div class="container">
    <!-- Store Head -->
    <div class="store-head">
        <img src="https://www.ryoiireview.com/upload/article/201710/1507716259_573c8d9bf6527ffd2e59b3f53398a7ee.jpg" alt="">
        <div class="store-title">Yang Noey 2</div>
        <div class="store-location-basic"><i class="fas fa-map-marker-alt"></i> Chiang Rak 2 Gate</div>
        <div class="store-category"><img src="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Food-Dome-512.png" alt="">Food</div>
    </div><!-- END Store head -->

    <div class="section-box promotion-box">
        <div class="section-box-head"><i class="fas fa-bell"></i> Promotions</div>
        <a href=""><img src="https://via.placeholder.com/500x200" alt=""></a>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eius voluptas beatae officiis pariatur, hic id nostrum deserunt ab veniam accusamus voluptatum aliquam aspernatur obcaecati, distinctio amet, omnis perspiciatis repellendus!</p>
        <a href="" class="store-button promotion-button"><i class="fas fa-plus"></i> Post promotions</a>
    </div><!-- END Promotion box -->

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
            <a href="tel:+6625555555"><i class="fas fa-phone"></i> Telephone</a>
            <a href="https://www.facebook.com"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="https://line.me/ti/p/~yourlineid"><i class="fab fa-line"></i> LINE</a>
            <a href="https://www.google.com"><i class="fas fa-globe"></i> Website</a>
        </p>
        <!-- More info -->
        <div class="section-box-head"><i class="fas fa-info-circle"></i> More info</div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum enim unde ad omnis vel eveniet, eos aut esse ut corrupti.</p>
        <a href="" class="store-button"><i class="far fa-edit"></i> Edit</a>
        <a href="" class="store-button"><i class="fas fa-user-tie"></i> Are you the owner?</a>
    </div><!-- END Detail box -->

    <div class="section-box photo-box">
        <div class="section-box-head"><i class="fas fa-images"></i> Photos & Videos</div>
        <div class="photo-container">
            <a href=""><img src="https://via.placeholder.com/150x150" alt=""></a>
            <a href=""><img src="https://via.placeholder.com/150x150" alt=""></a>
            <a href=""><img src="https://via.placeholder.com/150x150" alt=""></a>
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
        <table>
            <tr>
                <td rowspan="5" style="text-align:center"><div id="sum-rating">4.7</div>128 users</td>
                <td>5</td>
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
                <td><div class="rating-bar bar-1"></div></td>
            </tr>
        </table><!-- END Star -->

        <div class="review-container">
            <div class="review-box">
                <div class="review-title">Very good</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod debitis inventore, dolores, aut beatae praesentium ex consequuntur aliquid, numquam accusantium temporibus dignissimos et? Facilis harum aspernatur ducimus magnam, vitae veritatis.</p>
                <div class="reviewer-info">
                    <span class="reviewer-name">USER1</span><br>
                    01:27 18/11/2018
                </div>
                <a href="">Report abuse</a>
            </div><!-- END review box -->
            <div class="review-box">
                <div class="review-title">It's OK</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod debitis inventore, dolores, aut beatae praesentium ex consequuntur aliquid, numquam accusantium temporibus dignissimos et? Facilis harum aspernatur ducimus magnam, vitae veritatis.</p>
                <div class="reviewer-info">
                    <span class="reviewer-name">USER2</span><br>
                    01:35 18/11/2018
                </div>
                <a href="">Report abuse</a>
            </div><!-- END review box -->
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
    <script>
        function locationMap() {
            var locationPin = {lat: 14.0656428, lng: 100.6096677};
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
                title: 'Yang Noey 2',
                label: 'A'
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCeNTOtMkHpQ-yjDtCeVLIwWAM1OCo1JY&callback=locationMap"></script>
</div>