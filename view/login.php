



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../images/favicon.png">
    <link rel="stylesheet" href="../css/index.css">
    <title>Prodavnica vunice </title>
</head>
<body>

<!-- <div class="header-div">
        <ul class="menu">
        
            <li class="menu-items">  <a href="index.php"> Početna </a></li>
            <li class= "menu-items">  <a href="Proizvodi.html">Proizvodi</a></li>
            <li class= "menu-items" > <a href="Porudžbenica.html"> Poručite</a></li>
            
        </ul> -->
      
        </div>
    <Div class="Forma">
    <div class="centralni">
   
<h1 class="pozdrav"> KLUPKO </h1>
<br> <br>
<div class="slika">
<img src="../images/slika forma.png" width="300px" height="300px">

</div>

<br> <br> <br>


         <form  action ="welcome.php" method="POST">
            <input type="text" name="username" placeholder="Korisničko ime" id="username" >
       <br><br>
    
         <input type="password" name="password" placeholder="Lozinka" id="password" >
      <br><br>
        <button class="pošalji">Pošalji</button>
    </form>
    </div>
    </div>

 </Div>
</body>
</html>
<?php
include "../podaciKorisnika.php";



    if (isset($_POST["login"])) {
        if ($_POST["username"] == "" || $_POST["password"] == "") {
            echo "Morate uneti ime i sifru";
        } else {
            foreach ($_SESSION["korisnici"] as $korisnik) {
                if ($korisnik->getIme() == $_POST["ime"] && $korisnik->getPassword() == $_POST["password"]) {
                    $_SESSION["logovani_korisnik"] = $korisnik;
                    
                    break;
                } else {
                    echo "Korisnik ne postoji";
                }
            }
        }
    }


?>