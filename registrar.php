<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Registrar Producto</title>
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th colspan="3">Registrar Producto</th>
    </tr>
  </thead>
    <tbody>
        <tr>
            <td>
            <div class="contenido">
            <form action="registra.php" method='post'>
            <label for="i1">codigo</label>
            <input type="text" id="i1" name="c1">
            <br>
            <label for="i2">descripción</label>
            <input type="text" id="i2" name="c2">
            <br>
            <input type="submit" value="registrar">
            </form>

        </div>
            </td>
        </tr>
    </tbody>
</table>

</body>
</html>