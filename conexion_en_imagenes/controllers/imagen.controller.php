<?php

require_once "models/imagenes.php";
class ImagenController {

	private $imagen;

	public function __CONSTRUCT() {
		$this->imagen = new Imagen();
	}

	public function index() {
		$todos = $this->imagen->leerImagenes();
		require "views/usuario/home.php";
	}


	public function imagen() {
		// $imagen = new Imagen();
		// $imagen->imagenPersonal();
		$todos = $this->imagen->imagenPersonal();
		require "views/usuario/imagenes.php";
	}

	public function create() {
		require "views/usuario/imagen.php";
	}

	public function store() {
		$usuario_id = ($_SESSION['usuario']->getUsuario_id());
		// var_dump($_FILES);
		// exit();
		$imagen = new Imagen();
		$imagen->setImagen($_FILES['imagen']['name']);
		move_uploaded_file($_FILES['imagen']['tmp_name'], "assets/uploads/".$_FILES['imagen']['name']);
		$imagen->setUsuario_id($usuario_id);
		$imagen->subirImagen();
		header('location:?controller=imagen&action=create');
	}

}

?>