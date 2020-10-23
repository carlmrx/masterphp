<?php
#crear directorios
// if(!is_dir("carpetita")){
// mkdir('carpetita',"0777") or die ("error en la creacion");
// echo "se a creado";
// }else{
//     echo "la carpeta ya esta en el directorio";
// }
#borrar deirectorios
// if(is_dir("carpetita")){
// rmdir("carpetita");
// echo "la carpeta fue exterminada";
// }
// else{
//    echo"no la puedo eliminar porque no existe";
// }
#directorio completo
echo "<h1>Directorio</h1><hr>";
if($directorio = opendir('./ejemplos')){
    while(false != ($archivo= readdir($directorio))){
        if($archivo != '.' && $archivo !='..'){
            echo $archivo."<br/>";
        }
    }
}
?>