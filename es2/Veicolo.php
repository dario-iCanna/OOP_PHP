<?php

class Veicolo{

    protected $marca;
    protected $anno;

    function __construct($marca, $anno){
        $this->anno = $anno;
        $this->marca = $marca;
    }

    function get_anno(){
        return $this->anno;
    }

    function get_marca(){
        return $this->marca;
    }

}

?>