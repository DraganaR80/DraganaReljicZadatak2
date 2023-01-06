<?php

class Vunica extends Proizvodi implements Popust{

    protected $metraža;

    public function __construct($id,$naziv,$proizvođač,$sastav,$količina,$metraža ){

        parent::__construct($id,$naziv, $proizvođač, $sastav, $količina,);


}

public function getId() {
    return $this->id;
}


public function setId($id): self {
    $this->id = $id;
    return $this;
}
public function getNaziv() {
    return $this->naziv;
}


public function setNaziv($naziv): self {
    $this->naziv = $naziv;
    return $this;
}


public function getSastav() {
    return $this->sastav;
}

public function getMetraža() {
    return $this->metraža;
}


public function setMetraža($metraža): self {
    $this->metraža = $metraža;
    return $this;
}
public function setSastav($sastav): self {
    $this->sastav = $sastav;
    return $this;
}
	
	public function popustNaKoličinu() {
	}
}




?>