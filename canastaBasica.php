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
                        <li><a href="#">Canasta basica</a></li>
                        <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="acercaDe.php">Acerca de</a></li>
                        <li id="cerrar_sesion"><a href="php/cerrar_sesion.php" >Cerrar sesion</a></li>
                    </ul>
                </nav>
            </div>

        </div>

    </header>

    <main>
        <article>
            <h2 align="center">Canasta Basica</h2>
            <p><pre>                Aceite vegetal comestible 1 pieza de 946 ml
                Arroz en grano 1 kg
                Atún en aceite en hojuela (máx. 5% soya) 2 latas de 140 g
                Azúcar estándar 1 kg
                Carne de res 1 kg
                Cebolla blanca 1 kg
                Chile jalapeño 1 kg
                Carne de cerdo 1 kg
                Frijol negro 900 grs
                Huevo de gallina 1 paquete de 18 piezas
                Jabón de tocador 1 pza
                Jitomate saladet 1 kg
                Leche de vaca 5 litros
                Limón 1 kg
                Manzana 1 kg
                Plátano 1 kg
                Pan blanco de caja 1 paquete de 680 grs
                Papa blanca 1 kg
                Papel higiénico 1 bolsa de 4 piezas
                Pasta para sopa 1 paquete 220 grs
                Carne de Pollo 1 kg
                Sardina en tomate en lata 1 lata de 425g
                Tortilla de maíz de supermercado 4kg
                Zanahoria 1 kg</pre></p>
            
            
        </article>
        
    </main>
</body>
</html>