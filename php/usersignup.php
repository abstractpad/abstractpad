<?php 
    session_start(); 
    include "connect.php";

    if (isset($_POST['uname']) && isset($_POST['password'])
        && isset($_POST['name']) && isset($_POST['re_password'])) {

        function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

        $uname = validate($_POST['uname']);
        $pass = validate($_POST['password']);

        $re_pass = validate($_POST['re_password']);
        $name = validate($_POST['name']);

        //$user_data = 'uname='. $uname. '&name='. $name;


        if (empty($uname)) {
            header("Location: signup.php?error=sername field is empty!");
            exit();
        }else if(empty($pass)){
            header("Location: signup.php?error=password field is empty!");
            exit();
        }
        else if(empty($re_pass)){
            header("Location: signup.php?error=confirm password field is empty!");
            exit();
        }

        else if(empty($name)){
            header("Location: signup.php?error=name field is empty!");
            exit();
        }

        else if($pass !== $re_pass){
            header("Location: signup.php?error=passwords do not match!");
            exit();
        }

        else{

            // hashing the password
            //$pass = md5($pass);

            $sql2 = "SELECT * FROM users WHERE user_name='$uname'";
            $result2 = mysqli_query($conn, $sql2);

            if (mysqli_num_rows($result2) > 0) {
                header("Location: signup.php?error=username already exists!");
                exit();
            }
            else {
            $sql = "INSERT INTO users(id, user_name, password, name) VALUES('', '$uname', '$pass', '$name')";
            $result = mysqli_query($conn, $sql);
                if ($result) {
                    header("Location: signin.php?success=account created successfully!");
                    exit();
                }
                else {
                        header("Location: signup.php?error=unknown error occurred!");
                        exit();
                }
            }
        }
        
    }
    else{
        header("Location: signup.php");
        exit();
    }
?>