<?php
include "login.php";
include "model/opsti_korisnik.php";
include "model/admin.php";
include "model/korisnik.php";

session_start();
$admin = new Administrator('pera', 'peric', 'admin', 'admin',  'admin');

$user1 = new Korisnik('Dragana', 'Reljic', 'Gagana', 'dragana80', 'user');

$nizkorisnika = [$admin, $user1];
$_SESSION["korisnici"] = $nizkorisnika;
