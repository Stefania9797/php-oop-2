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

$products = [
new Product('Cuffie Samsung', "Grazie all’intervento degli esperti audio di AKG, i Galaxy Buds sanno offrire un suono incredibilmente ricco e di alta qualità: ovunque tu sia, ti sembrerà di essere a un concerto dal vivo.", '50'),
new Product('Laptop Dell', "I notebook e i 2-in-1 XPS sono realizzati con precisione in materiali di alta qualità e dispongono di display dai colori vivaci per la migliore esperienza visiva. Un sistema XPS offre le prestazioni che ti servono nel design che desideri.", '700'),
new Product('Smartphone LG', "Ti diamo il benvenuto in un'era in cui tutto ciò che conosci non sarà più lo stesso. In cui il tuo smartphone si trasforma per migliorare ciò che fai quotidianamente e al tempo stesso ti apre a nuovi orizzonti.", '300'),
];
$clients = [
new Client('Maria', 'Bianchi', 'maria@example.it', '1234'),
new Client('Lucia', 'Verdi','lucy@example.it', '1234'),
new Client('Giorgia', 'Neri', 'giorgia@example.it', '1234'),
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
</head>
<body>
    <h2>Prodotti</h2>
    <div class="prodotti" style="display:flex">
        <?php foreach ($products as $product) { ?>
        <div class="prodotto" style="padding:10px; margin:20px 10px 0; border:1px solid grey">
            <h3><?php echo $product->getName() ?></h3>
            <p><?php echo $product->getDesc() ?></p>
            <h5><?php echo $product->getPrice() ?> EURO</h5>
        </div>
        <?php
        } ?>
    </div>
    <h2>Clienti</h2>
    <div class="clienti" style="display:flex">
            <?php foreach ($clients as $client) { ?>
        <div class="cliente" style="padding:10px; margin:20px 10px 0; border:1px solid grey">
                <h3>Nome:<?php echo $client->getName() ?></h3>
                <h3>Cognome: <?php echo $client->getLastname() ?></h3>
                <p><?php echo $client->getEmail() ?></p>
        </div>
            <?php
            } ?>
    </div>
</body>
</html>