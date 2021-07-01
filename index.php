<?php
//classi

//prodotti
require_once ('./classes/product.php');
//user
require_once ('./classes/user.php');
// client (CHILD di user)
require_once ('./classes/client.php');
//credit card
require_once ('./classes/creditcard.php');

// istanze

$cuffie = new Product('Cuffie Samsung', "lorem ipsum dolor", '50');
echo "<pre>";
var_dump($cuffie);
echo "</pre>";

$maria = new Client('Maria', 'Bianchi', 'MariaB', 'maria@example.it', '1234');
echo "<pre>";
var_dump($maria);
echo "</pre>";

$newCreditCard = new CreditCard('4858XXX', 035);

$maria->addCreditCard($newCreditCard);
echo "<pre>";
var_dump($maria->getCreditCard());
echo "</pre>";