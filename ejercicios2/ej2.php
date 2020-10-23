<?php
function valudaremail($email){
    $status="no valido";
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ){
        $status="valido";
    }
    return $status;
}

if(isset($_GET['email'])){
    echo valudaremail($_GET["email"]);
}else{
    echo "ponfavor ingresa el email";
}

?>