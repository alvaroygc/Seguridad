<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost:8081;dbname=seguridad', 'root', '');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>