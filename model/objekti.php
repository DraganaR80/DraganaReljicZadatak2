<?php

include_once "proizvodi.php";

session_start();

$p = new Ponuda(1, "Alize Batik", "Alize", "akril100%", "200m",280, 2000,);
$p1 = new Ponuda(2, "Alize Cotton Gold", "Alize", "pamuk", "150m", 300,1500);
$p2 = new Ponuda(3, "Alize Baby best", "Alize", "bambus-akril", "250m",250, 900);
$p3 = new Ponuda(4, "plasticna drska za torbu", "Bilang", "plastika","0",450, 750);
$p4 = new Ponuda(5, "drska za torbu od bambusa", "Bilang", "bambus","0",850, 300);
$p5 = new Ponuda(6, "metalna drska za torbu", "Bilang", "metal","0",700,350);
$p6 = new Ponuda(7, "heklica sa drskom", "Bilang", "metal-plastika","0", 320,850);
$p7 = new Ponuda(8, "plastisna heklica", "Bilang", "plastika","0",200,400 );
$p8 = new Ponuda(9, "metalna heklica", "Bilang", "metal","0",260,430 );

$proizvodi = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8];

$_SESSION["proizvodi"] = $proizvodi;



?>
