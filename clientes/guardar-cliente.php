<?php

    $nombre = $_REQUEST["nombre"];
    $direccion = $_REQUEST["direccion"];
    $telefono = $_REQUEST["telefono"];
    
    //1. conexion a ala base de datos
    $host = "localhost";
    $dbname = "ventas_db";
    $username = "root";
    $password = ""; 
    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    //2. construir sentencia SQL
    $sql = "INSERT INTO `clientes` (`id_cliente`, `nombre`, `direccion`, `telefono`) VALUES (NULL, '$nombre', '$direccion', '$telefono')";
    
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
    <title>Clientes</title>
</head>
<body bgcolor="#FCEDED">
    <header>
        <h1 class="letra1" align=center> <big><big>Modulo de cliente</big></big> </h1>
    </header>
    <section>
    <form action="guardar-cliente.php" method="GET">
        Nombre <input type="text" name="nombre">
        Direccion <input type="text" name="direccion">
        Telefono <input type="text" name="telefono"><br/><br/>
        <input type="submit" value="Guardar cliente"><br/><br/>
    </form>
    </section>
    
</body>
</html>

<?php
        echo "Cliente guardado correctamente";
    }
    else{
        echo "ha habido un error al crear el estudiante $nombre"; 
    }
    
?>