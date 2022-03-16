<?php

require_once __DIR__ . '/Classes/utenteRegistrato.php';
require_once __DIR__ . '/Classes/creditCard.php';
require_once __DIR__ . '/Classes/cibo.php';


$utente = new utenteRegistrato(20);
$utente ->setName('Matteo');
$utente->setLastName('Belcari');
$utente->setEmail('matteobelcari@gmail.com');
var_dump($utente);
$utente = new creditCard;
$utente-> setScadenzaCarta(02.2023);
$utente->setIban('IT4034030320023410402350060432');
var_dump($utente);
$utente = new cibo('croccantini', 'Filos', 2);
var_dump($utente)

?>


<?php

require_once __DIR__ . '/Classes/utenteRegistrato.php';
require_once __DIR__ . '/Classes/creditCard.php';
require_once __DIR__ . '/Classes/giochi.php';


$utente2 = new utenteRegistrato(20);
$utente2 ->setName('Super');
$utente2->setLastName('Ugo');
$utente2->setEmail('superugo@gmail.com');
var_dump($utente2);
$utente2 = new creditCard;
$utente2-> setScadenzaCarta(02.2023);
$utente2->setIban('IT4034030320023410402350060432');
var_dump($utente2);
$utente2 = new giochi('peluche', 'morbidone', 5);
var_dump($utente2);

?>


<?php

require_once __DIR__ . '/Classes/guest.php';
require_once __DIR__ . '/Classes/creditCard.php';
require_once __DIR__ . '/Classes/cucce.php';


$utente3 = new guest(0);
$utente3 ->setName('Pippo');
$utente3->setLastName('Pipposi');
var_dump($utente3);
$utente3 = new creditCard;
$utente3-> setScadenzaCarta(02.2023);
$utente3->setIban('IT4034030320023410402350060432');
var_dump($utente3);
$utente3 = new cucce('confortevole' , 'LaCuccia', 1);
var_dump($utente3);
?>


