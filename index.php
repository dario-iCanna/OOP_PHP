<?php
header("Content-Type: application/json");

    require_once('Alunno.php');

    $Alunni = array();

    $Alunni[0] = new Alunno("Dario","Cannavacciuolo", 18, "Via Reggepi Frassinetti", 6);
    $Alunni[1] = new Alunno("Mattia","Iacob", 18, "Via Charles Baudleare", 69);
    $Alunni[2] = new Alunno("Isacco","Pieri", 19, "Via Lucio Corsi", 10, 4);

    $Alunni[0]->addVoto(10, "very good");
    $Alunni[0]->addVoto(2, "not good");

    $Alunni[1]->addVoto(6, "normie good");

    $Alunni[2]->addVoto(-1, "superBad good");


    echo json_encode($Alunni);
    

?>



