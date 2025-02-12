<?php
require_once('Veicolo.php');


class Automobile extends Veicolo{

    private $modello;

    function __construct($marca, $anno, $modello){
        $this->anno = $anno;
        $this->marca = $marca;
        $this->modello = $modello;
    }


    function get_modello(){
        return $this->modello;
    }


}


?>