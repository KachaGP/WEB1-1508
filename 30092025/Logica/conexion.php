<?php
//Almacernar variables donde se tiene informacion de la base de datos y el servidor
$host = '127.0.0.1:3306';
$user = 'root';
$password = 'Kachafla$725';
$dbname = 'crud_app';
$conexion = new mysqli($host, $user, $password, $dbname);

if($conexion -> connect_error) {
      die('Error en la conexion a la db :( : '.$conexion -> connect_error);
}else{
    echo "Conexion realizada";
}

?>