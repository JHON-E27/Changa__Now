<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Crear Empleo</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet"> 
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../public/Css/Crear-empleo.css">
</head>
<body>

	<?php
        include("../includes/header.php");
	?> 
<main>
	<label class="editar">Editar</label>

	<div class="contenedor-padre">
		<div class="contenedor-imagen">
			<i class="fas fa-user-edit icono"></i>
			<div class="contenedor-img">
				<img class="imagen" src="logo.png"> <!--logo del trabajo-->
			</div>
			
		</div>

		<div class="contenedor-requisitos">
			<div class="contenedor-input">
				<input type="text"  placeholder="Nombre del trabajo" id="nombre-trabajo">
			</div>

			<div class="contenedor-input">
				<select class="input" onchange="Barra_Roles()" name="rol" id="tipo">
	            <option value="nashe" selected="select" id="nada">Seleccione titulo secundario</option>
	            <option value="3"id="usuario" >Titulo secundario</option>
	            <option value="1"id="comerciante">No es necesaro</option>
	           	</select>
			</div>

			<div class="contenedor-input">
				<input type="text"  placeholder="Direccion" id="nombre-trabajo">
			</div>

			<div class="contenedor-input">
				<select class="input" onchange="Barra_Roles()" name="rol" id="tipo">
	            <option value="nashe" selected="select" id="nada">Tipo de jornada</option>
	            <option value="3"id="usuario" >Jornada completa</option>
	            <option value="1"id="comerciante">Jornada parcial</option>
	           	</select>
			</div>

			<div class="contenedor-input">
				<select class="input" onchange="Barra_Roles()" name="rol" id="tipo">
	            <option value="nashe" selected="select" id="nada">Requisito de edad</option>
	            <option value="3"id="usuario">Mayor de 18</option>
	            <option value="1"id="comerciante">No es necesario</option>
	           	</select>
			</div>

			<div class="contenedor-input">
				<select class="input" onchange="Barra_Roles()" name="rol" id="tipo">
	            <option value="nashe" selected="select" id="nada">Nivel de experiencia</option>
	            <option value="3"id="usuario" >Practicas</option>
	            <option value="1"id="comerciante">Sin experiencia</option>
	            <option value="1"id="comerciante">Algo de experiencia</option>
	            <option value="1"id="comerciante">Ya me eh dedicado a esto anteriormente</option>    
	           	</select>
			</div>

			<div class="contenedor-input">
				<select class="input" onchange="Barra_Roles()" name="rol" id="tipo">
	            <option value="nashe" selected="select" id="nada">Idioma</option>
	            <option value="3"id="usuario" >Ingles</option>
	            <option value="1"id="comerciante">Italiano</option>
	            <option value="1"id="comerciante">Español</option>
	            <option value="1"id="comerciante">No es necesario</option>    
	           	</select>
			</div>

			<div class="contenedor-input">
				<select class="input" onchange="Barra_Roles()" name="rol" id="tipo">
	            <option value="nashe" selected="select" id="nada">Tipo de empleo</option>
	            <option value="3"id="usuario" >Contrato por obra</option>
	            <option value="1"id="comerciante">Temporal</option>
	            <option value="1"id="comerciante">Voluntario</option>
	            <option value="1"id="comerciante">Practicas</option>    
	           	</select>
			</div>
		</div>
	</div>

	<div class="descripcion">
		<textarea>Descripcion breve del trabajo</textarea>
	</div>

	<div class="descripcion">
		<textarea>Perfil del trabajador</textarea>
	</div>

	<div class=" contenedor-button">
		<input type="submit" value="Submit" class="button">
		<input type="submit" value="Cancel" class="button second">
	</div>
</main>


</body>
</html>
