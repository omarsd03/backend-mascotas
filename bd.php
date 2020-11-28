<?php

    $contraseña = 'omar';
    $usuario = 'root';
    $db = 'bdmascotas';
  
    try {
        return new PDO('mysql:host=localhost;dbname=' . $db, $usuario, $contraseña);
    } catch (Exception $e) {
        echo "Ocurrio un error en la BD" . $e->getMessage();
    }

?>