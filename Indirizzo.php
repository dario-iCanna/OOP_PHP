<?php
    class Indirizzo implements JsonSerializable{

        protected $via;
        protected $nCivico;

        public function __construct($via, $nCivico){
            $this->via = $via;
            $this->nCivico = $nCivico;
        }


        public function jsonSerialize():array{
            return [
                'via' => $this->via,
                'nCivico' => $this->nCivico
            ];
        }

    }


?>
