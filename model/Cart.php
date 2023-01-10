<?php

Class  Cart{

    private $proizvodi = [];


public function getProizvodi(){

        return $this->proizvodi;
}

public function setProizvodi($proizvodi)
{
        $this->proizvodi = $proizvodi;

}

public function getTotalSum()
{
    $totalSum = 0;
    foreach ($this->proizvodi as $p) {
        $totalSum += $p->getKolicina() * $p->getPonuda()->getCena();
    }

    return $totalSum;
}



}




?>