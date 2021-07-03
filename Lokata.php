<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kalkulator Bankowy</title>
    <link rel="stylesheet" href="styl.css" type="text/css"/>


</head>
<body>
<div id="1" style="text-align: center">
    <h3>Lokata</h3>
    <h4><a href="Kredyt.php" style="color: crimson; text-decoration: none">Tu obliczysz kredyt</a></h4>

    <form action="" method="post">
        <label><b>Kapitał początkowy: </b></label><br><br>
        <input type="number" step="50" min="50" name="pole"/><br><br>


        <label><b>Oprocentowanie:</b> </label><br><br>
        <input type="number" step="0.1" min="0.1" name="pole2"/><br><br>

        <label><b>Okres trwania: </b></label><br> <br>
        <input type="number" step="1" min="1" name="pole3"/> <br> <br>
        <select name="okres">
            <option value="dni">dni</option>
            <option value="tygodnie">tygodnie</option>
            <option value="miesiące" selected>miesiące</option>
            <option value="lata">lata</option>
        </select><br>

        <input type="submit" value="Sprawdź" name="submit"/><br><br>

    </form>





    <?php
    $liczba=$_POST['pole'];
    $liczba2=$_POST['pole2'];
    $liczba3=$_POST['pole3'];
    $okres=$_POST['okres'];
    $submit=$submit['submit'];
    $wynik="";
    $podatek="";

    if(isset($_POST['submit']))
    {
        $liczba2=$liczba2/100;

        switch($okres)
        {
            case "dni":
                $wynik = $liczba * $liczba2 * $liczba3/365;
                break;
            case "tygodnie":
                $wynik = $liczba * $liczba2 * $liczba3/52;
                break;
            case "miesiące":
                $wynik = $liczba * $liczba2 * $liczba3/12;
                break;
            case "lata":
                $wynik = $liczba * $liczba2 * $liczba3;
                break;
        }

        echo "Twój wkład: " .$liczba. '<br>';
        echo "Twój zysk z lokaty:" .round($wynik,2). '<br>';
        echo "Podatek od zysków kapitałowych: " .round(($wynik * 0.19),2). '<br>';
        echo "Twój rzeczywisty zysk: " .round(($wynik *0.81),2);

    }
    ?>
</div>

</body>
</html>
