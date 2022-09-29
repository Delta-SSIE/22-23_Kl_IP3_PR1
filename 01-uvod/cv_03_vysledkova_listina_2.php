<html>
<head>
    <title>Výsledková listina 2</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td, th {
            border: 1px solid gray;
        }

        .odd {
            background-color: #c0c0c0;
        }
    </style>
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

echo "<table>";
foreach ($vitezove as $index => $vitez) {
    $cssClass = $index % 2 === 1 ? "odd" : "even";
    echo "<tr class='$cssClass'>"
        .     "<td>" . $index + 1 . "</td>"
        .     "<td>$vitez</td>"
        . "</tr>";
}
echo "</table>";

?>
</body>
</html>
