<?php

//class Tele extends Krava {}

//$mlok = new Zvire();
//$mlok->setBarva("šedá");
//echo $mlok->predstavSe();
//
//echo "<br>";
var_dump(Zvire::getPocet());

$milka = new Krava("fialová", "Bůůůů");
//$milka->setBarva("fialová");
echo  $milka->predstavSe();

echo "<br>";
var_dump(Zvire::getPocet());

$bimbo = new Slon();
$bimbo->setBarva("šedá");
echo  $bimbo->predstavSe();
var_dump(Zvire::getPocet());
