<?php   
require_once('Indirizzo.php');
require_once('Voto.php');
class Alunno implements JsonSerializable{

    protected $nome;
    protected $cognome;
    protected $eta;
    protected $indirizzo;
    protected $voto;

    function __construct($nome, $cognome, $eta, $via, $nCivico, $numero, $descrizione) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->indirizzo = new Indirizzo($via, $nCivico);
        $this->voto = new Voto($numero, $descrizione);
    }

    public function jsonSerialize():array{
        return [
            'nome' => $this->nome,
            'cognome' => $this->cognome,
            'eta' => $this->eta,
            'indirizzo' => $this->indirizzo,
            'voto' => $this->voto
        ];
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