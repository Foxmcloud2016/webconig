<?php
include('../includes/inicio_sesion.php');
include('../mysql/conectar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema Administrativo</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
</head>
<body>
	<?php
	//AL PRINCIPIO COMPRUEBO SI HICIERON CLICK EN ALGUNA PÁGINA 
	if(isset($_GET['page']))
	{
		$page= $_GET['page'];
	}
	else
	{
	    //SI NO DIGO Q ES LA PRIMERA PÁGINA
		$page=1;
	}
	?>
	<section id="contenedor">
		<?php include('../includes/header.php'); ?>
		<div id="cuerpo">
			<h2>Lista de Comodatarios</h2>
			<?php
			$consulta = "SELECT * FROM comodatarios";
						//Var_dump($row);
			$datos=$conexion->query($consulta);
			$num_rows = mysqli_num_rows($datos);
						//echo $contador;

				//ACA SE DECIDE CUANTOS RESULTADOS MOSTRAR POR PÁGINA
			$rows_per_page= 10;

		//CALCULO LA ULTIMA PÁGINA
			$lastpage= ceil($num_rows / $rows_per_page);

		//COMPRUEBO QUE EL VALOR DE LA PÁGINA SEA CORRECTO Y SI ES LA ULTIMA PÁGINA
			$page=(int)$page;

			if($page > $lastpage)
			{
				$page= $lastpage;
			}

			if($page < 1)
			{
				$page=1;
			}

		//CREO LA SENTENCIA LIMIT PARA AÑADIR A LA CONSULTA QUE DEFINITIVA
			$limit= 'LIMIT '. ($page -1) * $rows_per_page . ',' .$rows_per_page;

		//REALIZO LA CONSULTA QUE VA A MOSTRAR LOS DATOS (ES LA ANTERIO + EL $limit)
			$consulta .=" $limit";
			$consulta_limit=mysqli_query($conexion,$consulta);

			if(!$consulta_limit)
			{
		        //SI FALLA LA CONSULTA MUESTRO ERROR
				die('Invalid query: ' . mysqli_error());
			}
			else
			{
			//Si no hay consulta con limit no hace nada
			}
			?>
			<?php
			if ($num_rows == 0) {
				echo "<span>No existen comodatarios cargados aún.</span>";
			}else if ($num_rows >= 1) {?>
			<div>
				<table>
					<!-- Header de tablas con nombres de columnas !-->
					<tr>
						<th>Tipo</th>
						<th>CUIL</th>
						<th>DNI</th>
						<th>Apellido y nombre</th>
						<th>DNI Adulto</th>
						<th>Apellido y nombre Adulto</th>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Serie</th>
						<!--th>ID_COMODAT</th-->
						<th>Acciones</th>
					</tr>
					<!-- Bucle while para completar tabla con todos los registros de comodatarios !-->
					<?php while($row = mysqli_fetch_assoc($consulta_limit)){?>
					<tr>
						<td><?php echo $row['TIPO_COM'];?> </td>
						<td><?php echo $row['CUIL'];?> </td>
						<td><?php echo $row['DNI_COM'];?> </td>
						<td><?php echo $row['APEYNOM'];?> </td>
						<td><?php echo $row['DNI_ADULTO'];?> </td>
						<td><?php echo $row['APEYNOM_A'];?> </td>
						<td><?php echo $row['MARCA'];?> </td>
						<td><?php echo $row['MODELO'];?> </td>
						<td><?php echo $row['SERIE'];?> </td>
						<!--td><?php echo $row['ID_COMODATARIO'];?> </td-->
						<td> <a class="button button2" href='modificar_comodatario.php?id=<?php echo $row['ID_COMODATARIO'] ?>'>Modificar</a></td>
					</tr>
					<?php } ?>
					<?php } ?>
				</table>
			</div>
			<?php
			include('../includes/paginacion.php');
			?>
		</div>
		<?php include('../includes/footer.php'); ?>
	</section>
</body>
</html>
