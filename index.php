<?php
//classi

//prodotti
class Product {
    protected $name;
    protected $desc;
    protected $price;

    public function __construct(string $name, string $desc, string $price) {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
    }
}
//user
class User {
    protected $name;
    protected $username;
    protected $email;
    private $password;

    public function __construct(string $name, string $username, string $email, string $password) {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
}
//carta di credito
class CreditCard {
    protected $number;
    private $cvc;

    public function __construct(string $number, int $cvc) {
        $this->number = $number;
        $this->cvc = $cvc;
    }
}
// classe CHILD di User
class Client extends User {
    //set carta di credito
    protected $creditCards = [];
    public function addCreditCard($creditCard) {
        $this->creditCards = $creditCard;
    }
    //get carta di credito
    public function getCreditCard() {
        return $this->creditCards;
    }
}
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