<?php

$conn=mysqli_connect("localhost", "root", "Dfwmungonez", "veyda");

if($conn){
    echo "Connected";
}
else{
    echo "Failed";
}

?>