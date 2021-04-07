<?php

    $fecha = $_REQUEST["fecha"];
    $cliente = $_REQUEST["id-cliente"];
    
    //1. conexion a ala base de datos
    $host = "localhost";
    $dbname = "ventas_db";
    $username = "root";
    $password = ""; 
    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    //2. construir sentencia SQL
    $sql = "INSERT INTO `facturas` (`id_factura`, `fecha`, `id_cliente`) VALUES (NULL, '$fecha', '$cliente')";    
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
    <title>Facturas</title>
</head>
<body bgcolor="#FCEDED">

    <header>
    <h1 class="letra1" align=center> <big><big>Modulo de facturas</big></big> </h1>
    </header>

    <section>
    <form action="guardar-factura.php" method="GET">
        FECHA <input type="text" name="fecha">
        CLIENTE <input type="text" name="id-cliente"><br/><br/>
        <input type="submit" value="CREAR FACTURA"><br/><br/><br/>
    </form>
    </section>
   
</body>
</html>

<?php
        echo "Factura ha sido guardada correctamente";
    }
    else{
        echo "ha habido un error al guardar factura ";
    }
    
    ?>