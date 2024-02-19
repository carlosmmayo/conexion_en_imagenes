const contenido = document.getElementById('cont-login');

const registro = document.getElementById('registro');
registro.addEventListener('click', () =>{
	const xhttp = new XMLHttpRequest();
	xhttp.onload = function() {
	  contenido.innerHTML = this.responseText;
	}
	xhttp.open("GET", "http://localhost/galeria_de_imagenes/views/registro/registro.php ");
	xhttp.send();
});


