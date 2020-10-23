<?php
session_start();
if(!isset($_SESSION["numero"])){
    $_SESSION['numero']=0;
}
if(isset($_GET['counter']) && $_GET['counter']==1){
    $_SESSION['numero']++;
}
if(isset($_GET['counter']) && $_GET['counter']==0){
    $_SESSION['numero']--;
}

?>
<h1>el numero de sesiones es <?=$_SESSION['numero'];?></h1>
<a href="index.php?counter=1">aumentar</a>
<br>
<a href="index.php?counter=0">disminuir</a>