<?php

require_once __DIR__ . '/componenti/user.php';


$utente = new user(20);
$utente ->setName('Matteo');
$utente->setLastName('Belcari');
$utente->setEmail('matteobelcari@gmail.com');

var_dump($utente);


