
<?php

	session_start();

	if (isset($_SESSION['usuario'])) {
		header("location: bienvenida.php");
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login y Registro</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body>
	<main>
		<div class="contenedor-todo">
			<div class="caja-trasera">
				<div class="caja-trasera-login">
					<h3>Ya tienes una cuenta? </h3>
					<p>Inicia sesion para entrar a la pagina </p>
					<button id="btn-iniciar-sesion">Iniciar sesion </button>

				</div>
				<div class="caja-trasera-registro">
					<h3>Aun no tienes una cuenta</h3>
					<p>Registrate para poder iniciar sesion </p>
					<button id="btn-registrarse">Registrarse </button>
					
				</div>

			</div>

			<div class="contenedor-formulario">
				<form action="php/login_usuario.php" class="formulario-login" method="POST">
					<h2>Iniciar Sesion</h2>
					<input type="text" placeholder="Correo electronico" name="correo">
					<input type="password" placeholder="Contraseña" name="contrasena">
					<button>Entrar</button>
					
				</form>

				<form action="php/registro_usuario.php" method="POST" class="formulario-registro">
					<h2>Registrarse</h2>
					<input type="text" placeholder="Nombre Completo" name="nombre_completo">
					<input type="text" placeholder="Usuario" name="usuario">
					<input type="text" placeholder="Correo Electronico" name="correo">
					<input type="password" placeholder="Contraseña" name="contrasena">
					<button>Registrarse</button>


				</form>
			</div>

		</div>
	</main>

	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>