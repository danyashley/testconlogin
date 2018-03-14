<?php 
include("conexion.php");


if($conexion = mysqli_connect($servidor,$usuario,$clave,$base)){
	$consulta="SELECT * FROM recetas";
	
		$resultado = mysqli_query($conexion,$consulta);
		

		$matriz = array();
		
		while($obj = mysqli_fetch_object($resultado)){
			
			$matriz[] = array("U" => utf8_encode($obj -> titulo_receta));
		
			
			};

echo json_encode($matriz);


}
		?>