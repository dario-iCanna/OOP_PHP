<?php
header("Content-Type: application/json");

    require_once('Alunno.php');

    $Alunni = array();

    $Alunni[0] = new Alunno("Dario","Cannavacciuolo", 18, "Via Reggepi Frassinetti", 6, 10 ,"Bravo");
    $Alunni[1] = new Alunno("Mattia","Iacob", 18, "Via Charles Baudleare", 69, 6 ,"Potevi fare di più");
    $Alunni[2] = new Alunno("Isacco","Pieri", 19, "Via Lucio Corsi", 10, 4 ,"Hai fatto proprio schifo");

    echo json_encode($Alunni);
    

?>



