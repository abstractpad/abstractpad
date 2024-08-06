<!-----This is the home page----->

<?php

    // session_start();
    // require 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Veyda Arts n Designs</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
    <script src="https://kit.fontawesome.com/90575e6a68.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <div class="maincontt3">

        <div class="contner3 sbc"></div>

        <div class="contner homecont">

            <div class="gallery">
                <div class="gcont"></div>
                <div class="gcont"></div>
                <div class="gcont"></div>
                <div class="gcont"></div>
            </div>
            <div class="gallery"></div>

        </div>

        <div class="contner3 sbc"><a class="logoutbtn" href="logout.php">Logout</a></div>


    </div>



    <?php
        include 'footer.php';
    ?>
</body>
</html>