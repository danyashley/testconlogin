<?php 
include("conexion.php");
$_GET["codigo"];

if($conexion = mysqli_connect($servidor,$usuario,$clave,$base)){
	$consulta="SELECT * FROM recetas WHERE recetas.id_receta=' ".$_GET["codigo"]."'";
	
		$resultado = mysqli_query($conexion,$consulta);
		

		$matriz = array();
		
		while($obj = mysqli_fetch_object($resultado)){
			
			$matriz[] = array("T"=> utf8_encode("<h3>Ingredientes:</h3>"),"C" => utf8_encode($obj ->ingredientes_receta), "E"=> utf8_encode("<h3>Receta:</h3>"), "D" => utf8_encode($obj ->cuerpo_receta));
		
			
			};

echo json_encode($matriz);


}
		
		
		?>