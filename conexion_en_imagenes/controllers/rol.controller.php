<?php

require_once "models/roles.php";
class RolController {

	private $rol;

	public function __CONSTRUCT() {
		$this->rol = new Rol();
	}

	public function index() {
		$roles = $this->rol->leerRoles();
		require "views/administrador/rol/main.php";
	}

	public function create() {
		require "views/administrador/rol/crear.php";
	}

	public function store() {
		$rol = new Rol();
		$rol->setNombre($_POST['nombre']);
        $rol->crearRol();
		header('location:?controller=rol');
	}

	public function edit() {
		$rol = new Rol();
		$id = isset($_GET['rol_id']);
		if ($id) {
			$rol = $rol->consultarId($_GET['rol_id']);
		}
		require "views/administrador/rol/editar.php";
	}

	public function update() {
		$rol = new Rol();
		$id = intval($_POST['rol_id']);
		if ($id) {
			$rol = $rol->consultarId($id);
		}
		$rol->setNombre($_POST['nombre']);
		$rol->actualizarRol();
		header('location:?controller=rol');
	}

	public function destroy() {
		$rol = new Rol();
		$rol = $rol->consultarId($_GET['rol_id']);
		$rol->desactivarRol();
		header('location:?controller=rol');
	}


}

?>