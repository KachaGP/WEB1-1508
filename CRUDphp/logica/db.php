<?php

$host = 'sql103.infinityfree.com';
$user = 'if0_40222543';  
$password = 'Kachaflas7250';  
$dbname = 'if0_40222543_GestorUsuarios';


$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Error en la conexión: ' . $conn->connect_error);
}
?>
