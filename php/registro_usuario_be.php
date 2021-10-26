<?php
    include 'conexion_be.php';
    
    $nombre_completo = $_POST['nombre_completo']; // Almacenar los datos del campo Nombre Completo 
    $correo = $_POST['correo']; // Almacenar los datos del campo Correo Electronico
    $usuario = $_POST['usuario']; // Almacenar los datos del campo Usuario
    $contrasena = $_POST['contrasena']; // Almacenar los datos del campo Contraseña 
    $tipoUsuario = $_POST['tipoUsuario']; 
    // Encriptar password
    $contrasena = password_hash('sha512', $contrasena);  // Algoritmo 512 para encriptar contraseña

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena,tipoUsuario)
              VALUES('$nombre_completo', '$correo','$usuario','$contrasena','$tipoUsuario')";

    //Verificar que el correo no se repita en la Base de Datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya está registrado, intenta con otro diferente");
                window.location = "../views/login.php";
            </script>
        ';
        exit();
    }  

    //Verificar que el nombre de usuario no se repita en la Base de Datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este usuario ya está registrado, intenta con otro diferente");
                window.location = "../views/login.php";
            </script>
        ';
        exit();
    }



    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
                <script>
                    alert("Usuario almacenado exitosamente");
                    window.location = "../views/login.php";
                </script>
        ';
    }else{
        echo '
                <script>
                    alert("Inténtalo de nuevo, usuario no almacenado exitosamente");
                    window.location = "../views/login.php";
                </script>
        ';
    }

    mysqli_close($conexion);

?>