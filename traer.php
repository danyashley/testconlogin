<?php 
include("conexion.php");
if($conexion = mysqli_connect($servidor,$usuario,$clave,$base)){
	$consulta="SELECT * FROM comentarios ";
	
		$resultado = mysqli_query($conexion,$consulta);
		

		$matriz = array();
		
		while($obj = mysqli_fetch_object($resultado)){
			
			$matriz[] = array("F" => utf8_encode($obj -> usuario), "C" => utf8_encode($obj ->comentarios));
		
			
			};

echo json_encode($matriz);


}
		?>