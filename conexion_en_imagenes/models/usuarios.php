<?php

class Usuario {

	private int $usuario_id;
	private string $nombre;
	private string $apellidos;
	private string $identificacion;
	private string $fecha_nacimiento;
	private string $genero;
	private string $telefono;
	private string $email;
	private string $contrasena;
	private int $rol_id;
	private bool $estado;
	private $fecha_creacion;
	private $ultima_fecha_modificacion;

	private $conexion;

	////////////// Constructor //////////////
	public function __CONSTRUCT() {
		$this->conexion = BaseDeDatos::Conexion();
	}

	public function leerUsuarios() {
		try {
			$consulta = $this->conexion->prepare("SELECT * FROM usuarios WHERE estado=1;");
			$consulta->execute();
			return $consulta->fetchAll(PDO::FETCH_CLASS,__CLASS__);
		} catch (Exception $e) {
			echo "Falló la consulta leer usuarios: ".$e->getMessage();
		}
	}

	public function crearUsuario() {
		try {
			$consulta = "INSERT INTO usuarios(nombre, apellidos, identificacion, fecha_nacimiento, genero, telefono, email, contrasena) VALUES (?,?,?,?,?,?,?,?);";
			$this->conexion->prepare($consulta)
							->execute(array($this->nombre, $this->apellidos, $this->identificacion, $this->fecha_nacimiento, $this->genero, $this->telefono, $this->email, $this->contrasena));
			$this->usuario_id = $this->conexion->lastInsertId(); //Regresa el ultimo id insertado
			return $this; //Devuelve el objeto completo
		} catch (Exception $e) {
			echo "Falló la consulta crear usuario: ".$e->getMessage();
		}
	}

	public function consultarId($usuario_id) {
		try {
			$consulta = "SELECT * FROM usuarios WHERE usuario_id=? AND estado=1;";
			$consulta = $this->conexion->prepare($consulta);
			$consulta->setFetchMode(PDO::FETCH_CLASS,__CLASS__);
			$consulta->execute(array($usuario_id));
			return $consulta->fetch(); //fetch devuelve un solo registro
		} catch (Exception $e) {
			echo "Falló la consulta consultar id: ".$e->getMessage();
		}		
	}

	// public function actualizarUsuario() {
	// 	try {
	// 		$consulta = "UPDATE usuarios SET nombre=?, apellidos=?, identificacion=?, fecha_nacimiento=?, genero=?, telefono=?, email=?, contrasena=? WHERE usuario_id=?;";
	// 		$this->conexion->prepare($consulta)
	// 						->execute(array($this->nombre, $this->apellidos, $this->identificacion, $this->fecha_nacimiento, $this->genero, $this->telefono, $this->email, $this->contrasena, $this->usuario_id));
	// 	} catch (Exception $e) {
	// 		echo "Falló la consulta actualizar usuario: ".$e->getMessage();
	// 	}
	// }

	// public function desactivarUsuario() {
	// 	try {
	// 		$consulta = "UPDATE usuarios SET estado=0 WHERE usuario_id=?;";
	// 		$this->conexion->prepare($consulta)
	// 						->execute(array($this->usuario_id));
	// 	} catch (Exception $e) {
	// 		echo "Falló la consulta desactivar usuario: ".$e->getMessage();
	// 	}
	// }

	public function validar($email, $contrasena) {	
		$consulta = $this->conexion->prepare("SELECT * FROM usuarios WHERE email=?;");
		$consulta->setFetchMode(PDO::FETCH_CLASS,__CLASS__);
		$consulta->execute(array($email));
		$res = $consulta->fetch();
		$res->conexion = null;
		if ((password_verify($contrasena, $res->getContrasena())) and ($res->getEstado() == 1)) {
			$_SESSION['usuario'] = $res;
			return true;	
		} else {
			session_destroy();
			return false;
		}		
	}

	////////////// Getter y Setter //////////////
	public function getUsuario_id() : ?int {
		return $this->usuario_id;
	}

	public function setUsuario_id(int $usuario_id) {
		$this->usuario_id = $usuario_id;
	}

	public function getNombre() : ?string {
		return $this->nombre;
	}

	public function setNombre(string $nombre) {
		$this->nombre = $nombre;
	}

	public function getApellidos() : ?string {
		return $this->apellidos;
	}

	public function setApellidos(string $apellidos) {
		$this->apellidos = $apellidos;
	}

	public function getIdentificacion() : ?string {
		return $this->identificacion;
	}

	public function setIdentificacion(string $identificacion) {
		$this->identificacion = $identificacion;
	}

	public function getFecha_nacimiento() : ?string {
		return $this->fecha_nacimiento;
	}

	public function setFecha_nacimiento(string $fecha_nacimiento) {
		$this->fecha_nacimiento = $fecha_nacimiento;
	}

	public function getGenero() : ?string {
		return $this->genero;
	}

	public function setGenero(string $genero) {
		$this->genero = $genero;
	}

	public function getTelefono() : ?string {
		return $this->telefono;
	}

	public function setTelefono(string $telefono) {
		$this->telefono = $telefono;
	}

	public function getEmail() : ?string {
		return $this->email;
	}

	public function setEmail(string $email) {
		$this->email = $email;
	}

	public function getContrasena() : ?string {
		return $this->contrasena;
	}

	public function setContrasena(string $contrasena) {
		$this->contrasena = $contrasena;
	}

	public function getRol_id() : ?int {
		return $this->rol_id;
	}

	public function setRol_id(int $rol_id) {
		$this->rol_id = $rol_id;
	}

	public function getEstado() : ?bool {
		return $this->estado;
	}

	public function setEstado(bool $estado) {
		$this->estado = $estado;
	}

	public function getFecha_creacion() {
		return $this->fecha_creacion;
	}

	public function getUltima_fecha_modificacion() {
		return $this->ultima_fecha_modificacion;
	}

}

?>