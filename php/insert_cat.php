<?php
	include("conexion.php");
	$link= Conectarse();

	$name = $_REQUEST["name"];
	$date = $_REQUEST["date"];
	$desc = $_REQUEST["desc"];
	$band = 1;

	$name_file = uniqid()."-".$_FILES['file_g']['name'];
	$targetfolder = "../category/".$name_file;
	$file = $_FILES["file_g"]["tmp_name"];
	move_uploaded_file($file, $targetfolder);
	$url = "category/".$name_file;
	


	$sql = " INSERT into galeria (category, dates, photo_g, descp, band ) values ('$name','$date', '$url', '$desc', '$band')";
	$consulta = mysqli_query($link, $sql);

	if(!$consulta){
		echo "Error al insertar datos" . mysql_error();
	}else{
		echo "Se han insertado los datos";
	}
	




?>

