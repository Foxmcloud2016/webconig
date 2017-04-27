<?php 
	function estado_egresado($n_estado)
	{
	    switch ($n_estado) {
	    case 1:
	        return "Pendiente";
	        break;
	    case 2:
	        return "Pendiente de Retiro";
	        break;
	    case 3:
	    	return "Retirado";
	        break;
	    case 4:
	    	return "No corresponde equipo";
	        break;
		}
	}

 ?>