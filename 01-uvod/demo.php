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
$a_bool = true;
$a_str = "foo";
$a_str2 = 'foo';
$an_int = 12;
$a_float = 12.0;

echo gettype($a_float);
echo "<br>";
echo gettype($a_bool);
echo "<br>";

// If this is an integer, increment it by four
if (is_int($an_int)) {
    $an_int += 4;
}
echo $an_int;

// If $a_bool is a string, print it out
// (does not print out anything)
if (is_string($a_bool)) {
    echo "String: $a_bool";
}

?>
</body>
</html>
