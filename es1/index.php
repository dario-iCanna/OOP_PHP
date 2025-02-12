<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunni</title>
</head>
<body>
<?php
    require_once('Alunno.php');

    $Alunni = array();

    $Alunni[0] = new Alunno("Dario","Cannavacciuolo", 18);
    $Alunni[1] = new Alunno("Mattia","Iacob", 18);
    $Alunni[2] = new Alunno("Isacco","Pieri", 19);


    foreach($Alunni as $i){
        echo "<p>".$i->get_nome() ." " . $i->get_cognome() ." ". $i->get_eta() . "</p>";
    }

?>
</body>
</html>



