<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Připojení k DB</title>
</head>
<body class="container">
<?php

require_once "inc/db.inc.php";

$stmt = $pdo->query('SELECT * FROM room');

echo "Počet řádků: " . $stmt->rowCount() . "<br>";

if ($stmt->rowCount() == 0) {
    echo "Záznam neobsahuje žádná data";
} else {
    echo "<table class='table table-striped'>";
    echo "<tr>";
    echo "<th>Name</th><th>No.</th><th>Phone</th>";
    echo "</tr>";
    while ($row = $stmt->fetch()) {
        echo "<tr>";
        echo "<td><a href='room.php?roomId={$row->room_id}'>{$row->name}</a></td><td>{$row->no}</td><td>{$row->phone}</td>";
        echo "</tr>";
    //foreach ($stmt as $row) {
//        var_dump($row);
//        var_dump($row->name);
//        var_dump($row['name']);
    }
    echo "</table>";
}
unset($stmt);
?>
</body>
</html>