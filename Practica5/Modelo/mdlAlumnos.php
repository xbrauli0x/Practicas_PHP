<?php
/*Modelod e alumnos
*
* public lista(void) 	retorna lista de alumnos
*/

	class mdlAlumnos{
		
		public function __construct()
		{

		}

		public function lista()
		{

			$array = [
						"alumno1" => "Pedro Suarez Lopez",
						"alumno2" => "Jose Sanchez Perez"
					];
					return $array;
		}



	}


?>