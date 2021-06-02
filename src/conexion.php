<?php
    $hostname_db = "remotemysql.com";
    $database_db = "XVh7j3cTff";
    $username_db = "XVh7j3cTff";
    $password_db = "JTZ5F3WYc5";

    $con = mysqli_connect($hostname_db,$username_db,$password_db,$database_db);
    if (mysqli_connect_errno()){
        $url = "https://img.shields.io/badge/CONEXION-FAIL-red?style=for-the-badge&logo=mysql&logoColor=white";
        echo curl_get_contents($url);
        die();
    }

    require_once 'incremento.php';
?>