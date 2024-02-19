	<form action="?controller=usuario&action=store" method="post">
        <div class="form-cont-p">
            <div class="form-reg form2">	
                <div>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" title="Nombre"/>
                </div>
                <div>
                    <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" title="Apellidos"/>
                </div>
            </div>
            <div class="form-reg form2">	
                <div>
                    <input type="text" name="identificacion" id="identificacion" placeholder="Identificación" title="Identificación"/>
                </div>
                <div>
                    <input type="text" name="fecha_nacimiento" id="fecha-nacimiento" title="Fecha nacimiento"/>
                </div>
            </div>
            <div>
                <select name="genero" id="genero" class="genero" title="Género">
                    <option>Seleccione Género</option>
                    <option value="m">Masculino</option>
                    <option value="f">Femenino</option>
                    <option value="o">Otro</option>
                </select>
            </div>
            <div>
                <input type="text" name="telefono" id="telefono" placeholder="Teléfono" title="Teléfono"/>
            </div>
            <div class="form-reg">
                <input type="email" name="email" id="email" placeholder="Email" title="Email"/>
            </div>
            <div class="form-reg">	
                <input type="password" name="contrasena" placeholder="Contraseña" title="Contraseña"/>
            </div>
            <div class="form-reg">
                <!-- <input type="submit" value="Enviar"> -->
                <button type="submit">Enviar</button>
            </div>
        </div>
	</form>