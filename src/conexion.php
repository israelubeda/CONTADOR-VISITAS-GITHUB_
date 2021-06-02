<?php
    $hostname_db = "hostname_db";
    $database_db = "database_db";
    $username_db = "username_db";
    $password_db = "password_db";

    $con = mysqli_connect($hostname_db,$username_db,$password_db,$database_db);
    if (mysqli_connect_errno()){
        $url = "https://img.shields.io/badge/CONEXION-FAIL-red?style=for-the-badge&logo=mysql&logoColor=white";
        echo curl_get_contents($url);
        die();
    }

    require_once 'incremento.php';
?>