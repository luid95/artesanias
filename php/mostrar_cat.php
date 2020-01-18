<?php
	include("conexion.php");
  	$link=Conectarse();

	$band = 1;
	$sql = " SELECT * FROM galeria WHERE band = $band ";

	$resultado = mysqli_query($link, $sql);

	echo "<table class='table table-hover table-condensed table-bordered' align='center'>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Fecha</th>
				<th>Descripcion</th>
				<th>Imagen</th>
				<th>Eliminar</th>
			</tr>";

	while($registro = mysqli_fetch_array($resultado)){
			echo"<tr>

				<td>".$registro["id_g"]."</td>
				<td id='nombre_cat' data-id_cat='".$registro["id_g"]."' contenteditable>".$registro["category"]."</td>
				<td id='dates' data-id_dates='".$registro["id_g"]."' contenteditable>".$registro["dates"]."</td>
				<td id='descp' data-id_descp='".$registro["id_g"]."' contenteditable>".$registro["descp"]."</td>
				<td><img src='".$registro["photo_g"]."' style='width: 100px; height:100px;' ></td>
				<td ><button id='eliminarc' data-id_eliminarc='".$registro["id_g"]."' class='btn btn-danger'>Eliminar</button></td>

			</tr>";
	}

	echo "</table>";

  ?>
