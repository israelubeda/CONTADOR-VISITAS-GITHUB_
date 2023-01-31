<?php
    // deshabilitamos la cache para que la imagen no sea traida cada momento
    $timestamp = gmdate("D, d M Y H:i:s") . " GMT";
    header("Expires: $timestamp");
    header("Last-Modified: $timestamp");
    header("Pragma: no-cache");
    header("Cache-Control: no-cache, must-revalidate");

    // indicamos que el contenido sera una imagen
    header("Content-type: image/svg+xml");
?>