<?php


 class Ponuda {

    protected $id;
    protected $naziv;
    protected$proizvođač;
    protected $sastav;
    protected $metraža;
    protected $količina;
    protected$cena;

public function __construct($id,$naziv,$proizvođač,$sastav,$metraža,$količina,$cena)
{
       
        $this->id = $id;
        $this->naziv = $naziv;
        $this->proizvođač = $proizvođač;
        $this->sastav = $sastav;
        $this->metraža= $metraža;
        $this->količina = $količina;
        $this->cena = $cena;
}

public function getId() {
    return $this->id;
}


public function setId($id) {
    $this->id = $id;
    return $this;
}



	public function getKoličina() {
		return $this->količina;
	}
	
	
	public function setKoličina($količina) {
		$this->količina = $količina;
		return $this;
	}

	
	public function getNaziv() {
		return $this->naziv;
	}
	
	
	public function setNaziv($naziv) {
		$this->naziv = $naziv;
		return $this;
	}

	public function getMetraža() {
        return $this->metraža;
    }
    
    
    public function setMetraža($metraža) {
        $this->metraža = $metraža;
        return $this;
    }
	public function getSastav() {
		return $this->sastav;
	}
	
	
	public function setSastav($sastav) {
		$this->sastav = $sastav;
		return $this;
	}

    public function getCena() {
        return $this->cena;
    }
    
    
    public function setCena($cena) {
        $this->cena = $cena;
        return $this;
    }
    
}


?>