<header>
	<div id="head">
		<div id="titulo">
			<a href="/proyecto/home.php"><h1>Sistema Administrativo</h1></a>
		</div>
		<div class="info-login">
			<span>Buenos dias, <?php echo ucwords(strtolower($_SESSION['usuario']['NOMBRE_ATEI'])) ?></span>
			<br>
			<span>Escuela: <?php echo $_SESSION['colegio_nombre']['COLEGIO'] ?></span>
		</div>
		<div id="nav">
			<div class="dropdown">
				<button class="dropbtn">Comodatarios</button>
				<div class="dropdown-content">
					<div class="dropdown_subcontent">
						<button class="subdropbtn">Alta de Comodatarios</button>
						<div class="dropdown-content-sub">
							<a class="dropdown-content-superior" href="/proyecto/comodatarios/alta_alumno.php">Alta Alumno</a>
							<a class="dropdown-content-superior" href="/proyecto/comodatarios/alta_alumno_ISFD.php">Alta Alumno ISFD</a>
							<a class="dropdown-content-inferior" href="/proyecto/comodatarios/alta_docente.php">Alta Docente</a>
							<a class="dropdown-content-inferior" href="/proyecto/comodatarios/alta_masiva.php">Alta Masiva</a>
						</div>
					</div>
					<a class="dropdown-content-inferior" href="/proyecto/comodatarios/listar_comodatarios.php">Listar Comodatarios</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Colegios</button>
				<div class="dropdown-content">
					<a class="dropdown-content-inferior" class="dropdown-content-superior" href="/proyecto/colegios/colegios_list.php">Listado de Colegios</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Procedimientos</button>
				<div class="dropdown-content">
					<div class="dropdown_subcontent">
						<button class="subdropbtn">Migraciones</button>
						<div class="dropdown-content-sub">
							<a class="dropdown-content-superior" href="/proyecto/migraciones/migracion.php">Realizar migracion saliente</a>
							<a class="dropdown-content-superior" href="/proyecto/migraciones/migracion_entrante.php">Realizar migracion entrante</a>
							<a class="dropdown-content-inferior" href="/proyecto/migraciones/listar_migraciones.php">Listar migraciones</a>
						</div>
					</div>
					<div class="dropdown_subcontent">
						<button class="subdropbtn">Comodatos</button>
						<div class="dropdown-content-sub-comodatos">
							<a class="dropdown-content-superior" href="/proyecto/comodatos/comodato_alumno.php">Alumnos</a>
							<a class="dropdown-content-inferior" href="/proyecto/comodatos/comodato_docente.php">Docentes</a>
						</div>
					</div>
					<!--a class="dropdown_subcontent" href="/proyecto/cesion/cesion.php">Egresados</a-->
						<div class="dropdown_subcontent">
							<button class="subdropbtn">Egresados</button>
							<div class="dropdown-content-sub-egresados">
								<a class="dropdown-content-superior" href="/proyecto/cesion/lista_egresados.php">Listado de Egresados</a>
								<a class="dropdown-content-superior" href="/proyecto/cesion/cesion.php">Cargar un egresado</a>
								<a class="dropdown-content-inferior" href="/proyecto/cesion/cesion_masiva.php">Alta Masiva de Egresados</a>
							</div>
						</div>
					<a class="dropdown-content-inferior" href="/proyecto/devolucion/devolucion.php">Devolución de comodato</a>
				</div>
			</div>

				<div class="dropdown">
				<button class="dropbtn">Escolares</button>
				<div class="dropdown-content">
					<a class="dropdown-content-inferior" href="/proyecto/st/st.php">Acta de ST</a>
					<div class="dropdown_subcontent">
						<button class="subdropbtn">Préstamos</button>
							<div class="dropdown-content-sub-prestamos">
								<a class="dropdown-content-superior" href="/proyecto/prestamos/parque_escolar.php">Cargar Net al parque escolar</a>
								<a class="dropdown-content-inferior" href="/proyecto/prestamos/admin_prestamo.php">Administrar prestamos</a>
								<a class="dropdown-content-inferior" href="/proyecto/prestamos/nets_parque_escolar.php">Historial de Préstamos</a>
							</div>
						</div>
					</div>
				</div>	
		</div>
	</div>
</header>
