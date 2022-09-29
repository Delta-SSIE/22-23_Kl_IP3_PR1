<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stromy</title>
</head>
<body>
<?php

$stromy = [
    ["jmeno" => "dub", "plod" => "žalud", "typ" => "listnatý"],
    ["jmeno" => "jablon", "plod" => "jablko", "typ" => "listnatý"],
    ["jmeno" => "smrk", "plod" => "šiška", "typ" => "jehličnatý"],
];

foreach ($stromy as $strom)
    echo vypisStrom2($strom);

function vypisStrom($strom) {
    return 
    "<div class='strom'>
    <span class='vlastnost'>
        <span class='klic'>Název</span>: <span class='hodnota'>{$strom['jmeno']}</span>
    </span><br />
    <span class='vlastnost'>
        <span class='klic'>Plod</span>: <span class='hodnota'>{$strom['plod']}</span>
    </span><br />
    <span class='vlastnost'>
        <span class='klic'>Typ stromu</span>: <span class='hodnota'>{$strom['typ']}</span>
    </span>
    </div>
    ";
}

function vypisStrom2($strom) {
    $def = ['jmeno' => 'Název', 'plod' => 'Plod', 'typ' => 'Typ stromu'];

    $html = "<div class='strom'>";
    foreach ($def as $klic => $popis) {
        $html .= "<span class='vlastnost'>"
                    ."<span class='klic'>$popis</span>: <span class='hodnota'>{$strom[$klic]}</span>"
                ."</span><br />";
    }

    $html .= "</div>";
    return $html;
}

?>

</body>
</html>
