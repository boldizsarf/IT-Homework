<center>
    <font color="blue"><h1>Belépés</h1></font>
    <?php
    if (!(empty($param[2]))) {
        if ($param[2] == 1) {
            echo "<br><font color='red'>Hibás jelszó!</font><br><br>";
        }
        if ($param[2] == 2) {
            echo "<br><font color='red'>Ismeretlen felhasználó!</font><br><br>";
        }
    }
    ?>
    <form method="post" action="/backend/login.php">
        <input id="username" name="username" type="text" placeholder="Felhasználónév">
        <br><br>
        <input id="passwd" name="passwd" type="password" placeholder="Jelszó">
        <br><br>
        <input type="submit" value="Belépés">
    </form>
</center>
