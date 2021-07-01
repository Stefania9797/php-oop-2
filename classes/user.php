<?php
class User {
    protected $name;
    protected $lastname;
    protected $email;
    private $password;

    public function __construct(string $name, string $lastname, string $email, string $password) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
    public function getEmail()
    {
        return $this->email;
    }
}
