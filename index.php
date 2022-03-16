<?php

require_once __DIR__ . '/Classes/utenteRegistrato.php';


$utente = new utenteRegistrato(20);
$utente ->setName('Matteo');
$utente->setLastName('Belcari');
$utente->setEmail('matteobelcari@gmail.com');

var_dump($utente);


