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

$options = [
    "volvo" => "Volvo",
    "bmw" => "BMW",
    "trabant" => "Trabant",
    "skoda" => "Škoda"
];
echo htmlSelect( "auto", $options, "skoda" );

function htmlSelect($name, $options, $selected )
{
    $result = "<select name='$name'>";
        foreach ($options as $key => $displayed)
        {
            $selectHTML = $key === $selected ? " selected" : "";
            $result .= "<option value='$key'$selectHTML>$displayed</option>";
//            $result .= "<option value='$key'".($key === $selected ? " selected" : "").">$displayed</option>";
        }
    $result .= "</select>";
    return $result;
}
?>
</body>
</html>
