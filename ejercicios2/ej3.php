<?php
function suma($a,$b){
    $suma=$a+$b;
    return $suma;
}
function resta($a,$b){
    $resta=$a-$b;
    return $resta;
}
function multiplicacion($a,$b){
    $multiplicacion=$a*$b;
    return $multiplicacion;
}
function divicion($a,$b){
    $divicion=$a/$b;
    return $divicion;
}

if(!empty($_POST['a']) && !empty($_POST['b'])){
   
if(isset($_POST['suma'])){
    echo suma($_POST['a'],$_POST['b']);

}
if(isset($_POST['resta'])){
    echo resta($_POST['a'],$_POST['b']);
}
if(isset($_POST['multiplicacion'])){
    echo multiplicacion($_POST['a'],$_POST['b']);
}
if(isset($_POST['divicion'])){
    echo divicion($_POST['a'],$_POST['b']);
 }
}else{
    echo "porfavor envia lagunos datos";
}

?>
<form action="" method="POST">
<label for="a">numero a</label>
<input type="number" name="a">
<br>
<label for="b">numero b</label>
<input type="number" name="b">
<br>
<input type="submit" name="suma" value="suma" placeholder="suma">
<br>
<input type="submit" name="resta" value="resta">
<br>
<input type="submit" name="multiplicacion" value="multiplicacion">
<br>
<input type="submit" name ="divicion" value="divicion">
</form>