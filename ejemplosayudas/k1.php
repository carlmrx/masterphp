<?php
#capturar los numeros
$a=$_POST['a'];
$b=$_POST['b'];
echo "los numeros son ".$a." y ".$b;
#comparacion
if($a>$b){
    echo " iniciamos por A";
    $inicial=$b;
    $final=$a;
}
if($a==$b){
    echo " ambos numeros son iguales ";
}
if($b>$a){
    echo " iniciamos por B";
    $inicial=$a;
    $final=$b;
}
else{
    echo " funcion indefinida";
}
#crear los bucles y numeros
for($indice=$inicial;$indice<=$final;$indice++){
    echo "<br>". $indice;
}

?>