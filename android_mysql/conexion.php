<?php
$mysql=new mysqli("localhost","root","","database_test");
//$mysql=new mysqli("localhost","root","","android_mysql");
if($mysql->connect_error){
    die("Error de conexión");
}
else{
    //echo "Conexión exitosa";
}
