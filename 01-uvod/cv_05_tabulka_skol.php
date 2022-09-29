<html>
<head>
    <title>Tabulka škol</title>
</head>
<body>
<?php

$vitezove = [
    "Gymnázium, Brno, třída Kapitána Jaroše 14" =>
        ["Kryštof Kolář", "Jan Šorm", "Zdislava Karásková", "Kateřina Bžatková", "Jan Dittrich", "Michal Reška", "Timotej Šujan"],
    "Gymnázium Jura Hronca, Bratislava" =>
        ["Zhen Ning David Liu", "Zuzana Frankovská", "Matej Králik", "Samuel Sučík", "Branislav Pilňan", "Ondrej Bohdal", "Michaela Brezinová"],
    "Gymnázium Jakuba Škody" =>
        ["Petr Vincena", "Markéta Calábková", "Marian Poljak", "Martin Kubeša", "Jan Šuta", "Jan Gocník", "Tomáš Kremel"],
    "Gymnázium Česká Třebová, Tyršovo nám. 970" =>
        ["Radovan Švarc", "Vojtěch Mikuláš", "Martin Stříteský", "Kateřina Průžková", "Jakub Reger", "Jakub Řehák", "Lukáš Kovář"],
    "Gymnázium Jihlava" =>
        ["Viktor Němeček", "Dominika Krásenská", "Zbyšek Voda", "Ondřej Holub", "Jan Čech", "František Koumar", "Jan Brukner"],
    "Gymnázium Matyáše Lercha, Brno, Žižkova 55" =>
        ["Mojmír Poprocký", "Jan Jurka", "Benedikt Peťko", "Michal Mrnuštík", "Karolína Kuchyňová", "Marek Mikulec", "Dalena Morávková"],
    "Gymnázium Opatov" =>
        ["Filip Bialas", "Anička Suchánková", "Zuzana Johanovská", "Martina Nováková", "Petr Jaroschy", "Jakub Sláma", "Mirek Kubů"],
    "Gymnázium Olomouc-Hejčín" =>
        ["Hong Quan Tran", "David Řehulka", "David Charvot", "Pavel Turek", "Filip Blažek", "Vojtěch Daniš", "David Procházka"],
    "Wichterlovo gymnázium, Ostrava-Poruba, p.o." =>
        ["Ondřej Divina", "Jan Špaček", "Pavel Gajdušek", "Alexandr Nikitin", "Jiří Škrobánek", "Martin Raška", "Tat Dat Duong"],
    "Gymnázium Jana Keplera" =>
        ["Jiří Kučera", "Štěpán Marek", "Martin Mach", "Dalimil Hájek", "Jiří Balhar", "Jiří Zbytovský", "Karel Jílek"],
];

$poradi = 1;

echo "<table>";
foreach ($vitezove as $skola => $ucastnici){
    echo "<tr>";
    echo "<td>$poradi.</td>";
    echo "<td>$skola</td>";
    echo "<td>".implode(", ", $ucastnici)."</td>";
    echo "</tr>";
    $poradi++;
}
echo "</table>";
?>
</body>
</html>