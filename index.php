<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: wallet.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<link rel="stylesheet" href="stylewallet.css" type="text/css"/>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Wallet</title>
</head>

<body>
<div>
<h1>Witaj w Wallet!</h1>
<h2>Żyje się za pieniądze, ale nie warto żyć dla pieniędzy!</h2><br /><br />
	
	<form action="zaloguj.php" method="post">
        <div class="div2">
        <div class="log">
            <p>Login:</p> <input type="text" name="login" /> <br />
            <p>Hasło:</p> <input type="password" name="haslo" /> <br /><br />
            <input type="submit" value="Zaloguj się" />
        </div>
            <div class="rejestracja">
                <p>Nie masz jeszcze konta?</p><br />
                <a href="rejestracja.php" <button type="button" value="Zarejestruj się">Zarejestruj się!</button></a>

            </div>
        </div>
	</form>

<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>
</div>
</body>
</html>