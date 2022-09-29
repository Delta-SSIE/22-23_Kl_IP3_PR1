<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?php

$elh = [
    ["poradi" => "1", "mesto" => "Plzen", "zapasy" => 10, "vyhry" => 6, "prohry" => 2, "skore" => "38:24", "body" => 21 ],
    ["poradi" => "2", "mesto" => "Liberec", "zapasy" => 10, "vyhry" => 5, "prohry" => 3, "skore" => "29:22", "body" => 19 ],
    ["poradi" => "3", "mesto" => "Olomouc", "zapasy" => 9, "vyhry" => 5, "prohry" => 2, "skore" => "19:15", "body" => 19 ],
    ["poradi" => "4", "mesto" => "Brno", "zapasy" => 10, "vyhry" => 6, "prohry" => 3, "skore" => "32:29", "body" => 19 ],
    ["poradi" => "5", "mesto" => "Sparta", "zapasy" => 10, "vyhry" => 4, "prohry" => 2, "skore" => "43:37", "body" => 18 ],
    ["poradi" => "6", "mesto" => "Ml. Boleslav", "zapasy" => 9, "vyhry" => 5, "prohry" => 2, "skore" => "23:17", "body" => 17 ],
    ["poradi" => "7", "mesto" => "Hradec Kralove", "zapasy" => 10, "vyhry" => 5, "prohry" => 3, "skore" => "29:31", "body" => 17 ],
    ["poradi" => "8", "zapasy" => 10, "mesto" => "Chomutov", "vyhry" => 4, "prohry" => 4, "skore" => "19:22", "body" => 15 ],
    ["poradi" => "9", "mesto" => "Vitkovice", "zapasy" => 9, "vyhry" => 4, "prohry" => 4, "skore" => "30:25", "body" => 14 ],
    ["poradi" => "10", "mesto" => "Trinec", "zapasy" => 10, "vyhry" => 4, "prohry" => 6, "skore" => "27:26", "body" => 12 ],
    ["poradi" => "11", "mesto" => "Pardubice", "zapasy" => 9, "vyhry" => 3, "prohry" => 6, "skore" => "16:26", "body" => 9 ],
    ["poradi" => "12", "mesto" => "Litvinov", "zapasy" => 10, "vyhry" => 1, "prohry" => 6, "skore" => "22:28", "body" => 8 ],
    ["poradi" => "13", "mesto" => "Zlin", "zapasy" => 8, "vyhry" => 2, "prohry" => 5, "skore" => "14:24", "body" => 7 ],
    ["poradi" => "14", "mesto" => "Karlovy Vary", "zapasy" => 10, "vyhry" => 2, "prohry" => 8, "skore" => "21:36", "body" => 6 ],
];

echo "<table>";
echo "<tr>";
echo "<th>Pořadí</th>";
echo "<th>Město</th>";
echo "<th>Zápasy</th>";
echo "<th>Výhry</th>";
echo "<th>Prohry</th>";
echo "<th>Skore</th>";
echo "<th>Body</th>";
echo "<tr>";

foreach ($elh as $team){
    echo "<tr>";
        foreach ($team as $value){
            echo "<td>$value</td>";
        }
    echo "</tr>";
}
echo "</table>";


$description = [
    "poradi" => "Pořadí",
    "mesto" => "Město",
    "zapasy" => "Zápasy",
    "vyhry" => "Výhry",
    "prohry" => "Prohry",
    "skore" => "Skore",
    "body" => "Body"
];

echo "<table>";
echo "<tr>";
foreach ($description as $desc){
    echo "<th>$desc</th>";
}
echo "</tr>";

foreach ($elh as $team){
    echo "<tr>";
    foreach (array_keys($description) as $key){
        echo "<td>$team[$key]</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>