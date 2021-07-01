<?php
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