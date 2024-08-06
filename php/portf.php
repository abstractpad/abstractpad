<?php
    // include 'connect.php';

    // if(!empty($_SESSION["id"])){
    //     $id = $_SESSION["id"];
    //     $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    //     $row = mysqli_fetch_assoc($result);
    // }
    // else{
    //     header("Location: signin.php");
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Veyda Arts n Designs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'header.php';?>

    <div class="maincontt2">
        <div class="contner cont0">
            <div class="imgcnt">
                <img src="imgs/pic.jpg" alt="pic of me">
            </div>
        </div>
        <div class="about contner cont1">
            <div class="aboutdescr">
                <h4>ABOUT ME</h4>

                <h5> <span>NAME :</span> Veyda Arts n Designs</h5>
                <h6><span>SKILLS :</span> WEB DEVELOPER <span>|</span> SOFTWARE PROJECT MANAGER <span>|</span> JAVA</h6>

                <div class="aboutpcontner">
                    <p> Hello, I'm a fullstack web developer. I design and build
                        websites for small and medium-sized companies. I'm also a programmer with 
                        wide knowledge in languages such as Python, C++, C but I mainly
                        work with Java. I manage software projects for small and medium-sized
                        companies. I'm also an IT consultant.
                    </p>
                </div>
                

                <div class="subscribecontner"> <p class="subp"> <span>Want to subscribe to the newsletter?</span></p> 
                    <form action="#">
                    <input type="text" id="email" placeholder="email: example@gmail.com">
                    <input type="submit" id="formsub" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
        <div class="contner"></div>
    </div>

    <?php
        include 'footer.php';
    ?>

</body>
</html>