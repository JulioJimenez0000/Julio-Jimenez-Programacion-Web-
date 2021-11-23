<?php
include "Conectar.php";

try{
    $query="select * from cusuario";
    $query=$con->prepare($queryStr);
    $query->execute();

    while($row = $query->fetch()){

        echo $row['Usuario'].'-'.
             $row['Email'].'-'.
             $row['Passsword'].'-'.
    }
    $query->closeCursor();

}catch(PDOException $e){
    echo "Error de consulta a la base de datos"
    echo $e->getMessage();
}

?>