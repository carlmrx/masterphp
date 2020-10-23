<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
    if(isset($_GET['error'])){
        $error=$_GET['error'];
        if($error=="datos incompletos"){
            echo "<b> Porfavor completa los datos</b>";
        }
        else{
            echo $error;
        }
    };
    ?>
    <h1>Formulario</h1>
    <form action="formulario.php" method="POST" ectype="multipart/form-data">
    <label for="nombre">nombre: </label>
    <input type="text" name="nombre" autofocus="autofocus" pattern="[a-zA-z]+" require>
    <br>
    <label for="apellido">apellido: </label>
    <input type="text" name="apellido" autofocus="autofocus" pattern="[a-zA-z ]+" require>
    <br>
    <label for="telefono">telefono: </label>
    <input type="number" name="telefono" autofocus="autofocus" placeholder="10 digitos" pattern="[0-9]+"  minlegth="10" require>
    <br>
    <label for="correo">correo: </label>
    <input type="email" name="correo" autofocus="autofocus" pattern="[a-zA-z@._/,]+" require>
    <br>
    <input type="submit" name="submit"> 
    </form>
</body>
</html>