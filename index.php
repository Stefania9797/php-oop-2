<?php
//classe prodotto
class Product{
    protected $name;
    protected $desc;
    protected $price;
    protected $quantity;

    function __construct($name, $desc, $price, $quantity)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    public function getPrice() {
        return $this->price;
    }
}

//classe person (PARENT)
class Person{
    public $name;
    public $lastname;


    public function __construct($name,$lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

}
//classe premium user (CHILD)
class Premium_user extends Person{
    public $nickname;
    public $email;
    public $password;

    public function __construct($name, $lastname, $nickname, $email, $password)
    {
        //estendo il constructor di person anche a user
        //e poi definisco le nuove caratteristiche
        parent::__construct($name, $lastname);

        $this->nickname = $nickname;
        $this->email = $email;
        $this->password = $password;
    }
    //Solo premium user ha accesso a questa funzione
    public function subscribe()
    {
        return "Mi iscrivo alla newsletter";
    }
    public function delete()
    {
        return "Cancella il tuo profilo";
    }
}

//istanze
$laptop = new Product("Laptop HP", "Lorem impum dolor", 600, 20);
var_dump($laptop);

$stefania = new Premium_user("Stefania","Mastrella","stefania97","stefania@example.it","123456");
