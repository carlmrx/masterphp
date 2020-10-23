<?php
//sesion->almacena y persiste los datos 

session_start();
//global
$variable="variable de cadena";
//de sesion
$_SESSION['variable_persistente'] = "session activa";

echo $variable."<br/>";
echo $_SESSION['variable_persistente'];
?>