<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Wallet</title>
    <link rel="stylesheet" href="stylewallet.css" type="text/css"/>

</head>

<body>
<div>
<?php

	echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
	echo "<p><b>Imie</b>: ".$_SESSION['name'];
	echo "<p><b>Nazwisko</b>: ".$_SESSION['surname'];
    echo "<p><b>Sex</b>: ".$_SESSION['sex'];
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
    echo "<p><b>Phone</b>: ".$_SESSION['phone'];

?>
    <div class="div2">
        <a href="Kredyt.php">Oblicz Kredyt</a> </p><br></br>
        <a href="Lokata.php">Oblicz lokate</a> </p>
    </div>
</div>
</body>
</html>