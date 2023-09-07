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
    <link rel="stylesheet" href="css/estilos4.css">

   
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
                        <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="acercaDe.php">Acerca de</a></li>
                        <li id="cerrar_sesion"><a href="php/cerrar_sesion.php" >Cerrar sesion</a></li>
                    </ul>
                </nav>
            </div>

        </div>

    </header>

    <main class="table">
        <section class="table__header">
            <h1>POLLO</h1>
            
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Tienda <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Distancia <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Precio <span class="icon-arrow">&UpArrow;</span></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> Walmart </td>
                        <td> 12 Km </td>
                        <td> $49.00 </td>
                        
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> Aurrera </td>
                        <td> 7 Km </td>
                        <td> $44.00 </td>
                        
                    </tr>
                     <tr>
                        <td> 3 </td>
                        <td> Chedraui </td>
                        <td> 13 Km </td>
                        <td> $47.00 </td>
                        
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> Polleria "Pollito" </td>
                        <td> 2.2 Km </td>
                        <td> $42.50 </td>
                        
                    </tr>
                    
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>