<?php

	$hostname = 'localhost';
	$usuario = 'root';
	$contrasenia = '';


	$conexion = mysqli_connect ($hostname , $usuario , $contrasenia, 'b5_17605602_proyecto') or die("Error: ".mysqli_error($conexion));



	/* change character set to utf8 */
    /*Las siguientes lineas hacen que lo que importo con el CSV se vea bien ¿? no entiendo nada
    if (!$conexion->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $conexion->error);
    } else {
        printf("Current character set: %s\n", $conexion->character_set_name());
    }
    */
?>