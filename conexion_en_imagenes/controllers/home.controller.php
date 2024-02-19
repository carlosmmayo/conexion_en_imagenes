<?php

class HomeController {

	function index() {
		$rol = ($_SESSION['usuario']->getRol_id());
		if ($rol == 1) {
			require_once "views/administrador/admin.php";
		} else if ($rol == 2) {
			require "views/contenido/header.php";
			// require_once "views/usuario/home.php";
			header('location:?controller=imagen&action=index');
			require "views/contenido/footer.php";
		} else {
			header('location: index.php?error');	
		}
	}

	public function home() {
		require_once "views/index.php";
	}
	
}

?>