<?php
require "model/interface.php";
require "model/vunica.php";
require "model/drske_za_torbe.php";
require "model/heklice.php";

abstract class Proizvodi{

    protected $id;
    protected $naziv;
    protected $proizvođač;
    protected $sastav;
    protected $količina;


public function __construct($id,$naziv,$proizvođač,$sastav,$količina)
{
       
        $this->id = $id;
        $this->proizvođač = $proizvođač;
        $this->sastav = $sastav;
        $this->količina = $količina;
}

public function getId() {
    return $this->id;
}


public function setId($id): self {
    $this->id = $id;
    return $this;
}


	public function getKoličina() {
		return $this->količina;
	}
	
	
	public function setKoličina($količina): self {
		$this->količina = $količina;
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
}


?>