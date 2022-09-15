<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//$a_bool = true;
//$a_str = "foo";
//$a_str2 = 'foo';
//$an_int = 12;
//$a_float = 12.0;
//
//echo gettype($a_float);
//echo "<br>";
//echo gettype($a_bool);
//echo "<br>";
//
//// If this is an integer, increment it by four
//if (is_int($an_int)) {
//    $an_int += 4;
//}
//echo $an_int;
//
//// If $a_bool is a string, print it out 
//// (does not print out anything) 
//if (is_string($a_bool)) {
//    echo "String: $a_bool";
//}

//define("RATE", 1.21);
//
//var_dump(RATE);
//
//define("RATE", 1.19);
//
//var_dump(RATE);

//$a = 1; /* global scope */
//function test() {
//    global $a;
//    echo $a; /* reference to local scope variable */
//}
//test(); /* neudělá nic */

///var_dump(-8 % 3);
///
//$a = 7;
//$b = "7";
//
//if ($a === $b)
//    echo "Rovnost";
//else
//    echo "Nerovnost";

//$a = 0;
//while ($a < 10)
//{
//    echo ++$a;
//    echo "<br>\n";
//}

//$str = "ahoj";
//echo $str[2];
//echo "<br>";
//$str[0] = 'A';
//echo $str;
//$str = $str . " Bobe";
//echo "<br>$str";
//$str .= ", jak se vede"; //preferovaný způsob
//echo "<br>$str<br>";

// $veta = "Příliš žluťoučký kůň";
//$veta = "čau😃";
//echo $veta . "<br>";

//echo $veta[5];

//echo $veta[1].$veta[2];
// echo $veta[5];

//var_dump(strlen($veta));
//
//var_dump(mb_strlen($veta));


$veta = "Bob řekl: \"A to mě ani nehne. Já se s takovým 'nýmandem' vůbec nebudu bavit\"";
var_dump($veta);

$veta2 = "K vložení odstavce používáme tag <p>, nadpisy uvádí značky <h1> až <h6>";

echo htmlspecialchars($veta2);
?>
</body>
</html>
