<?php
header("Content-Type: application/json");

    require_once('Alunno.php');

    $Alunni = array();

    $Alunni[0] = new Alunno("Dario","Cannavacciuolo", 18);
    $Alunni[1] = new Alunno("Mattia","Iacob", 18);
    $Alunni[2] = new Alunno("Isacco","Pieri", 19);


    foreach($Alunni as $i){
        echo json_encode($Alunni);
    }

?>



