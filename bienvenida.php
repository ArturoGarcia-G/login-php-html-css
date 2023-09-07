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
    <link rel="stylesheet" href="css/estilos2.css">

   
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
                    <i class="fas fa-bars icon__menu"></i>
                </label>
                <nav>
                    <ul>
                        <li><a href="#" id="selected"></a></li>
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
                        <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="acercaDe.php">Acerca de</a></li>
                        <li id="cerrar_sesion"><a href="php/cerrar_sesion.php" >Cerrar sesion</a></li>
                    </ul>
                </nav>
            </div>

        </div>

    </header>

    <main>

        <h1>Comparador de precios</h1>

        <div class="container__box">
            <div class="box" >
            <a href="aceite.php">
                <img src="imagenes/aceite.png" >
                <h5>Aceite</h5>
                <h4>Aceite</h4>
            </a>
            </div>
            <div class="box">
                <img src="imagenes/arroz.png">
                <h5>Arroz</h5>
                <h4>Arroz</h4>
            </div>
            <div class="box">
                <a href="azucar.php">
                <img src="imagenes/azucar.png">
                <h5>Azucar</h5>
                <h4>Azucar</h4>
            </a>
            </div>
            <div class="box">
                <img src="imagenes/carne.png">
                <h5>Carne</h5>
                <h4>Carne</h4>
            </div>
            <div class="box">
                <img src="imagenes/frijoles.png">
                <h5>Frijoles</h5>
                <h4>Frijoles</h4>
            </div>
            <div class="box">
                <img src="imagenes/leche.png">
                <h5>Leche</h5>
                <h4>Leche</h4>
            </div>
            <div class="box">
                <img src="imagenes/limon.png">
                <h5>Limon</h5>
                <h4>Limon</h4>
            </div>
            <div class="box">
                <img src="imagenes/pan.png">
                <h5>Pan</h5>
                <h4>Pan</h4>
            </div>
            <div class="box">
                <a href="pollo.php">
                <img src="imagenes/pollo.png">
                <h5>Pollo</h5>
                <h4>Pollo</h4>
            </a>
            </div>
            <div class="box">
                <img src="imagenes/tortillas.png">
                <h5>Tortillas</h5>
                <h4>Tortillas</h4>
            </div>
        </div>
        
    </main>
</body>
</html>