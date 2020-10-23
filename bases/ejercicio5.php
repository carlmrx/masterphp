<?php


$juegos= array(
    "accion"=> array("GTA V","COD","PUBG"),
    "aventura"=> array("CRASH","ASSASINS","POP"),
    "deportes"=>array("FIFA","PES","2KNBA")
);
var_dump($juegos);
$cotegoria =array_keys($juegos);
?>
<table border="1";>
    <tr>
        <?php foreach($cotegoria as $categoria):?>
        <th> <?= $categoria;?> </th>
        <?php endforeach;?>
    </tr>
    <tr>
        <td><?=$juegos["accion"][0];?></td>
        <td><?=$juegos["aventura"][0];?></td>
        <td><?=$juegos["deportes"][0];?></td>
    </tr>
    <tr>  
        <td><?=$juegos["accion"]  [1];?></td>
        <td><?=$juegos["aventura"][1];?></td>
        <td><?=$juegos["deportes"][1];?></td>
    </tr>
    <t  r>
        <td><?=$juegos["accion"]  [2];?></td>
        <td><?=$juegos["aventura"][2];?></td>
        <td><?=$juegos["deportes"][2];?></td>
    </t>
</table>