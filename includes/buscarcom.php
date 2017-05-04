<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	include('functions.php');

	$q = intval($_GET['q']);

	buscar_comodatario($q);
?>
