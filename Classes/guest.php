<?php

    class Guest{
        protected $name;
        protected $lastName;
        public $discount = 0;


        public function __construct($discount)
        {
            $this->discount = $discount;           
        }
                    //creo funzione per settare il nome
                public function setName($name){
                    if (strlen($name) <= 2 ){
                        echo 'Accesso negato, nome troppo breve';
                    } else {
                        $this->name = $name;
                    }
                }

                //creo funzione per settare il cognome
                public function setLastName($lastName){
                    if (strlen($lastName) <= 2 ){
                        echo 'Accesso negato, cognome troppo breve';
                    } else {
                        $this->lastName = $lastName;
                    }
                }
    }