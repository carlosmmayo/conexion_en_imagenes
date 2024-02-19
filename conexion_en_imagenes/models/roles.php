<?php

Class Rol {

	private int $rol_id;
	private String $nombre;
	private bool $estado;
	private $fecha_creacion;
	private $ultima_fecha_modificacion;

	private $conexion;

	public function __CONSTRUCT() {
		$this->conexion = BaseDeDatos::Conexion();
	}

	public function leerRoles() {
		try {
			$consulta = $this->conexion->prepare("SELECT * FROM roles WHERE estado=1;");
			$consulta->execute();
			return $consulta->fetchAll(PDO::FETCH_CLASS,__CLASS__);
		} catch (Exception $e) {
			echo "Falló la consulta leer roles: ".$e->getMessage();
		}
	}

	public function crearRol() {
		try {
			$consulta = "INSERT INTO roles(nombre) VALUES (?);";
			$this->conexion->prepare($consulta)
							->execute(array($this->nombre));
			$this->rol_id = $this->conexion->lastInsertId(); //Regresa el ultimo id insertado
			return $this; //Devuelve el objeto completo
		} catch (Exception $e) {
			echo "Falló la consulta crear rol: ".$e->getMessage();
		}
	}

	public function consultarId($rol_id) {
		try {
			$consulta = "SELECT * FROM roles WHERE rol_id=? AND estado=1;";
			$consulta = $this->conexion->prepare($consulta);
			$consulta->setFetchMode(PDO::FETCH_CLASS,__CLASS__);
			$consulta->execute(array($rol_id));
			return $consulta->fetch(); //fetch devuelve un solo registro
		} catch (Exception $e) {
			echo "Falló la consulta consultar id: ".$e->getMessage();
		}
	}

	public function actualizarRol() {
		try {
			$consulta = "UPDATE roles SET nombre=? WHERE rol_id=?;";
			$this->conexion->prepare($consulta)
							->execute(array($this->nombre, $this->rol_id));
		} catch (Exception $e) {
			echo "Falló la consulta actualizar rol: ".$e->getMessage();
		}
	}

	public function desactivarRol() {
		try {
			$consulta = "UPDATE roles SET estado=0 WHERE rol_id=?;";
			$this->conexion->prepare($consulta)
							->execute(array($this->rol_id));
		} catch (Exception $e) {
			echo "Falló la consulta desactivar rol: ".$e->getMessage();
		}
	}

	////////////// Getter y Setter //////////////
	public function getRol_id() : ?int {
		return $this->rol_id;
	}

	public function setRol_id(int $rol_id) {
		$this->rol_id = $rol_id;
	}

	public function getNombre() : ?string {
		return $this->nombre;
	}

	public function setNombre(string $nombre) {
		$this->nombre = $nombre;
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

