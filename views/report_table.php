<?php 

    require '../connect.php';

    require './templates/header.php';
    $parts = explode("?", $_SERVER['REQUEST_URI']);   
    $current = $parts[0];
?>
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/table.css" />
    <div class="container" style="margin-top:100px;">
        <div class="ut-title">Reports and bugs</div>
        <table id="users">
            <tr>
                <th style="width:125px;">Time</th>
                <th>UserID</th>
                <th>StoreID</th>
                <th>Title</th>
                <th>Description</th>
                <th style="width:70px;">Delete</th>
            </tr>
            <tr>
                <td>25/11/2018 15:14</td>
                <td><a href="" target="_blank">001</a></td>
                <td><a href="" target="_blank">001</a></td>
                <td>Impropered photos </td>
                <td>-</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
            </tr>
            <tr>
                <td>25/11/2018 15:14</td>
                <td><a href="" target="_blank">4654</a></td>
                <td><a href="" target="_blank">765</a></td>
                <td>this store is bad</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nostrum, minus delectus error vitae esse quaerat similique facilis dignissimos, suscipit, deserunt minima voluptates ipsum maiores incidunt! Quam aperiam quas sapiente!</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
            </tr>
            <tr>
                <td>25/11/2018 15:14</td>
                <td><a href="" target="_blank">435</a></td>
                <td><a href="" target="_blank">145</a></td>
                <td>Hello</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, amet?</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
            </tr>
            <tr>
                <td>25/11/2018 15:14</td>
                <td><a href="" target="_blank">234</a></td>
                <td><a href="" target="_blank">2356</a></td>
                <td>Dear admin</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor accusamus provident at soluta dolorum expedita nemo nesciunt maiores. Dignissimos, possimus!</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
            </tr>
            <tr>
                <td>25/11/2018 15:14</td>
                <td><a href="" target="_blank">45645</a></td>
                <td><a href="" target="_blank">2132</a></td>
                <td>Complain</td>
                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, iusto officiis aliquam sunt esse a nemo repudiandae molestias vitae odit, labore porro nostrum ad libero at enim iste praesentium non.</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
            </tr>
            <tr>
                <td>25/11/2018 15:14</td>
                <td><a href="" target="_blank">6534</a></td>
                <td><a href="" target="_blank">006</a></td>
                <td>-</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim perferendis laborum laboriosam illo molestiae libero, illum blanditiis dolores eligendi, cupiditate aut saepe. Adipisci repudiandae excepturi pariatur tempore, porro cupiditate rem.</td>
                <td><a href="" class="delete"><i class="fas fa-trash-alt"></i> Delete</a></td>
            </tr>
        </table>
    </div>
    <?php

require './templates/footer.php';
?>