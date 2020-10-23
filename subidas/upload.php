<?php
$archivo=$_FILES["archivo"];
// var_dump($archivo);
// die;
$nombre=$archivo['name'];
$tipo=$archivo['type'];
if($tipo =="image/jpg" || $tipo=="image/png" || $tipo=="image/jpeg"){
    if(!is_dir('images')){
        mkdir('images',0777);
    }
    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
echo "se a almacenado todo correctamente";
}
else{
    header("Refresh:5;URL=index.php");
    echo "sube un tipo de archivo correcto";
}
?>