<?php
require_once "./inc/bootstrap.inc.php";


dump(Zvire::getPocet());

$milka = new Krava("fialová", "Bůůůů");
//$milka->setBarva("fialová");
echo  $milka->predstavSe();

echo "<br>";
dump(Zvire::getPocet());

$bimbo = new Slon();
$bimbo->setBarva("šedá");
echo  $bimbo->predstavSe();
dump(Zvire::getPocet());


$arr = [1,2,3, ['a' => "ahoj", "n" => "nazdar"]];
dump($arr);

//echo 1/0;