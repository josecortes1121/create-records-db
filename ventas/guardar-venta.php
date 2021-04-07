<?php

    $factura = $_REQUEST["id_factura"];
    $producto = $_REQUEST["id_producto"];
    $cantidad = $_REQUEST["cantidad"];
    
    //1. conexion a ala base de datos
    $host = "localhost";
    $dbname = "ventas_db";
    $username = "root";
    $password = ""; 
    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    //2. construir sentencia SQL
    $sql = "INSERT INTO `ventas` (`id_venta`, `id_factura`, `id_producto`, `cantidad`) VALUES (NULL, '$factura', '$producto', '$cantidad')";
    
    //3. preparar sentencia SQL
    $q = $cnx->prepare($sql);

    //4. ejecutar sentencia SQL
    $result = $q->execute();
    
    if($result){
?>
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
        <input type="submit" value="Registrar venta"><br/><br/><br/>
    </form>
</body>
</html>
<?php
        echo "Venta guarda correctamente";
    }
    else{
        echo "ha habido un error al crear el estudiante";
    }
    
    ?>