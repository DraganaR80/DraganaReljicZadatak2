<?php

include_once "../model/podaciKorisnika.php";



    if (isset($_POST["login"])) {
        if ($_POST["username"] == "" || $_POST["password"] == "") {
           
        } else {
            foreach ($_SESSION["korisnici"] as $korisnik) {
                if ($korisnik->getIme() == $_POST["ime"] && $korisnik->getPassword() == $_POST["password"]) {
                    $_SESSION["logovani_korisnik"] = $korisnik;
                    

                } else {
                    echo "Korisnik ne postoji";
                }
            }
        }
    }


?>
















