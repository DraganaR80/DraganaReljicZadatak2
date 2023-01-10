<?php 
class CartItem{
    private  Ponuda $p;
    private $quantity;

    public function __construct($p, $quantity)
    {
        $this->p = $p;
        $this->quantity = $quantity;
    }


    public function getP()
    {
        return $this->p;
    }

    
    public function setP($p)
    {
        $this->p = $p;
    }


    public function getQuantity()
    {
        return $this->quantity;
    }

    
     
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}




?>