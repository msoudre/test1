<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include_once 'conexion.php';
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $pass=$_POST['pass'];
    $query="UPDATE usuarios SET nombre='".$nombre."',email='".$email."',telefono='".$telefono."',pass='".$pass."'
    WHERE id='".$id."'";
    $resultado=$mysql->query($query);
    if($mysql->affected_rows>0){
        echo "El usuario se editó exitosamente";
    }else{
        echo "Error al editar usuario";
    }
    $mysql->close();
}