<?php session_start();?>

<html>

<head>
    <title> </title>
    <link rel="stylesheet" href="./src/css/admin.css" />

    <!-- icons -->

    <script src="https://kit.fontawesome.com/5f4515a83f.js" crossorigin="anonymous"></script>

    <!-- js -->

    <script src="./src/java script/script.js"></script>

</head>

<body>
    <div class="header">
        <script src="./src/java script/script.js"></script>
        <h1 id="dash">CEYLONE SAFARI - ADD NEW ITEMS</h1>
        <button class="btn btn-logout" onclick="adminLogout()" id="adminlogout">LOG OUT</button>
        <!-- <button class="btn btn-list" onclick="adminItem()">ITEMS</button> -->
        <!-- <button class="btn btn-add" onclick="adminAddItem()">ADD ITEMS</button> -->
        <?php
echo '<button id="btn-add" class="btn btn-add" >ADD ITEMS</button>';

?>
        <?php
echo '<button id="btn-item" class="btn btn-list" >ITEMS</button>';
?>
        <?php
echo '<button id="btn-feedback" class="btn btn-feed" >FEEDBACK</button>';
?>

        <button id="btn-oder" class="btn btn-feed f" onclick="goOder()">ODER HISTORY</button>

        <script src="./src/java script/script.js"></script>

    </div>
    <div class="nav">
        <ul>
            <li><a href="./addCamping.php">Camping Items</a></li>
            <li><a href="./addCamera.php">Camera Bodies</a></li>
            <li><a href="./addLenses.php">Lenses</a></li>
            <li><a href="./addBinoculars.php">Binoculars</a></li>
            <li><a href="./addDrones.php">Drones</a></li>
        </ul>
    </div>