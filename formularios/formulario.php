<?php
$error="datos incompletos";
if(isset($_POST["submit"])){
if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['telefono']) && !empty($_POST['correo'])){
    $error="bien";
    $name=$_POST['nombre'];
    $lastname=$_POST['apellido'];
    $telephone=$_POST['telefono'];
    $email=$_POST['correo'];
//candados ainti sql-injeccion
#validacion de nombre
if(!is_string($name) || preg_match("/[0-9 ]/",$name)){
$error="nombre no valido";
}
#validacion de apellido
if(!is_string($lastname) || preg_match("/[0-9]/",$lastname)){
    $error="apellido no valido";
    }
#validacion de telefono
if(!is_string($telephone) || !filter_var($telephone,FILTER_VALIDATE_INT)){
    $error="telefono no valido";
    }
#validacion de correo
if(!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
    $error="correo no valido";
    }
if($error!="bien"){
    header("Location:index.php?error=$error");
}
if($error!="bien"){
    header("Location:index.php?error=$error");
}}
else{
   header("Location:index.php?error=$error");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
    <?php 
    if($error=="bien"){
    echo "<h1>".$name."</h1>";
    echo "<h1>".$lastname."</h1>";
    echo "<h1>".$telephone."</h1>";
    echo "<h1>".$email."</h1>";
    }
    ?>
</body>
</html>
<?php
}
header("Location:index.php")
?>