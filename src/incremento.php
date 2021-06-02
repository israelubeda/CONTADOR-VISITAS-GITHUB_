<?php
    //asignamos el numero de visitas actual a una variable, si no exite entonces se inicializa
    $sql="SET @i = (SELECT IFNULL(MAX(github_contador_visitas),1000) FROM visitas);";
    mysqli_query($con,$sql);
    //incrementamos el valor de visitas
    $sql="INSERT INTO visitas(id,github_contador_visitas) VALUES(1, @i+1) ON DUPLICATE KEY UPDATE github_contador_visitas = VALUES(github_contador_visitas)";
    mysqli_query($con,$sql);

    //obtenemos el valor del campo
    $sql="SELECT MAX(github_contador_visitas) AS num_visitas FROM visitas";
    $result=mysqli_query($con,$sql);
    if(! mysqli_num_rows($result) ) {
        $url = "https://img.shields.io/badge/RESULTADO-VACIO-red?style=for-the-badge&logo=mysql&logoColor=white";
        echo curl_get_contents($url);
        die();
    }else{
        $row = mysqli_fetch_array($result);
        $message=$row["num_visitas"];
        
        // set parameters for the shields.io URL
        $params = [
            "label" => "Visitas",
            "logo" => "github",
            "message" => $message,
            "color" => "blue",
            "style" => "for-the-badge"
        ];
        
        // build the URL with an SVG image of the view counter
        $url = "https://img.shields.io/static/v1?" . http_build_query($params);
        
        // output the response (svg image)
        echo curl_get_contents($url);
    }
    //close the connection BD
    mysqli_close($con);
?>