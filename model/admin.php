<?php

class Administrator extends OpstiKorisnik
{


    /**
     */
    public function __construct($ime, $prezime, $username, $password,  $tip)
    {
        parent::__construct($ime, $prezime, $username, $password,  $tip);
    }

    public function getIme()
    {
        return $this->ime;
    }


    public function setIme($ime)
    {
        $this->ime = $ime;
    }


    public function getPrezime()
    {
        return $this->prezime;
    }


   
    public function getUsername()
    {
        return $this->username;
    }


    public function setUsername($username)
    {
        $this->ime = $username;
    }


    public function getPassword()
    {
        return $this->password;
    }
   

    public function getTip()
    {
        return $this->tip;
    }


    public function setTip($tip)
    {
        $this->tip = $tip;
    }
	/**
	 * @param mixed $prezime
	 * @return mixed
	 */
	public function setPrezime($prezime) {
	}
	
	/**
	 *
	 * @param mixed $password
	 * @return mixed
	 */
	public function setPassword($password) {
	}
}