<?php
function evenOdd(string $str) {
    $even = "";
    $odd = "";
    $len = mb_strlen($str);

    for ($i = 0; $i < $len; $i++) {
        $char = mb_substr($str, $i, 1);
        if ($i % 2 === 0)
            $even .= $char;
        else
            $odd .= $char;
    }

    echo $even . "<br>" . $odd;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *  {
            font-family: monospace;
        }
    </style>
</head>
<body>
<?php
echo evenOdd("Příliš žluťoučký kůň");
?>
</body>
</html>
