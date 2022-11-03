<?php
session_start();
//mam uzivatele?
if (!isset($_SESSION['user'])) {
    //nepřihlášeno
    $status = "unauthorized";
    http_response_code(401);
} else {
    $userId = $_SESSION['user'];
    require_once "inc/users.inc.php";
    $user = $users[$userId];
    $status = "OK";
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
if ($status === "unauthorized"){
    echo "<h1>Not authorized</h1>";
    echo "<p>Please <a href='login.php'>log in</a></p>";
} else {
    echo "<h1>Home page</h1>";
    echo "<p>Welcome {$user['name']}</p>";
    echo "<p><a href='logout.php'>log me out</a>";
}
?>
</body>
</html>

