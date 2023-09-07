<?php

	session_start();
	if (!isset($_SESSION['usuario'])) {
		echo'
			<script>
				alert("Debes iniciar sesion primero");
				window.location ="login.php";
			</script>
		';
		
		session_destroy();
		die();
	}


	
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comparador de precios</title>
    <link rel="stylesheet" href="css/estilos3.css">

   
</head>
<body>
    
    <header>
        <div class="header__superior">
            <div class="logo">
                <img src="imagenes/logo.png" alt="">
            </div>
            <div class="search">
                <input type="search" placeholder="¿Qué deseas buscar?">
            </div>
        </div>

        <div class="container__menu">

            <div class="menu">
                <input type="checkbox" id="check__menu">
                <label for="check__menu" id="label__check">
                    
                </label>
                <nav>
                    <ul>
                        <li><a href="bienvenida.php" id="selected"> </a></li>
                        <li><a href="#">Tiendas</a>
                            <ul>
                                <li><a href="#">Walmart</a></li>
                                <li><a href="#">Aurrera</a></li>
                                <li><a href="#">Chedraui</a></li>
                                <li><a href="#">Abarrotes Don Beto</a></li>
                                <li><a href="#">Oxxo</a></li>
                            </ul>
                        </li>
                        <li><a href="canastaBasica.php">Canasta basica</a></li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="acercaDe.php">Acerca de</a></li>
                        <li id="cerrar_sesion"><a href="php/cerrar_sesion.php" >Cerrar sesion</a></li>
                    </ul>
                </nav>
            </div>

        </div>

    </header>

    <main>
        <article>
            <h2>Nosotros</h2>
            <p>Somos un sitio web informativo y sin fines de lucro, con el unico objetivo principal de ayudar a la economia de cada una de las familias mexicanas al ofrecerles una herramienta de comparacion de precios de la canasta basica <br><br><br><br><br><br> 

            © 2023 CompraYa. Todos los derechos reservados.</p>
            
            
        </article>
        
    </main>
</body>
</html>