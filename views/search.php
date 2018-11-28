<?php 

    require '../connect.php';

    require './templates/header.php';
    $parts = explode("?", $_SERVER['REQUEST_URI']);   
    $current = $parts[0];
?>

<link rel="stylesheet" href="../assets/css/search.css" />
<div class="container move-down">
        <input onkeyup="searchInput(event)" id="searchInput" type="text" id="search" name="search" placeholder="Search a store...">
        <a id="searchLink" href=""> <button id="query"> <i class="fas fa-search"></i> Search</button></a>
        <button id="alert"><i class="fas fa-times"></i></button>
    </form>
</div>
<div class="container">
    
    <div class="query-head">Most view</div>

    <?php 
        $sql = "SELECT * from store";
        if(isset($_GET['category'])){
            $sql = $sql." WHERE storeType=$_GET[category]";
        }
        if(isset($_GET['search'])){
            $sql = $sql." WHERE name LIKE '%$_GET[search]%'";
        }
        
        $result= $con->query($sql);

      while($row = $result->fetch_assoc()){
          $sql_img = "SELECT photo from photos where storeID = $row[storeID]";
          $result_img = $con->query($sql_img);
          $row_img = $result_img->fetch_assoc();
    
          $sql_rating = "SELECT AVG(rating) AS rating FROM review WHERE storeID=$row[storeID]";
          $result_rating = $con->query($sql_rating);
          $row_rating = $result_rating->fetch_assoc();
          $rating = round($row_rating['rating'], 1);
        ?>
            <!-- ITEM -->
            <a href="store.php?id=<?php echo $row['storeID'] ?>">
            <div class="query-card" style="display: block;">
                <!-- item image -->
                <div class="query-img-box"><img class="query-img" src="<?php echo $row_img['photo']; ?>" alt=""></div>
                <!-- item category -->
                <!-- <div class="query-category">
                    <img class="query-category-img" src="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Food-Dome-512.png" alt="food">Food
                </div> -->
                <!-- item description -->
                <!-- <span class="operate-box" style="background-color:red">CLOSED</span> -->
                <span class="query-name-place"><?php echo $row['name']; ?></span>
                <p><?php echo $row['description']; ?> 
                <!-- <a class="more" href="#">more...</a> -->
                </p>
                <!-- item special -->
                <div class="item-special-box">
                <span class="rating-star"><i class="fas fa-star"></i><?php echo $rating; ?></span></div>
            </div></a><!-- End-ITEM -->
        <?php 
      }
    
    ?>



</div>​
</div>

<script>
    function searchInput(event){
        // alert(event.target.value)
        document.getElementById('searchLink').href = "<?php echo $current ?>?search="+event.target.value
    }
</script>
<?php

    require './templates/footer.php';
?>