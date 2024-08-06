<?php

$sname = "localhost";
$susername = "root";
$spassword = "Dfwmungonez";

$db_name = "veydaartsndesigns";

$conn = mysqli_connect($sname, $susername, $spassword, $db_name);

    if(!$conn){
        echo "Connection to db failed";
    }
    // else{
    //     echo "Db connection successful!";
    // }


?>