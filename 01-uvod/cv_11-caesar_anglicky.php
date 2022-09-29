<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

$retezec = "KRUPICOVA KASE";
$posun = 1;
$vysledek = "";

for ($i = 0; $i < mb_strlen($retezec); $i++) {
    $znak = mb_substr($retezec, $i, 1);
    $vysledek .= posunZnak($znak, $posun);
}

echo "$retezec ($posun): ";
echo $vysledek;

function posunZnak($znak, $posun) {
    if (ord($znak) < ord("A") || ord($znak) > ord("Z")) {
        //znak je před A nebo za Z - není to písmeno, nebude se posouvat
        return $znak;
    }

    $cisloZnaku = ord ($znak) + $posun; //převedu znak na číslo a posunu

    while ($cisloZnaku > ord("Z"))  {//preteceni Z - musím v abecedě "couvnout" o délku abecedy, t.j. 26 znaků
        $cisloZnaku -= 26;
    }

    while ($cisloZnaku < ord("A")) {
        $cisloZnaku += 26;
    }

    $posunute = chr ($cisloZnaku); //převedu číslo na znak

    return $posunute; //vrátím posunutý znak
}

?>
</body>
</html>