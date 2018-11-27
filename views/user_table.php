<?php 

    require '../connect.php';

    require './templates/header.php';
    $parts = explode("?", $_SERVER['REQUEST_URI']);   
    $current = $parts[0];
?>
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/table.css" />
    <div class="container" style="margin-top:100px;">
        <div class="ut-title">Edit Users</div>
        <table id="users">
            <tr>
                <th>UserID</th>
                <th>Username</th>
                <th>Type</th>
                <th>Own store</th>
                <th>Delete/Edit</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>001</td>
                <td>Konthon</td>
                <td>Admin</td>
                <td>-</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
                <td class="fullaccess"><i class="fas fa-circle"></i> Full Access</td>
            </tr>
            <tr>
                <td>002</td>
                <td>Jame</td>
                <td>User</td>
                <td>-</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
                <td class="normal"><i class="fas fa-circle"></i> Normal</td>
            </tr>
            <tr>
                <td>003</td>
                <td>Jane Doe</td>
                <td>Store owner</td>
                <td><a href="" target="_blank" class="store">Store1</a><a href="" target="_blank" class="store">Store2</a></td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
                <td class="normal"><i class="fas fa-circle"></i> Normal</td>
            </tr>
            <tr>
                <td>004</td>
                <td>John Doe</td>
                <td>User</td>
                <td>-</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a><a href="" class="wait"><i class="fas fa-check-circle"></i> Approve</a></td>
                <td class="wait"><i class="fas fa-circle"></i> Wait for approval</td>
            </tr>
            <tr>
                <td>005</td>
                <td>Ann</td>
                <td>User</td>
                <td>-</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
                <td class="normal"><i class="fas fa-circle"></i> Normal</td>
            </tr>
            <tr>
                <td>006</td>
                <td>user@mail.com</td>
                <td>User</td>
                <td>-</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
                <td class="normal"><i class="fas fa-circle"></i> Normal</td>
            </tr>
        </table>
    </div>
    <?php

require './templates/footer.php';
?>