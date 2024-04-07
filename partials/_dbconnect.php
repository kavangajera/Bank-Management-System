<?php
    $server="sql311.infinityfree.com";
    $username="if0_34619002";
    $password="9EMyWt0EtAZ1L";
    $database="if0_34619002_users";

    $conn=mysqli_connect($server,$username,$password,$database);

    if($conn){
        // echo"Success";
    }
    else{
        die("Error".mysqli_connect_error());
    }
?>