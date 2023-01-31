<?php
    $hostname_db = "hostname_db";
    $database_db = "database_db";
    $username_db = "username_db";
    $password_db = "password_db";

    $con=mysqli_init();
    if (!$con){
        $url = "https://img.shields.io/badge/CONEXION-FAIL-red?style=for-the-badge&logo=mysql&logoColor=white";
        echo curl_get_contents($url);
    }

    mysqli_ssl_set($con,"key.pem","cert.pem",NULL,NULL,NULL); 

    if (!mysqli_real_connect($con,$hostname_db,$username_db,$password_db,$database_db)){
        $url = "https://img.shields.io/badge/CONEXION-FAIL-red?style=for-the-badge&logo=mysql&logoColor=white";
        echo curl_get_contents($url);
        die();
    }

    require_once 'incremento.php';
?>