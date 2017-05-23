<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
	$id_comodatario = $_GET['id'];
	$id_colegio = $_SESSION['colegio'];
	

	$querycomodatario="SELECT * FROM COMODATARIOS WHERE ID_COMODATARIO = '".$id_comodatario."'";
	$resultadocomodatario=$conexion->query($querycomodatario);

	$tipo_colegio = $_SESSION['tipo_colegio'];
?>


<html>

<head>
	<title>Modificar Comodatario</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<section id="contenedor">
			<?php include('../includes/header.php'); ?>
			<div id="cuerpo">
			<?php while($row=$resultadocomodatario->fetch_assoc()){?>
				<h2>Modificar Comodatario (<?php echo $row['TIPO_COM'] ;?>)</h2>
				<br/>
				<form action='realizar_modi_comodatario.php' method ="POST">
					<input type="hidden" name="id_comodatario" value="<?php echo $row['ID_COMODATARIO'];?>" />
					<label for= 'cuil'>CUIL</label>
					<input type="text" name="cuil" id="cuil" value="<?php echo $row['CUIL'];?>"> </input>

					<label for= 'dni'>DNI</label>
					<input type="text" name="dni" id="dni" value="<?php echo $row['DNI_COM'];?>" required> </input>

					<label for= 'apeynom'>Apellido y Nombre</label>
					<input type="text" name="apeynom" id="apeynom" value="<?php echo $row['APEYNOM'];?>" required> </input>
					<!--A continuaciòn se configuró para que aparezcan los campos APEYNOM_A y DNI_ADULTO, sólo si son alumnos-->
					<?php 
						if ($tipo_colegio == 'Secundaria' || $tipo_colegio == 'Especial') {
							if ($row['TIPO_COM'] == 'docente') {
								//no mostrar nada
							}elseif ($row['TIPO_COM'] == 'alumno') { ?>
							<label for= 'dni_adulto'>DNI Adulto</label>
								<input type="text" name="dni_adulto" id="dni_adulto" value="<?php echo $row['DNI_ADULTO'];?>" required></input>

								<label for= 'apeynom_a'>Apellido y Nombre Adulto</label>
								<input type="text" name="apeynom_a" id="apeynom_a" <?php echo "value= '".$row['APEYNOM_A']."'";?> required></input>
								<?php
							}
						}
					?>

					<label for= 'marca'>Marca</label>
					<input type="text" name="marca" id="marca" <?php echo "value= '".$row['MARCA']."'";?> required></input>

					<label for= 'modelo'>Modelo</label>
					<input type="text" name="modelo" id="modelo" <?php echo "value= '".$row['MODELO']."'";?> required></input>

					<label for= 'serie'>Serie</label>
					<input type="text" name="serie" id="serie" <?php echo "value= '".$row['SERIE']."'";?> required></input>
					<!--A continuaciòn se configuró para que aparezcan los campos CURSO, DIVISION y TURNO, sólo si son alumnos-->	
					<?php 
						if ($tipo_colegio == 'Secundaria' || $tipo_colegio == 'Especial') {
							if ($row['TIPO_COM'] == 'docente') {
								//no mostrar nada
							}elseif ($row['TIPO_COM'] == 'alumno') { ?>
							<label for= 'curso'>Curso</label>
							<input type="text" name="curso" id="curso" <?php echo "value= '".$row['CURSO']."'";?> required></input>

							<label for= 'division'>División</label>
							<input type="text" name="division" id="division" <?php echo "value= '".$row['DIVISION']."'";?> required></input>

							<label for= 'turno'>Turno</label>
							<select type="text" name="turno" id="turno" <?php echo "value= '".$row['TURNO']."'";?> required>
								<option value="mañana">Mañana</option>
								<option value="tarde">Tarde</option>
								<option value="vespertino">Vespertino</option>
							</select> 
								<?php
							}
						}
					?>					
					
					<!--Si cuando cargaron el/los comodatarios a través de un alta masiva y en el excel no aclararon si era alumno o docente tenemos un problema, porque en esta sección no se puede cambiar eso - Por ello hago el siguiente condicional que si encuentra que el comodatario no tiene especificado si es alumno o docente, entonces le aparece un select para determinarlo y cargarlo a la BBDD-->
					<?php if ($row['TIPO_COM'] == '') { ?>
							<label for="tipo_com">Tipo de comodatario</label>
							<select name="tipo_com" id="tipo_com">
								<option value="alumno">Alumno</option>
								<option value="docente">Docente</option>
							</select>

								<input type="hidden" name="dni_adulto" id="dni_adulto" value="<?php echo $row['DNI_ADULTO'];?>" required></input>
								<input type="hidden" name="apeynom_a" id="apeynom_a" <?php echo "value= '".$row['APEYNOM_A']."'";?> required></input>

							<input type="hidden" name="curso" id="curso" <?php echo "value= '".$row['CURSO']."'";?> required></input>

							<input type="hidden" name="division" id="division" <?php echo "value= '".$row['DIVISION']."'";?> required></input>

							<input type="hidden" name="turno" id="turno" <?php echo "value= '".$row['TURNO']."'";?> required></input> 

					<?php	}else{?>
						<input type="hidden" name="tipo_com" id="tipo_com" <?php echo "value= '".$row['TIPO_COM']."'";?>></input>
					
					<?php } }?>
					<input class = 'button' type="submit" value="Modificar Comodatario"></input>
					<a class='boton button2' href="comodatarios_todos.php">Cancelar</a>
					</form>
			</div>
		</div>
		<?php include('../includes/footer.php'); ?>
	</section>
</body>
</html>
