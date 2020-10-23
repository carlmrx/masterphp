<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario subir archivos</title>
</head>
<body>
    <h1>subir archivos con php</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data" >
        <input type="file" name="archivo">
        <input type="submit">
    </form>
    
    <h2>listado de imagenes</h2>
    <?php
        $gestor=opendir('./images');
        if($gestor){
            while(($image = readdir($gestor)) !=false){
                if($image != '.' && $image!='..'){
                    echo "<img src='images/$image' whidth='200px'/><br>";
                }
            }
        }
    ?>
</body>
</html>