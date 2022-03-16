<?php


class products{
    public $name;
    public $quantita;
    public $tipo;

    public function __construct($tipo, $name, $quantita)
    {
        $this->tipo = $tipo;
        $this->name = $name;
        $this->quantita = $quantita;

    }
}