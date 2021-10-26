<?php
    session_start();
    include 'conexion_be.php'; 

    $correo = $_POST['correo']; 
    $contrasena = $_POST['contrasena']; 
    $contrasena = password_hash('512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' 
    AND contrasena='$contrasena' ");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: bienvenida.php");  
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../views/login.php";
            </script>
        ';
        exit;
    }

?>