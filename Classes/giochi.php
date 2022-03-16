<?php

require_once __DIR__ . '/products.php';

class giochi extends products {

    public function setName($name){
        $this->name = $name;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function setQuantita($quantita){
        $this->quantita = $quantita;
    }
}