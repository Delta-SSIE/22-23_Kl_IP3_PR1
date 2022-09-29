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
            $result .= "<option value='$key'$selectHTML>".htmlspecialchars( $displayed)."</option>";
//            $result .= "<option value='$key'".($key === $selected ? " selected" : "").">$displayed</option>";
        }
    $result .= "</select>";
    return $result;
}

$options2 = [
    "p" => "<p>",
    "h1" => "<h1>",
    "div" => "<div>",
    "span" => "<span>"
];
echo htmlSelect( "tag", $options2, "div" );

function htmlRadio($name, $options, $selected )
{
    //<input type='radio' id='bmw' name='auto' value='bmw'><label for='bmw'>BMW</label><br>
    //<input type='radio' id='skoda' name='auto' value='skoda' checked><label for='skoda'>Škoda</label><br>
    $result = "<div>";
    foreach ($options as $key => $displayed)
    {
        $checkedHTML = $key === $selected ? " checked" : "";

        $result.="<input type='radio' id='$key' name='$name' value='$key'$checkedHTML>";
        $result.="<label for='$key'>$displayed</label>";
        $result.="<br>";
    }
    $result .= "</div>";
    return $result;
}
//echo htmlRadio( "auto", $options, "skoda" );
//
//
//?>
</body>
</html>
