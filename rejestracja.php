<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="stylewallet.css" type="text/css"/>
    <title>Rejestracja w Wallet</title>
</head>
<body>
<form method="post">
    <div>
    <fieldset>
        <legend>Rejestracja w Wallet</legend>
        <ul>
            <li><label>Login <input type="text" required minlength="2" name="login" placeholder="Twoj login"></label></li><br>
            <li><label>Hasło <input type="password" required minlength="2" name="pass1" placeholder="Twoje hasło"></label></li><br>
            <li><label>Hasło <input type="password" required minlength="2" name="pass2" placeholder="Twoje hasło"></label></li><br>
            <li><label>Imie <input type="text" required minlength="2" name="name" placeholder="Twoje imię"></label></li><br>
            <li><label>Nazwisko <input type="text" required minlength="2" name="surnename" placeholder="Twoje nazwisko"></label></li><br>
            <li><label>Płeć <input type="text" required minlength="2" name="sex" placeholder="Twoja płeć"></label></li><br>
            <input type="radio" name="plec">Kobieta</p>
            <input type="radio" name="plec">Mężczyzna</p>
            <li><label>Adres e-mail <input type="email" required name="email" placeholder="Adres e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"></label></li><br>
            <li><label>Telefon komórkowy <input type="tel" name="phone" placeholder="Format:123-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required></label></li><br>
        </ul>
    </fieldset><br><input type="submit" name="sub1" value="Zarejestruj się">
    </div>
</form>

    <?php
    echo "\n";
    $keys = array_keys($_POST);
    foreach ($keys as $key){
        echo "<li>\$_POST['$key'] == {$_POST[$key]}<BR></li>";
    }
    ?>
</ul>
</body>
</html>