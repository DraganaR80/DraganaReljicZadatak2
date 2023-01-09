<?php

abstract class OpstiKorisnik{
    

    protected $ime;
    protected $prezime;
    protected $username;
    protected $password;
       protected $tip;

    public function __construct($ime,$prezime,$username,$password,$tip )
    {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->username = $username;
        $this->password = $password;
       
        $this->tip = $tip;
    }

    abstract public function getIme();
    abstract public function setIme($ime);
    abstract public function getPrezime();
    abstract public function setPrezime($prezime);
    abstract public function getUsername();
    abstract public function setUsername($username);
    abstract public function getPassword();
    abstract public function setPassword($password);
   
    abstract public function getTip();
    abstract public function setTip($tip);
}

?>