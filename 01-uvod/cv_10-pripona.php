<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

echo fileExt("muj_soubor.bak.jpg");

function fileExt(string $nazev) : string {

    $polohaTecky = mb_strrpos($nazev, "."); //pozice tecky
    $pripona = mb_substr($nazev, $polohaTecky + 1); //to, co je za teckou
    $pripona = mb_strtolower($pripona); //to za teckou, mala pismena

    return $pripona;
}

function fileExt2(string $nazev) : string {
    $segmenty = explode('.', $nazev); //rozbiju na pole
    return $segmenty[count($segmenty) - 1]; //vezmu poslední prvek
}

function fileExt3(string $nazev) : string {
    return pathinfo($nazev, PATHINFO_EXTENSION);
}

function fileExt4(string $nazev) : string {
    if( preg_match ('/[^.]+$/', $nazev, $matches)) {
        return $matches[0];
    }
    return $nazev;
}

?>
</body>
</html>