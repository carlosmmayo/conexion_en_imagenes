<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Conexión en Imágenes</title>
	<meta name="author" content="Carlos M Mayo"/>
	<link rel="stylesheet" href="http://localhost/conexion_en_imagenes/assets/css/reset.css"/>
	<link rel="stylesheet" href="http://localhost/conexion_en_imagenes/assets/css/style/indexPrincipal/grid1.css"/>
	<link rel="stylesheet" href="http://localhost/conexion_en_imagenes/assets/css/style/indexPrincipal/style.css"/>
	<link rel="stylesheet" href="http://localhost/conexion_en_imagenes/assets/css/style/registro/registro2.css"/>
	<script src="http://localhost/conexion_en_imagenes/assets/js/script.js " defer></script>
</head>
<body>
	<section class="contenido">
		<div class="login">
			<div class="cont-login" id="cont-login">
				<div class="cont-login-tex">
					<h1 class="titulo" title="Título Conexión en Imágenes">Conexión en Imágenes</h1>
					<h2 class="titulo-acceso" title="Acceso">Acceso</h2>
				</div>
				<form action="?controller=usuario&action=login" method="post" class="form" id="form">
					<div class="form-cont-p">
						<div class="form-cont">
							<input type="email" name="email" id="email" placeholder="Email" title="Email" required/>
						</div>
						<div class="form-cont">	
							<input type="password" name="contrasena" placeholder="Contraseña" title="Contraseña" required/>
						</div>
						<div class="form-cont">
							<!-- <input type="submit" value="Enviar"> -->
							<button type="submit">Enviar</button>
						</div>
					</div>
				</form>
				<div class="no-registro">
					<p>No tienes una cuenta <span id="registro" title="Registrate">Registrate</span></p>
				</div>
			</div>	
		</div>
		<main class="conten-principal">
		<div class="principal-section">
				<div class="img-section">
					<h1>Las fotografías son ventanas a nuestro pasado y puertas hacia el futuro</h1>
				</div>
				<div class="conten-info">
					<div class="bienvenido">
						<h3> Los amantes de la vida, sabemos que los tesoros más valiosos son los instantes 
							compartidos con familiares y amigos. Es por eso que hemos creado "Conexión en Imágenes," 
							un espacio dedicado a celebrar la belleza de la vida a través de fotografías y recuerdos.
						</h3>
					</div>
					<div class="magia-fotografica">
						<div class="img-ft1">
							<div>
							</div>
						</div>
						<div class="img-ft2">
							<div></div>
						</div>
					</div>
					<div class="unete-celebra">
						<div class="unete">
							<h3>Únete a la Celebración</h3>
							<p>Conexión en Imágenes no es solo nuestra historia, es un espacio común donde todos pueden 
								unirse a la celebración de la vida. ¿Tienes una historia que contar? ¿Una foto que desees 
								compartir? Este es el lugar para hacerlo. La conexión a través de nuestras experiencias nos 
								hace más fuertes como comunidad.
							</p>
						</div>
						<div class="ha-parte">
							<h3>Haz Parte de Nuestra Comunidad</h3>
							<p>Queremos que esta página sea un espacio donde familiares, amigos y aquellos que deseen celebrar 
								la vida se unan. ¿Tienes historias para compartir, imágenes para subir o simplemente quieres saludarnos? 
								Estamos emocionados por la oportunidad de conectarnos contigo.
							</p>
						</div>
					</div>
					<div class="copy">
						<p>Carlos M Mayo &#169 | 2024</p>
					</div>
				</div>
			</div>
		</main>
	</section>
</body>
</html>