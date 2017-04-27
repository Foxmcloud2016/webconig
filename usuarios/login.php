<?php
	session_start();

	include('../mysql/conectar.php');

//Trae useer y pass del form del index
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$_SESSION['colegio'] = $_POST['colegio'];


//consulta a la DDBB si dichos usuarios y pass estan almacenados en ella
	$query_user = "SELECT USUARIO,NOMBRE_ATEI FROM USUARIOS WHERE USUARIO = '".$user."'";
	$query_pass = "SELECT PASS FROM USUARIOS WHERE PASS = '".$pass."'";
	$query_id = "SELECT ID_USUARIO FROM USUARIOS WHERE USUARIO = '".$user."'";
	$query_colegio = "SELECT COLEGIO FROM COLEGIOS WHERE ID_COLEGIO = '".$_POST['colegio']."'";
//extrae el registro de la DDBB donde estan almacenados usuario y pass. Si no coinciden, entonces valen NULL
	$result_user = mysqli_query($conexion, $query_user) or die("Error: ".mysqli_error($conexion));
	$result_pass = mysqli_query($conexion, $query_pass) or die("Error: ".mysqli_error($conexion));
	$result_id = mysqli_query($conexion, $query_id) or die("Error: ".mysqli_error($conexion));
	$result_colegio = mysqli_query($conexion, $query_colegio) or die("Error: ".mysqli_error($conexion));

//almacena los valores de la tabla en variables de sesion. Si no coinciden, entonces valen NULL
	$_SESSION['usuario']= mysqli_fetch_assoc($result_user);
	$_SESSION['contrasenia']= mysqli_fetch_assoc($result_pass);
	$_SESSION['id']= mysqli_fetch_assoc($result_id);
	$_SESSION['colegio_nombre']= mysqli_fetch_assoc($result_colegio);
//Cierro la conexion con la DDBB, ya que user y password fueron guardados en variables de sesión.
	mysql_close($conexion);


//Analiza si user o pass son NULL
	if (is_null($_SESSION['usuario']['USUARIO']) or is_null($_SESSION['contrasenia']['PASS'])) {
		//si al menos uno de ellos es NULL, redirecciona al INDEX
		header('Location: ../index.php');
		//Si ninguno es nulo (y por ende coinciden con los de la DDBB), redirecciona a home.
	}elseif (!is_null($_SESSION['usuario']['USUARIO']) and !is_null($_SESSION['contrasenia']['PASS'])) {
		 	#$query_user = "SELECT USUARIO FROM USUARIOS WHERE USUARIO = '".$user."'";
			#$result_user = mysqli_query($conexion, $query_user) or die("Error: ".mysqli_error($conexion));
			header('Location: ../home.php');

	}

?>
