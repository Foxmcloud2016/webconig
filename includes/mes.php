<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset='utf-8'>
</head>
<body>
	<?php

		switch ($mes) {
			case 'January':
				$mes = 'Enero';
				break;
			case 'February':
				$mes = 'Febrero';
				break;
			case 'March':
			$mes = 'Marzo';
			break;
			case 'April':
				$mes = 'Abril';
				break;
			case 'May':
				$mes = 'Mayo';
				break;	
			case 'June':
				$mes = 'Junio';
				break;
			case 'July':
				$mes = 'Julio';
				break;
			case 'August':
				$mes = 'Agosto';
				break;
			case 'September':
				$mes = 'Septiembre';
				break;
			case 'October':
				$mes = 'Octubre';
				break;
			case 'November':
				$mes = 'Noviembre';
				break;
			case 'December':
				$mes = 'Diciembre';
				break;				
			default:
				$mes = '______________';
				break;
		}

?>
</body>
</html>
