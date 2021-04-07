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
        <input type="submit" value="Crear producto"><br/>
    </form>
    </section>
   
</body>
</html>