<?php
    include 'conexion_be.php';

    // $nombre = $_POST['nombre'];
    $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
    $nombre_trabajo = $_POST['nombre_trabajo'];
    $titulo = $_POST['titulo']; 
    $direccion = $_POST['direccion']; 
    $tipo_jornada = $_POST['tipo_jornada']; 
    $edad = $_POST['edad']; 
    $nivel_experiencia = $_POST['nivel_experiencia']; 
    $idioma = $_POST['idioma']; 
    $tipo_empleo = $_POST['tipo_empleo']; 
    $descripcion = $_POST['descripcion']; 
    $perfil_trab = $_POST['perfil_trab']; 

// CARGAR A LA BASE DE DATOS

    $query = "INSERT INTO crear_empleo(imagen, nombre_Trabajo, Titulo, Direccion, tipo_Jornada, Edad, nivel_Experiencia, Idioma, tipo_Empleo, Descripcion, perfil_Trab) 
            VALUES('$Imagen', '$nombre_trabajo', '$titulo', '$direccion', '$tipo_jornada', '$edad', '$nivel_experiencia', '$idioma', '$tipo_empleo', '$descripcion', '$perfil_trab')";

//Verificar que empleo se haya almacenado exitosamente    
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
                <script>
                    alert("Empleo almacenado exitosamente");
                    window.location = "../views/Crear-empleo.php";
                </script>
        ';
        mysqli_close($conexion);
    }else{
        echo '
                <script>
                    alert("Inténtalo de nuevo, Empleo no almacenado exitosamente");
                    window.location = "../views/Crear-empleo.php";
                </script>
        ';
    }

    
?>