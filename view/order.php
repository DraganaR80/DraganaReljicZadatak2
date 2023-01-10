<?php 

include "header.php"?>

<link rel="stylesheet" href="../css/order.css">

<img  class="image" src="../images/order.jpeg" alt="slika korpe">

<div class="tabela"> 

<table>

    <tr>
<th>Proizvod</th>
<th> Proizvođač</th>
<th> Sastav</th>
<th> Cena</th>
</tr>

<?php

include_once "../model/objekti.php";
$proizvodi= $_SESSION["proizvodi"];
foreach($proizvodi as $p):
?>
<tr>
  <td><?php echo $p->getNaziv() ?></td>
  <td><?php echo $p->getProizvodjac() ?></td>
  <td><?php echo $p-> getSastav() ?></td>
  <td><?php echo $p->getCena() ?></td>
  <td> <a href="<?php echo $p->getId;?>">Ubaci u korpu</a></td>
                                                
  </tr>



<?php
endforeach;
?>
</table>
 </div>
</div>
<?php 
include_once "../model/Objekti.php";
include_once " ../model/Cart.php";
include_once " ../model/CartItems.php";
$cart = new Cart();
$cartItem1 = $cart->addP($p1, 1);
$cartItem2 = $product2->addToCart($cart, 1);


echo "Total price of items in cart: ";
echo $cart->getTotalSum();





?>