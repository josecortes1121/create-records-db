<?php

    $descripcion = $_REQUEST["descripcion"];
    $precio = $_REQUEST["precio"];
    
    //1. conexion a ala base de datos
    $host = "localhost";
    $dbname = "ventas_db";
    $username = "root";
    $password = ""; 
    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    //2. construir sentencia SQL
    $sql = "INSERT INTO `productos` (`id_producto`, `descripcion`, `precio`) VALUES (NULL, '$descripcion', '$precio')";
    
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
    <title>Crear producto</title>
</head>

<body bgcolor="#FCEDED">

    <header>
        <h1 class="letra1" align=center> <big><big>Modulo de productos</big></big> </h1>
    </header>

    <section>
    <form action="guardar-producto.php" method="GET">
        Descripcion <input type="text" name="descripcion">
        Precio <input type="text" name="precio"><br/><br/>
        <input type="submit" value="Crear producto"><br/><br/><br/>
    </form>
    </section>
   
</body>
</html>

<?php
        echo "Producto guardado de manera correcta";
    }
    else{
        echo "ha habido un error al guardar el producto";
    }
    ?>