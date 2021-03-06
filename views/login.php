<?php

    session_start(); 

    if(isset($_SESSION['usurio'])){
        header("location: ../php/bienvenida.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registrarse</title>
    <link rel="stylesheet" href="../public/Css/stylelogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <main>
        <div class="contenedor__todo">
            <!-- Caja Trasera login-->
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrate</button>
                </div>
            </div>
             <!-- Formulario de login y registro-->
            <div class="contenedor__login-register">   
                <!-- Pertene a Login -->
                <form action="../php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                <!-- Pertenece a Regístro -->
                <form action="../php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <div class="contenedor__login-register-1">
                        <select class="input" onchange="Barra_Roles()" name="tipoUsuario" id="tipo">
                        <option value="ninguno" selected="select" id="nada">Seleccione un rol</option>
                        <option value="Jefe"id="usuario" >Jefe</option>           
                        <option value="Trabajador"id="proveedor">Trabajador</option></select>
                    </div>
                    <button type="submit" name="submit">Regístrarse</button>
                    <!-- <?php
                        // include("../php/validar-form.php");
                    ?>  -->
                </form>
            </div>
        </div>
    </main>
    <script src="../public/Js/script.js"></script>
</body>
</html>