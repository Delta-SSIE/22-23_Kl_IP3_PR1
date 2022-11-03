<?php
session_start();
unset ($_SESSION['user']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logout</title>
</head>
<body>
<h1>Logout successful</h1>
<p>Please <a href='login.php'>log in again</a>.</p>
</body>
</html>
