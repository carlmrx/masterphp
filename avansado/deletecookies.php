<?php
if($_COOKIE["cookie"]){
unset($_COOKIE["cookie"]);
setcookie('cookie','',time()-100);
}
?>