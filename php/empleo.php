<?php
    include 'conexion_be.php';
    $nombre = $_POST['nombre'];
    $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
    
    $query = "INSERT INTO crear_empleo(nombre, imagen) VALUES('$nombre', '$Imagen')";
    $resultado = $conexion->query($query);

    if($resultado){
        echo "Si se inserto";
    }
    else{
        echo "No se inserto";
    }
    
?>