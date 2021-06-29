<?php
// 1 : Inventate due classi a piacere una che estende l'altra.

//person PARENT CLASS
class Person{
    public $name;
    public $lastname;
    
    
    // 2: Ciascuna classe avrá un constuctor e un paio di metodi a piacere.
    public function __construct($name,$lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }  
}
// end person

// 3: Create un paio di traits da usare nella classe figlia.
trait nickname{
    public function getNickname()
    {
        return $this->nickname;
    }
}
trait email{
    public function getEmail()
    {
        return $this->email;
    }
}

//user CHILD CLASS
class User extends Person{
    use nickname;
    use email;
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
    //Solo user ha accesso a questa funzione
    public function subscribe()
    {
        return "Mi iscrivo alla newsletter";
    }
}
// 4: create una struttura dati (array di oggetti) e usate un ciclo foreach per mostrare i dati a schermo (con html, non var_dump)
$users=[
    new User("maria","bianchi","marb","maria@email.it","1234"),
    new User("marco","rossi","m","marco@email.it","1234"),
    new User("carlo","verdi","carl","carlo@email.it","1234"),
    new User("lucia","neri","lucy","lucia@email.it","1234"),
];
// 5: in una funzione gestite eventuali errori usando un exception
function password($string) {
    if (is_int($string)) {
    throw new Exception('Is not a string!');
    }
    return $string;
    }
//usate il try/catch per gestire il la richiesta e mostrare all'utente un messaggio di errore.
try {
    echo password(2);
    } catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <h1>UTENTI</h1>
    <?php foreach ($users as $user) { ?>
        <div class="user" style="margin:10px 0">
            <h2 style="color:red">Nome:<?= $user->name ?></h2>
            <h2>Cognome:<?= $user->lastname ?></h2>
            <h3>Nickname:<?= $user->nickname ?></h3>
            <p>Email:<?= $user->email ?></p>
            <p>Password:<?= $user->password ?></p>
        </div>
                <?php
                } 
            ?>
</body>
</html>