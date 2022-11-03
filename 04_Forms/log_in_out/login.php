<?php

//přišla data?
// ne => formulář
// ano =>
  // mám uživatele => přihlásit a přesměrovat
  // nemám uživatele => formulář


$name = filter_input(INPUT_POST, 'name');
$pass = filter_input(INPUT_POST, 'password');

if ($name !== null && $pass !== null) {
    require_once "inc/users.inc.php";
    foreach ($users as $userId => $user) {
        if ($user['name'] === $name && $user['pass'] === $pass){
            session_start();
            $_SESSION['user'] = $userId;
            header("Location: home.php");
            exit;
        }
    }
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
if ($name !== null || $pass !== null) {
    echo "<p>Invalid credentials, please try again</p>";
}
?>
<form method="post">
    Jméno: <input type="text" name="name" value="<?= $name ?>"/><br />
    Heslo: <input type="password" name="password" /><br />
    <input type="submit" value="Odeslat" />
</form>
</body>
</html>
