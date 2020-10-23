<?php
if(isset($_COOKIE["cookie"])){
    echo "<h1>".$_COOKIE["cookie"]."</h1>";
}
else{
    echo "no existe las cookies";
}

?>
<a href="deletecookies.php">borrar cookie</a>