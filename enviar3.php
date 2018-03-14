<?php
include("conexion.php");


	// VARIABLES DEL FORM
	$tit = $_GET["titulo"];
	$nom = $_GET["nombre"];
	$cuer = $_GET["cuerpo"];

	// ARRAY DE MENSAJES
	$resultados = array();

	// CONEXION A DB
	if($link = mysqli_connect($servidor,$usuario,$clave,$base))
	{
		// ARRAY DE OBJETOS
		$matriz = array();

		// CONSULTA DEPENDIENDO LAS VARIABLES
		$consulta = "INSERT INTO recetas (titulo_receta, ingredientes_receta, cuerpo_receta) VALUES ('$tit', '$nom', '$cuer')";
		
		// RESPUESTA DESDE LA DB
		if(mysqli_query($link,$consulta)){
			
			$resultados["mensaje"] = "El alta se realizo correctamente";
			$resultados["validacion"] = "ok";
		} else {

			$resultados["mensaje"] = "Existio un error, vuelva a intentarlo mas tarde";
			$resultados["validacion"] = "No";
		}
	} else {
		echo "alert('NO se conecto');";
	}

	// PASA A JSON LOS MENSAJES
	$resultadosJson = json_encode($resultados);

	// PASA ENCODEADO LOS MENSAJES
	echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';
?>