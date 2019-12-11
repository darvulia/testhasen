<?php
$id = !empty($_GET['productId']) ? $_GET['productId'] : 0;
if($id){
    include('conexion.php');
    $consulta = "delete from productos where productId=$id";
    if(!mysqli_query($conexion,$consulta)){
        die('No se pudo eliminar el registro');
    }
}
header('Location: lista.php');