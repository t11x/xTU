<?php 

    require '../connect.php';

    require './templates/header.php';
    $parts = explode("?", $_SERVER['REQUEST_URI']);   
    $current = $parts[0];
?>
<link rel="stylesheet" href="../assets/css/additem.css" />
<div class="container">
    <div class="ap-head-img"><img src="http://www.tu.ac.th/uploads/_tu_img/home/domerangsit.jpg" alt="">
        <div class="ap-title">Add a New Store</div></div>

        <form action="/add.html" method="get">
            <br>
            <input type="text" name="s_name"
            placeholder="Store name" class="ap-text-box ap-text-bold" size="35" required><br><br>
            
            <!-- LOCATION -->
            <div class="ap-box">
            <div class="ap-head"><i class="fas fa-map-marker-alt"></i> Location</div>
            <strong>Basic location: </strong>
            <input type="text" name="s_basic_location"
            placeholder="e.g. Chiang Rak 1 Gate" class="ap-text-box" size="35" required> <span class="required-txt">*required</span><br>

            <strong>Map location: </strong>
            <input type="text" name="s_location"
            placeholder="e.g. 14.068937,100.607438" class="ap-text-box" size="35"><br>
            <div id="googleMap"></div>
            </div><!-- END Location Box -->

            <!-- CATEGORY -->
            <br>
            <div class="ap-box">
            <div class="ap-head"><i class="fas fa-swatchbook"></i> Category</div>
            <input list="categories" name="category" class="ap-text-box" placeholder="Select a category or add a new one" size="40" required>
            <datalist id="categories">
                <option value="Food">
                <option value="Cafe">
                <option value="Drink">
                <option value="Stall">
                <option value="7-11">
                <option value="Family Mart">
                <option value="Lawson">
                <option value="Other convenience store">
                <option value="Laudry">
                <option value="Uncategory">
            </datalist>
            <span class="required-txt">*required</span>
            </div>

            <!-- PHOTOS -->
            <br>
            <div class="ap-box">
            <div class="ap-head"><i class="fas fa-images"></i> Photos & Videos</div>
            <input type="file" name="photos" accept="image/*, video/*" multiple><br><br>
            <!-- Show Photos -->
            <?php for ($i = 1; $i <= 4; $i++){?>
            <div class="ap-img-container">
                <img src="https://via.placeholder.com/150x150" alt="">
                <a href=""><i class="fas fa-times-circle"></i></a>
            </div>
            <?php } ?>
            </div>
            
            <!-- CONTACT -->
            <br>
            <div class="ap-box">
            <div class="ap-head"><i class="fas fa-address-book"></i> Contact</div>
            <table>
                <tr>
                    <td><i class="fas fa-phone"></i> Telephone</td>
                    <td><input type="tel" name="tel" class="ap-text-box" placeholder="02-XXX-XXXX"></td>
                </tr>
                <tr>
                    <td><i class="fab fa-facebook"></i> Facebook</td>
                    <td><input type="url" name="fb" class="ap-text-box" placeholder="Page URL"></td>
                </tr>
                <tr>
                    <td><i class="fab fa-line"></i> LINE ID</td>
                    <td><input type="text" name="line" class="ap-text-box" placeholder="LINE-ID"></td>
                </tr>
                <tr>
                    <td><i class="fas fa-globe"></i> Website</td>
                    <td><input type="url" name="fb" class="ap-text-box" placeholder="www.example.com"></td>
                </tr>
            </table>
            </div>

            <br>
            <div class="ap-box">
            <div class="ap-head"><i class="fas fa-clock"></i> Time</div>
            <div class="ap-time-box">
            <label><input type="radio" name="s_day" value="Everyday" id="evd" class="s-day" checked> Everyday</label>
            <label><input type="radio" name="s_day" value="Weekdays" id="wkd" class="s-day"> Weekdays</label>
            <label><input type="radio" name="s_day" value="Weekends" id="wke" class="s-day"> Weekends</label>
            <label><input type="radio" name="s_day" value="Exception" id="eve" class="s-day"> Everyday <strong>except one day</strong></label>
            <label><input type="radio" name="s_day" value="Custom" id="cus" class="s-day"> Custom</label>

            <br>

            <?php
            // Make TIME SELECT
            // $hour_l = '<select name="hours" id="">';
            // for ($hour = 0; $hour <= 24; $hour++) {
            //     if ($hour < 10) {$hour = "0".$hour;}
            //     $hour_l = $hour_l."<option value=".$hour.">".$hour."</option>";}
            // $hour_l = $hour_l.'</select> : ';
            // $min_l = '<select name="mins" id="">';
            // for ($min = 0; $min <= 59; $min+=5) {
            //     if ($min < 10) {$min = "0".$min;}
            //     $min_l = $min_l."<option value=".$min.">".$min."</option><br>";}
            // $min_l = $min_l."</select>";?>

            <?php
            // Make TIME SELECT V2
            $time_i = '
            <input type="number" name="h" min="0" max="24" placeholder="H" class="ap-hour"> : 
            <input type="number" name="m" min="0" max="59" placeholder="M" class="ap-min">';
            ?>

            <?php
            $date = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
            $d = array("sun","mon","tue","wed","thu","fri","sat");
            ?>

            <!-- Everyday, Weekdays, Weekends -->
            <div id="ap_day_panel" class="normal-time">
                Open <input type="number" name="h" min="0" max="24" placeholder="H" class="ap-hour"> : 
                <input type="number" name="m" min="0" max="59" placeholder="M" class="ap-min"> 
                Close <input type="number" name="h" min="0" max="24" placeholder="H" class="ap-hour"> : 
                <input type="number" name="m" min="0" max="59" placeholder="M" class="ap-min">
            </div>

            <!-- Exception -->
            <div id="ap_exception_panel" class="except-time">
                <table class="ap-dex">
                    <tr>
                        <th colspan="2">Normal day: </th><td>
                Open <input type="number" name="h" min="0" max="24" placeholder="H" class="ap-hour"> : 
                <input type="number" name="m" min="0" max="59" placeholder="M" class="ap-min">
                Close <input type="number" name="h" min="0" max="24" placeholder="H" class="ap-hour"> : 
                <input type="number" name="m" min="0" max="59" placeholder="M" class="ap-min"></td>
                    </tr>

                    <tr style="vertical-align:top;">
                <th>Except: </th><td>
                <input list="ex-day" name="except">
                <datalist id="ex-day">
                    <?php
                    for ($i = 0; $i < 7; $i++){
                        echo '<option value="'.$date[$i].'">';
                    }
                    ?>
                </datalist>
                <label style="display:block"><input type="checkbox" name="op" value="Closed">Closed</label>
                </td><td>
                Open <input type="number" name="h" min="0" max="24" placeholder="H" class="ap-hour"> : 
                <input type="number" name="m" min="0" max="59" placeholder="M" class="ap-min">
                Close <input type="number" name="h" min="0" max="24" placeholder="H" class="ap-hour"> : 
                <input type="number" name="m" min="0" max="59" placeholder="M" class="ap-min"></td>
                    </tr>
                </table>
            </div>


            <!-- Custom -->
            <table id="ap_custom_panel" class="ap-time-table">
                <?php
                for ($c_date = 0; $c_date < count($date); $c_date++){
                echo "<tr>";
                    echo '<th><label><input type="checkbox" name="s_date" value="'.$d[$c_date].'"> '.$date[$c_date].'</label></th>';
                    // Open
                    //echo "<td>".$hour_l.$min_l."</td>";
                    echo "<td >".$time_i."</td>";
                    // Close
                    //echo "<td> – ".$hour_l.$min_l."</td>";
                    echo "<td > – ".$time_i."</td>";
                echo "</tr>";}?>
            </table><!-- END time table -->

            </div><!-- END ap-time-box -->
            </div>
            
            <!-- MORE INFO -->
            <br>
            <div class="ap-box">
            <div class="ap-head">More information</div>
            <textarea name="description" id="ap-more-info" cols="50" rows="7" placeholder="Describe here..."></textarea>
            </div>
            
            <br>
            <input type="submit" value="Add the store" class="ap-button">
            <input type="reset" value="Clear all" class="ap-button ap-clear-button">
        </form>
        <br>
    </div>
