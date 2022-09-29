<html>
<head>
    <title>Výsledková listina</title>
</head>
<body>
<?php

$vitezove = [
    "Petr Vincena",
    "Markéta Calábková",
    "Marian Poljak",
    "Martin Kubeša",
    "Jan Šuta",
    "Jan Gocník",
    "Tomáš Kremel",
];

echo "<ol>";
foreach ($vitezove as $vitez) {
    echo "<li>$vitez</li>";
}
echo "</ol>";

//echo "<ol>"
//    . implode("\n",
//        array_map(function($text){return "<li>$text</li>";},
//            $vitezove)
//    ) . "</ol>";

?>
</body>
</html>