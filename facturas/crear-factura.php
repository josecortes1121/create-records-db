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
        <input type="submit" value="CREAR FACTURA">
    </form>
    </section>
   
</body>
</html>