<?php
function reverseStr(string $str) {
    $reversed = "";
    $len = mb_strlen($str);
    for ($i = $len - 1; $i >= 0; $i--) {
        $reversed .= mb_substr($str, $i, 1);
    }
    return $reversed;
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
</head>
<body>
<?php
echo reverseStr(mb_strtoupper("Příliš žluťoučký kůň"));
?>
</body>
</html>
