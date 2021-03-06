	<?php
	include 'conexion_be.php'; 
	
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Buscar Empleo</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet"> 
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../public/Css/Buscar-empleo.css">
	

	<meta charset="preload" href="../public/Css/styles.css">
    <link rel="stylesheet" href="../public/Css/styles.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script src="../public/Js/jquery.js"></script>
    <script src="../public/Js/jquery.dataTables.min.js"></script>
</head>  

	<?php
        include("../includes/header.php");
	?> 
	

	</div>	

	<div class="select-box">
		<div class="contenedor">
		<form action="">
			<div class="selectbox">
				<div class="select" id="select">
					<div class="contenido-select">
						<h1 class="titulo">Fecha de publicacion</h1>
						
					</div>
					<i class="fas fa-angle-down"></i>
				</div>

				<div class="opciones" id="opciones">	
					<a href="#" class="opcion">	
						<div class="contenido-opcion">	
							
							<div class="textos">
								<h1 class="titulo">Cualquier momento</h1>	
								
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">	
							<div class="textos">	
								<h1 class="titulo">Mes pasado</h1>	
							</div>	
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
						
							<div class="textos">
								<h1 class="titulo">Esta semana</h1>
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							
							<div class="textos">
								<h1 class="titulo">Hace mas de un mes</h1>
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							
							<div class="textos">
								<h1 class="titulo">Hace un dia</h1>
								
							</div>
						</div>
					</a>
				</div>
			</div>

			<input type="hidden" name="pais" id="inputSelect" value="">
		</form>

		<form action="">
			<div class="selectbox-2">
				<div class="select" id="select2">
					<div class="contenido-select2">
						<h1 class="titulo">Tipo de jornada</h1>
						
					</div>
					<i class="fas fa-angle-down"></i>
				</div>

				<div class="opciones" id="opciones2">
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							
							<div class="textos">
								<h1 class="titulo">Jornada completa</h1>
								
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							<div class="textos">
								<h1 class="titulo">Jornada parcial</h1>
							</div>
						</div>
					</a>
					
				</div>
			</div>

			<input type="hidden" name="pais" id="inputSelect2" value="">
		</form>

		<form action="">
			<div class="selectbox-2">
				<div class="select" id="select3">
					<div class="contenido-select3">
						<h1 class="titulo">Tipo de empleo</h1>
						
					</div>
					<i class="fas fa-angle-down"></i>
				</div>

				<div class="opciones" id="opciones3">
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							
							<div class="textos">
								<h1 class="titulo">Contrato por obra</h1>
								
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							<div class="textos">
								<h1 class="titulo">Temporal</h1>
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
						
							<div class="textos">
								<h1 class="titulo">Voluntario</h1>
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							
							<div class="textos">
								<h1 class="titulo">Praticas</h1>
							</div>
						</div>
					</a>
					
				</div>
			</div>

			<input type="hidden" name="pais" id="inputSelect3" value="">
		</form>

		<form action="">
			<div class="selectbox-2">
				<div class="select" id="select4">
					<div class="contenido-select4">
						<h1 class="titulo">Nivel de experiencia</h1>
						
					</div>
					<i class="fas fa-angle-down"></i>
				</div>

				<div class="opciones" id="opciones4">
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							
							<div class="textos">
								<h1 class="titulo">Practicas</h1>
								
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							<div class="textos">
								<h1 class="titulo">Sin experiencia</h1>
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
						
							<div class="textos">
								<h1 class="titulo">Algo de experiencia</h1>
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							
							<div class="textos">
								<h1 class="titulo">Ya me eh dedicado a esto anteriormente</h1>
							</div>
						</div>
					</a>
					
				</div>
			</div>

			<input type="hidden" name="pais" id="inputSelect4" value="">
		</form>


	</div>
	</div>
