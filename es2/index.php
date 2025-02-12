<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veicoli</title>
</head>
<body>
<?php

require_once('Automobile.php');

$v = new Automobile("Fiat", "2012", "Panda");

echo $v->get_marca() . " " . $v->get_modello() . " " . $v->get_anno();



?>    
</body>
</html>