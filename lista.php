<?php
include('conexion.php');
$consulta = 'select * from productos';
$resultado = mysqli_query($conexion,$consulta);
$tabla =<<<FIN
<tbody>
<tr><th>code</th><th>description</th><th colspan="2">Accion</th></tr>
FIN;

while($registro=mysqli_fetch_assoc($resultado)){
    $tabla.='<tr>';
    $tabla.="<td>{$registro['code']}</td>";
    $tabla.="<td>{$registro['description']}</td>";
    $tabla.="<td><a href=editar.php?id={$registro['productId']}>Editar</a></td>";
    $tabla.="<td><a href=borrar.php?productId={$registro['productId']}>Borrar</a></td>";
    $tabla.='</tr>';
}
$tabla.='</tbody>';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>lista</title>
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th colspan="3">LISTA DE PRODUCTOS</th>
    </tr>
  </thead>
  <?php echo $tabla; ?>
</table>
        <p>
        <a href="registrar.php">Registrar</a>
        </p>
</body>
</html>