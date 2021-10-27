<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Crear Empleo</title>
	<link rel="stylesheet" href="../public/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet"> 
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../public/Css/Crear-empleo.css">


	<meta charset="preload" href="../public/Css/styles.css">
    <link rel="stylesheet" href="../public/Css/styles.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script src="../public/Js/jquery.js"></script>
    <script src="../public/Js/jquery.dataTables.min.js"></script>

</head>


	<?php
        include("../includes/header.php");
	?> 
	
	<main>

	
		<label class="editar">Editar</label>
		<form action="../php/empleo.php" method="POST" enctype="multipart/form-data"> <!-- enctype="multipart/form-data" Te permite subir archivos-->
			<div class="contenedor-padre">

			
				<div class="contenedor-imagen">


					<!-- <form action="../php/empleo.php" method="POST" enctype="multipart/form-data"> -->
						<!-- <i class="fas fa-user-edit icono"> -->
						<!-- <input type="text" name="nombre" placeholder="Nombre..." value=""> -->
						<!-- <input type="file" name="imagen"> -->
						<!-- <input type="submit" value="Aceptar"> </i> -->
					
					<!-- </form> -->
					

					
					<!-- <i class="fas fa-user-edit icono"><input type="file" name="Imagen"><input type="submit" value="Aceptar"></i> -->
					<div class="contenedor-img">
						<!-- <label for="foto">Selecciona tu foto</label> -->
						<!-- <input type="file" id="foto" name="foto"> -->
						<input type="file" required name="Imagen">
						<input type="text" value="Aceptar">
						<img class="imagen" src="logo.png"> <!--logo del trabajo-->
						
					</div> 
					
				</div>
				
				
				<div class="contenedor-requisitos">
					<div class="contenedor-input">
						<input type="text"  placeholder="Nombre del trabajo" name="nombre_trabajo" id="nombre-trabajo">
					</div>

					<div class="contenedor-input">
						<select class="input" onchange="Barra_Roles()" name="titulo" id="tipo">
						<option value="sin seleccionar" selected="select" id="nada">Seleccione titulo secundario</option>
						<option value="Secundario"id="usuario" >Titulo secundario</option>
						<option value="no es necesario"id="comerciante">No es necesario</option>
						</select>
					</div>

					<div class="contenedor-input">
						<input type="text"  placeholder="Direccion" id="nombre-trabajo" name="direccion">
					</div>

					<div class="contenedor-input">
						<select class="input" onchange="Barra_Roles()" name="tipo_jornada" id="tipo">
						<option value="Sin seleccionar" selected="select" id="nada">Tipo de jornada</option>
						<option value="Jornada Completa"id="usuario" >Jornada completa</option>
						<option value="Jornada Parcial"id="comerciante">Jornada parcial</option>
						</select>
					</div>

					<div class="contenedor-input">
						<select class="input" onchange="Barra_Roles()" name="edad" id="tipo">
						<option value="Sin seleccionar" selected="select" id="nada">Requisito de edad</option>
						<option value="Mayor de 18"id="usuario">Mayor de 18</option>
						<option value="No es necesario"id="comerciante">No es necesario</option>
						</select>
					</div>

					<div class="contenedor-input">
						<select class="input" onchange="Barra_Roles()" name="nivel_experiencia" id="tipo">
						<option value="Sin seleccionar" selected="select" id="nada">Nivel de experiencia</option>
						<option value="Practicas"id="usuario" >Practicas</option>
						<option value="Sin experiencia"id="comerciante">Sin experiencia</option>
						<option value="Algo de experiencia"id="comerciante">Algo de experiencia</option>
						<option value="Ya me eh dedicado"id="comerciante">Ya me eh dedicado a esto anteriormente</option>    
						</select>
					</div>

					<div class="contenedor-input">
						<select class="input" onchange="Barra_Roles()" name="idioma" id="tipo">
						<option value="Sin seleccionar" selected="select" id="nada">Idioma</option>
						<option value="Ingles"id="usuario" >Ingles</option>
						<option value="Italiano"id="comerciante">Italiano</option>
						<option value="Español"id="comerciante">Español</option>
						<option value="No es necesario"id="comerciante">No es necesario</option>    
						</select>
					</div>

					<div class="contenedor-input">
						<select class="input" onchange="Barra_Roles()" name="tipo_empleo" id="tipo">
						<option value="Sin seleccionar" selected="select" id="nada">Tipo de empleo</option>
						<option value="Contrato por obra"id="usuario" >Contrato por obra</option>
						<option value="Temporal"id="comerciante">Temporal</option>
						<option value="Voluntario"id="comerciante">Voluntario</option>
						<option value="Practicas"id="comerciante">Practicas</option>    
						</select>
					</div>
				</div>
			</div>

			<div class="descripcion">
				<textarea name="descripcion">Descripcion breve del trabajo</textarea>
			</div>

			<div class="descripcion">
				<textarea name="perfil_trab">Perfil del trabajador</textarea>
			</div>

			<!-- <button type="submit" name="submit">Submit</button> -->
			<input type="submit" value="Submit" class="button">
			<input type="submit" value="Cancel" class="button second"> 
		
	</form>
	


</main>
<?php
	include("../includes/footer.php");
?>
