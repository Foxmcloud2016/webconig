<html>
<head>
  <title>Sistema Administrativo</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="estilos/general.css">
  <link rel="stylesheet" type="text/css" href="estilos/header.css">
  <link rel="stylesheet" type="text/css" href="estilos/formulario.css">
  <script type="text/javascript" src='js/myscripts.js'></script>
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
</head>
<body>
  <section id="contenedor">
    <div id="cuerpo">
      <form>
      <h1>Alta de base de datos!...</h1>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $mysql_database = 'b5_17605602_proyecto';

      // Create connection
      $conn = mysqli_connect($servername, $username, $password);
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
          // Create database
      $sql = "CREATE DATABASE b5_17605602_proyecto CHARACTER SET utf8 COLLATE utf8_general_ci";
      if (mysqli_query($conn, $sql)) {
          echo "<div class='insert_ok'>Base de datos creada satisfactoriamente....</div><br>";
          echo "<div class='insert_ok'>Cargando Tablas e informacion....</div><br>";
          mysqli_select_db($conn,$mysql_database) or die("<div class='insert_wrong'>Error selecting MySQL database:" . mysql_error(). "</div><br>");

          // Temporary variable, used to store current query
          $templine = '';
          // Read in entire file
          $lines = file('b5_17605602_proyecto.sql');
          // Loop through each line
          foreach ($lines as $line)
          {
          // Skip it if it's a comment
          if (substr($line, 0, 2) == '--' || $line == '')
              continue;

          // Add this line to the current segment
          $templine .= $line;
          // If it has a semicolon at the end, it's the end of the query
          if (substr(trim($line), -1, 1) == ';')
          {
              // Perform the query
              mysqli_query($conn,$templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
              // Reset temp variable to empty
              $templine = '';
          }
          }
          echo "<div class='insert_ok'>Trabajo Finalizado. Por favor no vuelva a ejecutar este script de nuevo. puede empezar a utilizar el sistema dirigiendose al siguiente link <a href='index.php'> ir al inicio </a></div><br>";


      } else {
          echo "<div class='insert_ok'>Error Creando base de datos: " . mysqli_error($conn)."</div><br>";
      }
      mysqli_close($conn);

      ?>
      </form>
  </div>
  </section>
  </body>
</html>
