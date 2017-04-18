<?php
       include('mysql/conectar.php');

	//Consultar escuelas en la BBDD
	$queryescuelas="SELECT ID_COLEGIO,COLEGIO from COLEGIOS";
	$resultadoescuelas=$conexion->query($queryescuelas);

?>

<html>
	<head>
		<title>Sistema generador de actas</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="estilos/general.css">
		<link rel="stylesheet" type="text/css" href="estilos/index.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<section id="contenedor">
			<header>
				<div id="head"></div>
				<div id="titulo">
					<a href="index.php"><h1>Sistema Generador de Actas</h1></a>
				</div>
			</header>
			<div id="cuerpo">
				<h2>Login:</h2>
				<br/>
				<form action="usuarios/login.php" method="POST">
					<ul>
						<li>User:</li><input type="text" name="user">
						<li>Pass:</li><input type="password" name="pass">
						<li>Colegio:</li>

						<select name="colegio">
								    <option value="">Selecciona un colegio:</option>
								      <?php while($row=$resultadoescuelas->fetch_assoc()){  ?>                                                  

								              <option name="id_colegio" value="<?php echo $row['ID_COLEGIO'];?>" > <?php echo $row['COLEGIO'];?> </option>
								      <?php } ?>
								  </select>
						<br/>
						<li><input type="submit" name="submit" value="Iniciar sesión"></li>
					</ul>
				</form>
			</div>
			<footer>
				<div id="pie">	
				</div>
			</footer>
		</section>
	</body>
</html>