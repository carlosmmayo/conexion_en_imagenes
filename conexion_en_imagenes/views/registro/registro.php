<div class="cont-login-tex">
	<h1 class="titulo" title="Título Conexión en Imágenes">Conexión en Imágenes</h1>
	<h2 class="titulo-reg" title="Registro">Registro</h2>
</div>
<form action="?controller=usuario&action=registro" method="post" class="form-registro" id="form-registro">
	<div class="form-cont-p">
		<div class="form-reg form2">	
			<div>
				<input type="text" name="nombre" id="nombre" placeholder="Nombre" title="Nombre" required/>
			</div>
			<div>
				<input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" title="Apellidos" required/>
			</div>
		</div>
		<div class="form-reg form2">	
			<div>
				<input type="text" name="identificacion" id="identificacion" placeholder="Identificación" title="Identificación" required/>
			</div>
			<div>
				<input type="date" name="fecha_nacimiento" id="fecha-nacimiento" title="Fecha nacimiento" required/>
			</div>
		</div>
		<div class="form-reg">
			<input type="email" name="email" id="email" placeholder="Email" title="Email" required/>
		</div>
		<div class="form-reg">	
			<input type="password" name="contrasena" placeholder="Contraseña" title="Contraseña" required/>
		</div>
		<div class="form-reg form2">	
			<div>
				<select name="genero" id="genero" class="opciones" title="Género" required>
					<option>Seleccione Género</option>
					<option value="m">Masculino</option>
					<option value="f">Femenino</option>
					<option value="o">Otro</option>
				</select>
			</div>
			<div>
				<input type="text" name="telefono" id="telefono" placeholder="Teléfono" title="Teléfono" required/>
			</div>
		</div>
		<div class="form-reg">
			<!-- <input type="submit" value="Enviar"> -->
			<button>Enviar</button>
		</div>
	</div>
</form>
<div class="entrar">
	<p>Tienes una cuenta <a href="?controller=home&action=home" id="entrar" title="entrar">entra</a></p>
</div>