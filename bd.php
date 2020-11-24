<?php

    $contraseña = '';
    $usuario = 'root';
    $db = 'mascotas';
  
    try {
        return new PDO('mysql:host=localhost;dbname=' . $db, $usuario, $contraseña);
    } catch (Exception $e) {
        echo "Ocurrio un error en la BD" . $e->getMessage();
    }

?>