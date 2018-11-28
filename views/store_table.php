<?php 

    require '../connect.php';

    require './templates/header.php';
    $parts = explode("?", $_SERVER['REQUEST_URI']);   
    $current = $parts[0];
    if(!isset($_SESSION['email']) || !isset($_SESSION['userType'])){
        header('Location: ../index.php');
    }
?>
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/table.css" />
    <div class="container" style="margin-top:100px;">
        <div class="ut-title">Approve/Edit Stores</div>
        <table id="users">
            <tr>
                <th>StoreID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Store Owner</th>
                <th>Delete</th>
                <th>Status</th>
            </tr>
            <?php 
            $sql = "SELECT * from store";
            $result = $con->query($sql);
            if(!$result){
                $con->error;
            }
            while ($row = $result->fetch_assoc()){
                $sql_type = "SELECT * from storeType WHERE storeTypeID = $row[storeType]";
                $result_type = $con->query($sql_type);
                $row_type = $result_type->fetch_assoc();
                ?>
                <tr>
                    <td><?php echo $row['storeID'];?></td>
                    <td><a href="store.php?id=<?php echo $row['storeID']?>"><?php echo $row['name'];?></a></td>
                    <td><?php echo $row_type['storeType'];?></td>
                    <td>-</td>
                    <td>
                        <a href="deletestore.php?id=<?php echo $row['storeID'] ?>" class="delete"><i class="fas fa-trash-alt"></i> Delete</a>
                        <?php if($row['approve']==0) { ?><a href="approvestore.php?id=<?php echo $row['storeID'] ?>" class="wait"><i class="fas fa-check-circle"></i> Approve</a><?php } ?>
                    </td>
                    <?php if($row['approve']==1) { ?><td class="normal"><i class="fas fa-circle"></i> Normal</td><?php } ?>
                    <?php if($row['approve']==0) { ?><td class="wait"><i class="fas fa-circle"></i> Wait for approval</td><?php } ?>
                </tr>
                <?php
            }
            ?>

        </table>
    </div>
    <?php

require './templates/footer.php';
?>