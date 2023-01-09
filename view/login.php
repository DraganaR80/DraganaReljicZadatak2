
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../images/favicon.png">
    <link rel="stylesheet" href="../css/login.css">
    <title>Prodavnica vunice </title>
</head>
<body>

    <Div class="Forma">
    <div class="centralni">
   
<h1 class="pozdrav"> KLUPKO </h1>
<br> <br>
<div class="slika">
<img src="../images/slika forma.png" width="300px" height="300px">

</div>

<br> <br> <br>


<form class="login" method="POST" action="welcome.php">
            <input type="text" name="username" placeholder="Korisničko ime" id="username" required>
       <br><br>
    
         <input type="password" name="password" placeholder="Lozinka" id="password" required >
      <br><br>
      <button class="submit" type="submit" name="login" id="login">Posalji</button>
    </form>
    </div>
    </div>

 </Div>
</body>
</html>
//<?php


// NE RADI ONO STO BI TREBALO
//if (isset($_SESSION["logovani_korisnik"])) {
  //  header("Location:../");
//} else {
  //  if (isset($_POST["login"])) {
    //    if ($_POST["username"] == "" || $_POST["password"] == "") {
      //      echo "Morate uneti ime i sifru";
        //} else {
          //  foreach ($_SESSION["users"] as $korisnik) {
            //    if ($korisnik->getUsername() == $_POST["username"] && $korisnik->getPassword() == $_POST["password"]) {
                  //  session_start();
                    //$_SESSION["logovani_korisnik"] = $korisnik;
                
                   // header("Location:../");
                   // exit();
                //} else {
                  //  echo "Korisnik ne postoji";
               // }
           // }
       // }
   // }
//}