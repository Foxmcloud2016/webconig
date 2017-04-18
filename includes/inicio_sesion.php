<?php
	session_start();

	if (!isset($_SESSION['usuario']['USUARIO'])) {
		if (!isset($_SESSION['contrasenia']['PASS'])) {
			header("Location: index.php");
		}
		
	}

?>