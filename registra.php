<?php
include('conexion.php');

if (isset ($_POST['c1'])  && isset($_POST['c2']) ) {
    $code = !empty($_POST['c1']) ? $_POST['c1'] : '';
    $description = !empty($_POST['c2']) ? $_POST['c2'] : '';
}
  $sql = "insert into productos (code,description) values ('$code','$description')";
  if(!mysqli_query($conexion,$sql)){
    die('No se pudo agregar el registro');
}

header('Location: lista.php');

?>


