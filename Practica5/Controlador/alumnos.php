<?php
/* Controloador alumnos
* public ejecutar(void) 	realiza acciones
*/
	class alumnos{
			public $array;
			public $modelo;

			public function __construct()
			{

			}

		public function ejecutar()
		{
			require("Modelo/mdlAlumnos.php");
			$this->modelo = new mdlAlumnos();
			if(!empty($_GET['act']))
			{
				switch ($_GET['act']) {
				case "lista":
					$this->array = $this->modelo->lista();

					foreach ($this->array as &$valor)
						echo $valor,'<br/>';

					break;
					
				
				default:
					# code...
					break;
			   }
			}
			else
				echo "No hay parametros en act";
		}
	}


?>