<?php
    $hostname_db = "aws.connect.psdb.cloud";
    $database_db = "gotarsi";
    $username_db = "0n3rwpm4p1w0w3rp8b1n";
    $password_db = "pscale_pw_HR7G8qY8qoSHOqh5VBjgdS0OkjGjt0NCk7XaJCAwemw";

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
