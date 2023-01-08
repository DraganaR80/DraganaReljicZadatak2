<?php 

include "header.php"?>

    <div   class="slide">
      <figure>
<img src="../images/slide.jpg" width="960px" height="540px"  >
<img src="../images/slide1.jpg" alt=""width="960px" height="540px">
<img src="../images/slide2.jpg" alt=""width="960px" height="540px">
<img src="../images/slide3.jpg" alt=""width="960px" height="540px">
<img src="../images/slide.jpg" alt=""width="960px" height="540px">
         </figure>



    </div>
    <br><br>
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
  </tr>



<?php
endforeach;
?>
</table>
 </div>

 <p> Želite da poručite? To možete uraditi <a href="order.php" ><u><b>OVDE</b></u> </a></p>

   <div class="wrapper">
    <div class="Kontakt">

    <p>

    KONTAKT <br>
Adresa:<br>
Bulevar oslobođenja 30,<br>
Novi Sad
<br><br>
E-mail:<br>
klupko.novisad@gmail.com
<br><br>
Radno vreme:<br>
Ponedeljak - petak : 10-18<br>
Subota i nedelja: neradne
<br><br><br>

    </p> </div>

    <div class= "mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2808.427583544877!2d19.83036451581465!3d45.259366755108154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475b104549fecced%3A0xe722513abada687a!2z0JHRg9C70LXQstCw0YAg0L7RgdC70L7QsdC-0ZLQtdGa0LAgMzBhLCDQndC-0LLQuCDQodCw0LQgMjEwMDA!5e0!3m2!1ssr!2srs!4v1671633664767!5m2!1ssr!2srs" 
        width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
</html>


