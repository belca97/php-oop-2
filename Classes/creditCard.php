<?php

class creditCard {
    protected $scadenzaCarta;
    protected $iban;


    //creo funzione per settare la scadenza della carta 
    public function setScadenzaCarta($scadenzaCarta){
        $today = date("m.d.y");
        if (!date("m.y")){
            echo 'Scadenza carta non valida';
        } elseif ($scadenzaCarta < $today){
            echo 'La carta è scaduta';
        } else {
            $this->scadenzaCarta = $scadenzaCarta;
        }
    }

    public function setIban($iban){
        if(strlen($iban) <= 15){
            echo 'Iban non riconosciuto';
        } else {
            $this->iban = $iban;
        }
    }
}