</body>
<script>
    document.getElementById('evd').addEventListener('click', function(){
        document.getElementById('ap_day_panel').style.display = "block"
        document.getElementById('ap_exception_panel').style.display = "none"
        document.getElementById('ap_custom_panel').style.display = "none"
    })
    document.getElementById('wkd').addEventListener('click', function(){
        document.getElementById('ap_day_panel').style.display = "block"
        document.getElementById('ap_exception_panel').style.display = "none"
        document.getElementById('ap_custom_panel').style.display = "none"
    })
    document.getElementById('wke').addEventListener('click', function(){
        document.getElementById('ap_day_panel').style.display = "block"
        document.getElementById('ap_exception_panel').style.display = "none"
        document.getElementById('ap_custom_panel').style.display = "none"
    })
    document.getElementById('eve').addEventListener('click', function(){
        document.getElementById('ap_day_panel').style.display = "none"
        document.getElementById('ap_exception_panel').style.display = "block"
        document.getElementById('ap_custom_panel').style.display = "none"
    })
    document.getElementById('cus').addEventListener('click', function(){
        document.getElementById('ap_day_panel').style.display = "none"
        document.getElementById('ap_exception_panel').style.display = "none"
        document.getElementById('ap_custom_panel').style.display = "block"
    })
</script>

<script> //GOOGLE MAPS
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
