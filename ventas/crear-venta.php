<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear venta</title>
</head>

<body bgcolor="#FCEDED">

    <header>
        <h1 class="letra1" align=center> <big><big>Modulo de ventas</big></big> </h1>
    </header>

    <form action="guardar-venta.php" method="GET">
        Factura <input type="text" name="id_factura">
        Producto <input type="text" name="id_producto">
        Cantidad <input type="text" name="cantidad"><br/><br/>
        <input type="submit" value="Registrar venta"><br/><br/>
    </form>
</body>
</html>