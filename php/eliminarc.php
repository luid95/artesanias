<?php
	include("conexion.php");
  $link=Conectarse();

	$id = $_REQUEST["id"];
	$band = 0;

	$sql = " UPDATE galeria SET band = $band WHERE id_g = $id" ;

	$consulta = mysqli_query($link, $sql);

	if(!$consulta){
		echo "Error al actualizar datos" . mysql_error();
	}else{
		echo "Se han actualizado los datos";
	}

?>