document.getElementById("btn-iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn-registrarse").addEventListener("click", registrarse);
window.addEventListener("resize", anchoPagina);

var contenedor_formulario = document.querySelector(".contenedor-formulario");
var formulario_login = document.querySelector(".formulario-login");
var formulario_registro = document.querySelector(".formulario-registro");
var caja_trasera_login = document.querySelector(".caja-trasera-login");
var caja_trasera_registro = document.querySelector(".caja-trasera-registro");


function iniciarSesion(){
	if(window.innerWidth > 850)
	{
		formulario_registro.style.display = "none";
		contenedor_formulario.style.left = "10px";
		formulario_login.style.display="block";
		caja_trasera_registro.style.opacity="1";
		caja_trasera_login.style.opacity="0";
	}else{
		formulario_registro.style.display = "none";
		contenedor_formulario.style.left = "0px";
		formulario_login.style.display="block";
		caja_trasera_registro.style.display="block";
		caja_trasera_login.style.display="none";
	}
	

	
}


function anchoPagina(){
	if (window.innerWidth>850) {
		caja_trasera_login.style.display = "block";
		caja_trasera_registro.style.display = "block";
	}
	else{
		caja_trasera_registro.style.display = "block";
		caja_trasera_registro.style.opacity= "1";
		caja_trasera_login.style.display="none";
		formulario_login.style.display="block";
		formulario_registro.style.display="none";
		contenedor_formulario.style.left="0px";

	}
}
anchoPagina();



function registrarse(){
	if(window.innerWidth > 850){
		formulario_registro.style.display = "block";
		contenedor_formulario.style.left = "410px";
		formulario_login.style.display="none";
		caja_trasera_registro.style.opacity="0";
		caja_trasera_login.style.opacity="1";

	}
	else{
		formulario_registro.style.display = "block";
		contenedor_formulario.style.left = "0px";
		formulario_login.style.display="none";
		caja_trasera_registro.style.display="none";
		caja_trasera_login.style.display="block";
		caja_trasera_login.style.opacity="1";
	}
	

	
}