<main>
	<div class="contenedor-abuelo-abuelo">
	<div class="contenedor-abuelo">
		<div class="resultados"> <!-- -->
			<div class="contenedor-label">
			<label class="label-1">Changas en Argentina</label>
			<label class="label-2">100 resultados</label>
			</div>

			<div class="contenedor-icon">
			<i class="fas fa-search-dollar icon"></i>
			</div>
		</div>

		

		<div class="contenedor-padre">
			<div class="contenedor-trabajos-padre">
				

				<?php
				
				$sql= "SELECT * FROM crear_empleo";
				$result=mysqli_query($conexion, $sql);

				if($result){
        
						echo "se mostro";
					}
					else{
						echo "No se mostro";
					}
				while($mostrar=mysqli_fetch_array($result)){

				?>	

				<div class="contenedor-trabajos">
				
				
					
					<div class=contenedor-img>
					
					<img class="imagen" src="foto-trabajo.png">
					</div>

					<div class="contenedor-contenido">
						<label class="label-3"><?php echo $mostrar['nombre_Trabajo']?>	</label>
						<label class="label-4"><?php echo $mostrar['Direccion']?>, Argentina</label>
						<div class="contenedor-requisitos-padre">
							<div class="contenedor-requisitos">
								<i class="fas fa-briefcase icono"></i><label class="label-5"><?php echo $mostrar['tipo_Jornada']?></label>
							</div>

							<div class="contenedor-requisitos">
								<i class="fas fa-user-clock icono"></i><label class="label-5"><?php echo $mostrar['nivel_Experiencia']?></label>
							</div>

							<div class="contenedor-requisitos">
								<i class="fas fa-user-graduate icono"></i><label class="label-5"><?php echo $mostrar['Titulo']?></label>
							</div>

							<div class="contenedor-requisitos">
								<i class="fas fa-globe-americas icono"></i><label class="label-5"><?php echo $mostrar['Idioma']?></label>
							</div>

							<div class="contenedor-requisitos">
								<i class="fas fa-building icono"></i><label class="label-5"><?php echo $mostrar['tipo_Empleo']?></label>
							</div>

							<div class="contenedor-requisitos">
								<i class="fas fa-user-alt icono"></i><label class="label-5"><?php echo $mostrar['Edad']?></label>
							</div>

						</div>

					</div>

				</div>

				

				<?php
				}
				?>

				<div class="contenedor-trabajos">
					
					<div class=contenedor-img>
						<img class="imagen" src="../public/Img/fondo_login.jpg">
					</div>

					<div class="contenedor-contenido">
						<label class="label-3">Vendedor de Autos - Volkswagen </label>
						<label class="label-4">Provincia de Buenos Aires, Argentina</label>
						<div class="contenedor-requisitos-padre">
							<div class="contenedor-requisitos">
								<i class="fas fa-briefcase icono"></i><label class="label-5">Jornada Completa</label>
							</div>

							<div class="contenedor-requisitos">
								<i class="fas fa-user-clock icono"></i><label class="label-5">Algo de Experiencia</label>
							</div>

							<div class="contenedor-requisitos">
								<i class="fas fa-user-graduate icono"></i><label class="label-5">Titulo secundario</label>
							</div>

							<div class="contenedor-requisitos">
								<i class="fas fa-globe-americas icono"></i><label class="label-5">Ingles</label>
							</div>

							<div class="contenedor-requisitos">
								<i class="fas fa-building icono"></i><label class="label-5">Contrato por obra</label>
							</div>

							<div class="contenedor-requisitos">
								<i class="fas fa-user-alt icono"></i><label class="label-5">Mayor de 18 a??os</label>
							</div>

						</div>

					</div>

				</div>

				

				

			</div>
		</div>
		
	
	</div>
	<div class="contenedor-div-derecho-padre">	
		<div class="contenedor-div-derecho">
			<div class="solicitudes">
				<label class="label-6">Vendedor de Autos - Volkswagen</label>
				<label class="label-solicitudes">3 Solicitudes</label>
			</div>
			<label class="label-7">Provincia de Buenos Aires, Argentina</label>
			<label class="label-8">Publicado hace 3 semanas</label>
			<label class="label-9">??De que se trata el trabajo?</label>
			<label class="label-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</label>
			<label class="label-9">??Que perfil buscamos?</label>
			<label class="label-10">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</label>
			<label class="label-9">Requisitos para el trabajo</label>
			<div class="contenedor-requisitos-padre">
				<div class="contenedor-requisitos">
					<i class="fas fa-briefcase icono-2"></i><label class="label-5">Jornada Completa</label>
				</div>

				<div class="contenedor-requisitos">
					<i class="fas fa-user-clock icono-2"></i><label class="label-5">Algo de Experiencia</label>
				</div>

				<div class="contenedor-requisitos">
					<i class="fas fa-user-graduate icono-2"></i><label class="label-5">Titulo secundario</label>
				</div>

				<div class="contenedor-requisitos">
					<i class="fas fa-globe-americas icono-2"></i><label class="label-5">Ingles</label>
				</div>

				<div class="contenedor-requisitos">
					<i class="fas fa-building icono-2"></i><label class="label-5">Contrato por obra</label>
				</div>

				<div class="contenedor-requisitos">
					<i class="fas fa-user-alt icono-2"></i><label class="label-5">Mayor de 18 a??os</label>
				</div>

			</div>

			<div class=" contenedor-button">
			<input type="submit" value="Solicitar Empleo" class="button">
			<input type="submit" value="Consulta Aqui" class="button second">
			</div>

		</div>
		
	</div>

	</div>
	
</main>
<script src="../public/Js/main.js"></script>
<?php
	include("../includes/footer.php");
?>
