<?php

class Drske  extends Proizvodi implements Popust{

public function __construct($id,$naziv,$proizvođač,$sastav,$količina ){

        parent::__construct($id,$naziv, $proizvođač, $sastav, $količina);


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


public function setSastav($sastav): self {
    $this->sastav = $sastav;
    return $this;
}
	
	public function popustNaKoličinu() {
	}
}




?>