<?php 

    require '../connect.php';

    require './templates/header.php';
    $parts = explode("?", $_SERVER['REQUEST_URI']);   
    $current = $parts[0];
?>
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/table.css" />
    <div class="container" style="margin-top:100px;">
        <div class="ut-title">Edit Stores</div>
        <table id="users">
            <tr>
                <th>StoreID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Store Owner</th>
                <th>Delete</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>001</td>
                <td><a href="" target="_blank">Store1</a></td>
                <td>Food</td>
                <td>-</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
                <td class="normal"><i class="fas fa-circle"></i> Normal</td>
            </tr>
            <tr>
                <td>002</td>
                <td><a href="" target="_blank">Store2 Asodcmsdc</a></td>
                <td>Food</td>
                <td>-</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
                <td class="normal"><i class="fas fa-circle"></i> Normal</td>
            </tr>
            <tr>
                <td>003</td>
                <td><a href="" target="_blank">Soedcmkl sdcsm</a></td>
                <td>Cafe</td>
                <td><a href="" target="_blank" class="owner">John Doe</a></td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
                <td class="normal"><i class="fas fa-circle"></i> Normal</td>
            </tr>
            <tr>
                <td>004</td>
                <td><a href="" target="_blank">7-11</a></td>
                <td>Convenience Store</td>
                <td>-</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a><a href="" class="wait"><i class="fas fa-clipboard-check"></i> View reports</a></td>
                <td class="wait"><i class="fas fa-circle"></i> Wait for respond</td>
            </tr>
            <tr>
                <td>005</td>
                <td><a href="" target="_blank">แอนข้าวมันไก่</a></td>
                <td>Food</td>
                <td>-</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
                <td class="normal"><i class="fas fa-circle"></i> Normal</td>
            </tr>
            <tr>
                <td>006</td>
                <td><a href="" target="_blank">ไก่ว้าว</a></td>
                <td>Stall</td>
                <td>-</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
                <td class="normal"><i class="fas fa-circle"></i> Normal</td>
            </tr>
        </table>
    </div>
    <?php

require './templates/footer.php';
?>