<?php


 class Ponuda {

    private $id;
    private $naziv;
    private $proizvodjac;
    private $sastav;
    private $metraza;
    private $kolicina;
    private$cena;

public function __construct($id,$naziv,$proizvodjac,$sastav,$metraza,$kolicina,$cena)
{
       
        $this->id = $id;
        $this->naziv = $naziv;
        $this->proizvodjac = $proizvodjac;
        $this->sastav = $sastav;
        $this->metraza= $metraza;
        $this->kolicina = $kolicina;
        $this->cena = $cena;
}

public function getId() {
    return $this->id;
}


public function setId($id) {
    $this->id = $id;
    return $this;
}



	public function getKolicina() {
		return $this->kolicina;
	}
	
	
	public function setKolicina($kolicina) {
		$this->kolicina = $kolicina;
		return $this;
	}

	
	public function getNaziv() {
		return $this->naziv;
	}
	
	
	public function setNaziv($naziv) {
		$this->naziv = $naziv;
		return $this;
	}
    public function getProizvodjac() {
        return $this->proizvodjac;
    }
    
    
    public function setProizvodjac($proizvodjac) {
        $this->proizvodjac = $proizvodjac;
        return $this;
    }
	public function getMetraza() {
        return $this->metraza;
    }
    
    
    public function setMetraza($metraza) {
        $this->metraza = $metraza;
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