<?php

// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; 
// ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
// Strutturare le classi gestendo l'ereditarietà dove necessario; 
// ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
// Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
// $c = new CreditCard(..);
// $user->insertCreditCard($c);
// BONUS:
// Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).

require_once __DIR__ . "/classes/product.php";
require_once __DIR__ . "/classes/user.php";

$newUser = new User("nicola", "password", "email@gmail.com");
echo "user";
echo '<pre>';
var_dump($newUser);
echo '</pre>';


$zaino = new Product("Fjällräven Kånken, Zaino Unisex", 62.43, "Le spalle dritte sono felici. Kånken è stato lanciato nel 1978 per risparmiare le spalle dei bambini a scuola. I problemi alla schiena erano cominciati a comparire in fasce di età sempre più giovani e le borse a tracolla erano popolari. Kånken ha molte funzioni semplici e chiare. Lo zaino è diventato presto una visione comune nelle scuole prescolari e della natura in tutto il paese. L'idea di utilizzare uno zaino si è estesa rapidamente, così come Kånken. È così popolare oggi e una scelta eccellente per la scuola, le uscite o il ciclismo per il lavoro. Kånken è realizzato in vinile resistente e leggero.");

$laptop = new Product("HUAWEI MateBook", 649.00, "Con la potente architettura di sistema e le capacità di software, offre lo schermo più grande e il peso minore possibile per un portatile delle sue dimensioni; con uno spessore di 15.9 mm e un peso di 1.38 kg, Matebook si distingue dagli altri portatili col suo schermo da 14 pollici");

$newUser->addToCart($zaino);
$newUser->addToCart($laptop);

echo "cart";
echo '<pre>';
var_dump($newUser->getCart());
echo '</pre>';