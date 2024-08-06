<!DOCTYPE html>
<html>
<head>
	<title>Sign up - Veyda Arts n Designs</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "header.php"; ?>
     
    <div class="maincont">
        <div class="contner cont1"></div>

        <div class="contner cont2">

            <div class="formcontner">
                <form id="formsu" action="usersignup.php" method="post" autocomplete="off">
                <h4>SIGN UP</h4>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>

                    
                <?php if (isset($_GET['name'])) { ?>
                    <input type="text" name="name" placeholder="fullname :"value="<?php echo $_GET['name']; ?>"><br>
                <?php }else{ ?>
                    <input type="text" name="name" placeholder="fullname :"><br>
                <?php }?>

                <?php if (isset($_GET['uname'])) { ?>
                    <input type="text" name="uname" placeholder="username :" value="<?php echo $_GET['uname']; ?>"><br>
                <?php }else{ ?>
                    <input type="text" name="uname" placeholder="username :"><br>
                <?php }?>

                <input type="password" name="password" placeholder="new password :"><br>

                <input type="password" name="re_password" placeholder="confirm password :"><br>

                <button id="formsub" type="submit">Sign Up</button>

            </form>
        </div>
        </div>
    </div>

    <?php include "footer.php"; ?>


</body>
</html>