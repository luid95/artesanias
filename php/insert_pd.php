<?php
	include("conexion.php");
	$link= Conectarse();

    $name = $_REQUEST["name"];
    $id_cat = $_REQUEST["catalogo"];
    $date = $_REQUEST["date"];
    $size = $_REQUEST["size"];
    $valp = $_REQUEST["valp"];
	$desc = $_REQUEST["descp"];
	$band = 1;

	$name_file = uniqid()."-".$_FILES['file_p']['name'];
	$targetfolder = "../models/".$name_file;
	$file = $_FILES["file_p"]["tmp_name"];
	move_uploaded_file($file, $targetfolder);
	$url = "models/".$name_file;
	


	$sql = " INSERT into productos (name_p, dates_p, id_gf, size_p, val_p, photo_p, descp_p, band_p ) values ('$name','$date', '$id_cat', '$size', '$valp', '$url', '$desc', '$band')";
	$consulta = mysqli_query($link, $sql);

	if(!$consulta){
		echo "Error al insertar datos" . mysql_error();
	}else{
		echo "Se han insertado los datos";
	}
	




?>