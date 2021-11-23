<?php

$hostname='localhost';
$database='PW18100742';
$username='';
$password='';

try{
    $con = new PDO("mysql: host=$hostname; dbname=$database, $username, $password");
}catch(PDOException $e){
    echo "Error de conexion a la base de datos";
    echo $e->getMessage();
    exit();
}

$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>