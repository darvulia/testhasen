<?php

$code = !empty($_POST['c1']) ? $_POST['c1'] : '';
$description = !empty($_POST['c2']) ? $_POST['c2'] : '';
$nlinea =  !empty($_POST['nlinea']) ? $_POST['nlinea'] : '';
if($code&&$description){
	include('conexion.php');
	$registro = "UPDATE productos set code='$code',description='$description' WHERE productId='$nlinea'";
	
	$resultado = mysqli_query($conexion,$registro);

}
header('Location: lista.php');