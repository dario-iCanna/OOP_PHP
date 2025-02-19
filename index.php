<?php
header("Content-Type: application/json");

    require_once('Alunno.php');

    $assoArr = json_decode(file_get_contents("alunni.json"), true);
    //var_dump($assoArr);
    $alunni = array();

    foreach($assoArr as $a){
        array_push($alunni, new Alunno($a["nome"], $a["cognome"], $a["eta"], $a["indirizzo"]["via"], $a["indirizzo"]["nCivico"]));
        foreach($a["voti"] as $v){
            $alunni[sizeof($alunni)-1]->addVoto($v["numero"], $v["descrizione"]);
        }
    }

    echo json_encode($alunni);
?>



