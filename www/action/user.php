<?php

class User
{
    private $email, $pseudo, $password;

    // exemple de constructeur.. ici vide..
    public function __construct()
    {
    }

    public function setPassword($password)
    {
        $this->password = hash('sha256', $password);
    }
}