<?php
	include('../includes/inicio_sesion.php');
	include('../mysql/conectar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema generador de actas</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../estilos/general.css">
	<link rel="stylesheet" type="text/css" href="../estilos/header.css">
	<link rel="stylesheet" type="text/css" href="../estilos/formulario.css">
	<script type="text/javascript" src='../js/myscripts.js'></script>
	<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#mySubmit").click(function() {
				var Form = $('form').serializeArray();
				var FormObjectitems = {};
				$.each(Form,
			    function(i, v) {
			        FormObjectitems[v.name] = v.value;
			    });
			    console.log(FormObjectitems)
				$.ajax({
					type: "POST",
					url: "alta_migracion_entrante.php",
					dataType : 'json',
					data: FormObjectitems,
					success: function(json) {
						console.log('correcto');
						console.log(json);
				$('#fo').hide(); //oculto mediante id
				document.getElementById("mensaje_oculto").innerHTML = json['data'];
				$('#mensaje_oculto').show(); //muestro mediante id
				document.getElementById('mensaje_oculto').style.display = 'block';

			},
			error: function (xhr, ajaxOptions, thrownError) {
		        alert(xhr.status);
		        alert(thrownError);
		      }
		});
			});
		});
	</script>
</head>
<body>
	<section id="contenedor">
		<?php
		include('../includes/header.php');
		?>

		<div id="cuerpo">
			<h2>Alta de Alumno Entrante:</h2>
			<form action="alta_migracion_entrante.php" method="POST" id="fo">
				<input type="hidden" name="tipo_comodatario" value="alumno">
				<label for="dni">DNI alumno:</label>
				<input type="text" name="dni" required>
				<label for="apellido"o>Apellido alumno:</label>
				<input type="text" name="apellido" required>
				<label for="nombre">Nombre alumno:</label>
				<input type="text" name="nombre" required>
				<label for="dni_adulto">DNI adulto:</label>
				<input type="text" name="dni_adulto" required>
				<label for="apellido_adulto">Apellido adulto:</label>
				<input type="text" name="apellido_adulto" required>
				<label for="nombre_adulto">Nombre adulto:</label>
				<input type="text" name="nombre_adulto" required>
				<label for="marca">Marca netbook:</label>
				<select name="marca">
					<option value="EXO">EXO</option>
					<option value="BGH">Positivo BGH</option>
					<option value="Samsung">Samsung</option>
					<option value="CX">CX</option>
					<option value="PC-BOX">PC-BOX</option>
					<option value="Noblex">Noblex</option>
					<option value="Coradir">Coradir</option>
				</select>
				<label for="modelo">Modelo netbook:</label>
				<select name="modelo">
					<option value="E10IS">E10IS</option>
					<option value="E11IS2">E11IS2</option>
					<option value="100NZC">100NZC</option>
					<option value="NT1015E">NT1015E</option>
					<option value="C5">C5</option>
					<option value="Schoolmate11">Schoolmate 11</option>
				</select>
				<label for="serie">Número de serie:</label>
				<input type="text" name="serie" required>
				<input class="oculto" type="text" name="tipo_comodatario" value="alumno">

				<?php 
					echo "<span>Seleccione Colegio de Origen:</span>
						<select id='colegio_d' name='colegio_d'>
							<option value=''>Seleccione Colegio de Origen... </option>";

					$id_colegio_fk = intval($_SESSION['colegio']);

					$querycol = "SELECT ID_COLEGIO,COLEGIO FROM COLEGIOS WHERE ID_COLEGIO != '".$id_colegio_fk."'";

					$resultadocolegios = $conexion->query($querycol);

					while($rowc = $resultadocolegios->fetch_assoc()){
						$id_col = $rowc["ID_COLEGIO"];
						$colegio = $rowc["COLEGIO"];
						$option = "<option value='".$id_col."' > $colegio </option>";
						echo $option;
					}
					echo "				</select>
							";
						 ?>
				<input class="button button2" type="button" id='mySubmit' value="Generar Acta"></input>
			</form>
			<div id="mensaje_oculto">
			</div>
		</div>

		<?php
		include('../includes/footer.php');
		?>
	</section>

</body>


</html>
