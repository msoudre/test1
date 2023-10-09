<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $url_api = "https://g8132f7d31d8e4d-vhdtcww6wpze0l94.adb.sa-santiago-1.oraclecloudapps.com/ords/admin/cantante/cantante";
    $datos = json_decode(file_get_contents($url_api));
    #$datos2 = file_get_contents("https://g8132f7d31d8e4d-vhdtcww6wpze0l94.adb.sa-santiago-1.oraclecloudapps.com/ords/admin/cantante/cantante/1");
    #var_dump($datos["items"]);
    #print_r($datos);
    echo json_encode($datos)
    #print_r($datos["items"]);
}