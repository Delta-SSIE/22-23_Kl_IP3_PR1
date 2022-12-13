<html>
<form method='get'>
    <input type="checkbox" name="order[pizza][]" value="šunková" />Šunková<br />
    <input type="checkbox" name="order[pizza][]" value="hawaii" />Hawaii<br />
    <input type="checkbox" name="order[pizza][]" value="quatro" />Čtyři roční období<br />
    <input type="submit" value="odeslat" />
</form>
<?php
    var_dump($_GET);
    var_dump($_SERVER);
?>
</html>
