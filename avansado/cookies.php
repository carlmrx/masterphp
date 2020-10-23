<?php
//cookie basica
setcookie("cookie","galleta");
//cookie con valor
setcookie("unyear","cookie al año",time()+(60*60*24*365));
?>
<a href="vercookies.php">ir a por las cookies</a>