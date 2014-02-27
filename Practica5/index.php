<?php

/* 
*
*
*/
	
	if(!empty($_GET))
		{
			switch ($_GET['ctrl']) {
				case "alumnos":
					require("Controlador/alumnos.php");
					$ctl = new alumnos();
						# code...
					break;
				
				default:
					# code...
					break;
			}
			$ctl->ejecutar();
		}
		else
			echo 'No has introducido valores.';

		
		
?>