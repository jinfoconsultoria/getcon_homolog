<?php

// session_start();

// $mysqli = new mysqli('localhost', 'concur50_banco', 'b4nc077', 'concur50_banco');
// mysqli_set_charset($mysqli, 'utf8');

// $sql_checar = "SELECT avatar FROM usuarios WHERE id = '" . $_SESSION['usuarioId'] . "' AND $campo = '$dados'";
// $query_checar = mysqli_query($mysqli, $sql_checar);
// $resultado = mysqli_num_rows($query_checar);

if (isset($_POST["image"])) {
	$data = $_POST["image"];

	$image_array_1 = explode(";", $data);

	$image_array_2 = explode(",", $image_array_1[1]);


	$data = base64_decode($image_array_2[1]);


	$imageName = time() . '.png';

	file_put_contents('img/' . $imageName, $data);

	// $sql_inserir = "UPDATE usuarios SET avatar = '$imageName' WHERE id = '" . $_SESSION['usuarioId'] . "'";
	// $query_inserir = mysqli_query($mysqli, $sql_inserir);

	// $_SESSION['avatar'] = $imageName;

	echo '<img class="img-uploaded-preview" src="' . '../assets/lib/uploader/img/' . 	$imageName . '" />';
} else {
	echo 'erro';
}
