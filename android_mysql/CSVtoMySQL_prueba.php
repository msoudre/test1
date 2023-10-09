<?php

    require("conexion.php");
    $archivo = fopen("datos.csv", "r");
    $con = 0;

    while(($datos = fgetcsv($archivo,0,";"))== true) {
        $nombre = $datos[0];
        $latitud = $datos[1];
        $longitud = $datos[2];
        $precio = $datos[3];

        //Lee e imprime los datos
        //echo $datos;
        echo "Datos del usuario: ".$con."<br>";
        echo "Nombre: ".$nombre."<br>";
        echo "Latitud: ".$latitud."<br>";
        echo "Longitud: ".$longitud."<br>";
        echo "Precio: ".$precio."<br>";
        $con++;
        echo "<br>";

        //query para insertar registros
        
        $query = "INSERT INTO db_precio (nombre,latitud,longitud,precio) VALUES
        ('".$nombre."','".$latitud."','".$longitud."','".$precio."')";

        //Ejecutar query
        $resultado=$mysql->query($query);
        if($resultado==true){
            echo "Registro insertado correctamente";
        }else{
            echo "Error al insertar registro";
        }
        

    }
