<?php
	include("conexion.php");
  	$link=Conectarse();

	$id = $_REQUEST["id"];
	$texto = $_REQUEST["texto"];
	$columna = $_REQUEST["columna"];

	$sql = " UPDATE galeria SET $columna = '$texto' WHERE id_g = $id" ;

	$consulta = mysqli_query($link, $sql);

	if(!$consulta){
		echo "Error al actualizar datos" . mysql_error();
	}else{
		echo "Se han actualizado los datos";
	}

?>
