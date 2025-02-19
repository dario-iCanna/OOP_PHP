<?php

    class Voto implements JsonSerializable{

        protected $numero;
        protected $descrizione;

        public function __construct($numero, $descrizione){
            $this->numero = $numero;
            $this->descrizione = $descrizione;
        }

        public function jsonSerialize():array{
            return [
                'numero' => $this->numero,
                'descrizione' => $this->descrizione
            ];
        }

    }


?>