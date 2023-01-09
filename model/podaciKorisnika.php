<?php
session_start();

include "Opsti_korisnik.php";
include "Admin.php";
include "Korisnik.php";


$admin = new Administrator('pera', 'peric', 'admin', 'admin',  'admin');

$user1 = new Korisnik('Dragana', 'Reljic', 'Gagana', 'dragana80', 'user');

$nizkorisnika = [$admin, $user1];
$_SESSION["korisnici"] = $nizkorisnika;
