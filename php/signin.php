<!DOCTYPE html>
<html>
<head>
	<title>Sign in - Veyda Arts n Designs</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "header.php"; ?>

    <div class="maincont">
        <div class="contner cont1"></div>

        <div class="contner cont2">
            <div class="formcontner">
                <form id="formsi" action="usersignin.php" method="post" autocomplete="off">
                    <h4>SIGN IN</h4>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>

                    <input type="text" name="uname" placeholder="username :"><br>

                    <input type="password" name="password" placeholder="password :"><br>

                    <button id="formsub" type="submit">Login</button><br>
                    <div class="acont">
                        <a href="#">Forgot password</a>
                        <a href="signup.php">Don't have an account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>

</body>
</html>