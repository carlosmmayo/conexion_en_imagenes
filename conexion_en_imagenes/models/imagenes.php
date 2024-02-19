<?php

Class Imagen {

	private int $imagen_id;
	private string $imagen;
	private int $usuario_id;
	private bool $estado;
	private $fecha_creacion;
	private $ultima_fecha_modificacion;

	private $conexion;

	public function __CONSTRUCT() {
		$this->conexion = BaseDeDatos::Conexion();
	}

	public function leerImagenes() {
		try {
			$consulta = $this->conexion->prepare("SELECT * FROM imagenes WHERE estado=1;");
			$consulta->execute();
			return $consulta->fetchAll(PDO::FETCH_CLASS,__CLASS__);
		} catch (Exception $e) {
			echo "Falló la consulta leer imagenes: ".$e->getMessage();
		}
	}

	public function imagenPersonal() {
		$imagen = ($_SESSION['usuario']->getUsuario_id());
		// var_dump($imagen);
		try {
			$consulta = $this->conexion->prepare("SELECT * FROM imagenes WHERE estado=1 AND usuario_id=$imagen;");
			$consulta->execute();
			if ($consulta) {
				return $consulta->fetchAll(PDO::FETCH_CLASS,__CLASS__);
			}
		} catch (Exception $e) {
			echo "Falló la consulta leer imagenes: ".$e->getMessage();
		}
	}

	public function subirImagen() {
		try {
			$consulta = "INSERT INTO imagenes(imagen, usuario_id) VALUES (?,?);";
			$this->conexion->prepare($consulta)
							->execute(array($this->imagen, $this->usuario_id));
			$this->imagen_id = $this->conexion->lastInsertId(); //Regresa el ultimo id insertado
			return $this; //Devuelve el objeto completo
		} catch (Exception $e) {
			echo "Falló la consulta subir imagen: ".$e->getMessage();
		}
	}

	public function consultarId($imagen_id) {
		try {
			$consulta = "SELECT * FROM imagenes WHERE imagen_id=? AND estado=1;";
			$consulta = $this->conexion->prepare($consulta);
			$consulta->setFetchMode(PDO::FETCH_CLASS,__CLASS__);
			$consulta->execute(array($imagen_id));
			return $consulta->fetch(); //fetch devuelve un solo registro
		} catch (Exception $e) {
			echo "Falló la consulta consultar id: ".$e->getMessage();
		}
	}

	public function desactivarImagen() {
		try {
			$consulta = "UPDATE imagenes SET estado=0 WHERE imagen_id=?;";
			$this->conexion->prepare($consulta)
							->execute(array($this->imagen_id));
		} catch (Exception $e) {
			echo "Falló la consulta desactivar imagen: ".$e->getMessage();
		}
	}

	////////////// Getter y Setter //////////////
	public function getImagen_id() : ?int {
		return $this->imagen_id;
	}

	public function setImagen_id(int $imagen_id) {
		$this->imagen_id = $imagen_id;
	}

	public function getImagen() : ?string {
		return $this->imagen;
	}

	public function setImagen(string $imagen) {
		$this->imagen = $imagen;
	}

	public function getUsuario_id() : ?int {
		return $this->usuario_id;
	}

	public function setUsuario_id(int $usuario_id) {
		$this->usuario_id = $usuario_id;
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