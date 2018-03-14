<?php
$servidor="localhost";
$usuario="c0260314_apps";
$clave="54gebuROna";
$base="c0260314_apps";
function conexion($servidor,$usuario,$clave,$base){
 if($conexion = mysqli_connect($servidor,$usuario,$clave,$base)){

 }else{
	 $conexion = false;
	 
	 }
	 
	 return $conexion;
}
?>