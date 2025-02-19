<?php   
require_once('Indirizzo.php');
require_once('Voto.php');
class Alunno implements JsonSerializable{

    protected $nome;
    protected $cognome;
    protected $eta;
    protected $indirizzo;
    protected $voti;

    function __construct($nome, $cognome, $eta, $via, $nCivico) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->indirizzo = new Indirizzo($via, $nCivico);
        $this->voti = array();
    }

    public function jsonSerialize():array{
        return [
            'nome' => $this->nome,
            'cognome' => $this->cognome,
            'eta' => $this->eta,
            'indirizzo' => $this->indirizzo,
            'voti' => $this->voti
        ];
    }

    public function addVoto($numero, $descrizione){
        array_push($this->voti, new Voto($numero, $descrizione));
    }

    function set_nome($nome) {
        $this->nome = $nome;
    }
    function get_nome() {
        return $this->nome;
    }

    function set_cognome($cognome) {
        $this->cognome = $cognome;
    }
    function get_cognome() {
        return $this->cognome;
    }
    
    function set_eta($eta) {
        $this->eta = $eta;
    }
    function get_eta() {
        return $this->eta;
    }
}
?>