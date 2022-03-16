<?php

class creditCard {
    protected $scadenzaCarta;
    protected $iban;
    public $today;


    //creo funzione per settare la scadenza della carta 
    public function setScadenzaCarta($scadenzaCarta, $today){
        $this->scadenzaCarta = $scadenzaCarta;
        if (!date("m.y")){
            echo 'Scadenza carta non valida';
        } elseif ($scadenzaCarta < $today){
           $this->today = date("m.d.y");
            echo 'La carta è scaduta';
        }
    }
}