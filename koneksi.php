<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "laundry";

    $koneksi = mysqli_connect($serverName, $userName, $password, $database);
    
    //test
    // if (!$koneksi) {
    //     die("error".mysqli_connect_error());
    // }
    // else {
    //     echo "Terhubung";
    // }
     ?>