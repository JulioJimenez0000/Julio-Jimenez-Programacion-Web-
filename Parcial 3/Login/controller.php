<?php

require.once 'model.php';

$model=new Model();

$model->usuario=$_POST['txtUsuario'];
$model->clave=$_POST['txtClave'];

$filaController=$model->Logear();

if($filaController>0){

    echo "<h1>Bienvenido usuario </h1>";

}else{

    echo "<h1> Usuario o contrasena incorrecta!!! </h1>";

    header("refresh:2; url=http://127.0.0.1:5500/Login/Login.html");
}


?>