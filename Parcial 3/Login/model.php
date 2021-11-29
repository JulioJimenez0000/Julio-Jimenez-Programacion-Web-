<?php

class Model{
    
    var $id;
    var $usuario;
    var $clave;

    function __construct(){


    }

    function Logear(){

        $cadenaCnx="sqlsrv:Server=DESKTOP-ID4H5NK;Database=ejemplo_login";
        $user="sa";
        $pass="12345";

        $cnx= new PDO($cadenaCnx,$user,$pass);

        try{

            $consulta=$cnx->prepare("SELECT*FROM usuario WHERE
            username=:parametro1 AND clave=(SELECT dbo.fun_encriptar(:parametro2))");

            $consulta->bindValue(":parametro1",$this->usuario);
            $consulta->bindValue(":parametro2",$this->clave);

            $consulta->execute();

            $fila=$consulta->fetch();

            return $fila
            
            
        }catch(PDOException $e){


            echo "Error en la conexion->".$e;
        }
    }


}
