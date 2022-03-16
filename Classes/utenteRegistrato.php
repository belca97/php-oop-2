<?php

//creo una classe padre 'user'


class utenteRegistrato {
    protected $name;
    protected $lastName;
    protected $email;
    public $discount;


    public function __construct($discount)
    {
        $this->discount = $discount;
    }

    //creo funzione per settare il nome
    public function setName($name){
        if (strlen($name) <= 2 ){
            $this->name = $name;
            echo 'Accesso negato, nome troppo breve';
        } else {
            $this->name = $name;
        }
    }

    //creo funzione per settare il cognome
    public function setLastName($lastName){
        if (strlen($lastName) <= 2 ){
            $this->lastName = $lastName;
            echo 'Accesso negato, cognome troppo breve';
        } else {
            $this->lastName = $lastName;
        }
    }

    //creo funzione per settare la mia email
    public function setEmail($email){
        if (strpos($email, '@') !== false && strpos($email, '.') !== false ){
            $this->email = $email;
        } else {
            $this->email = $email;
            echo "indirizzo email non è valido ";
        }
    }
}