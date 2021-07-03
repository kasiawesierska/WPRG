<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kalkulator bankowy</title>
    <link rel="stylesheet" href="stylbank.css" type="text/css"/>


</head>
<body>
<div id="1" style="text-align: center">
    <h3>Kredyt</h3>
    <h4><a href="Lokata.php" style="color: crimson; text-decoration: none">A tutaj jest lokata</a></h4>

    <form action="" method="post">
        <label><b>Wartość kredytu: </b></label>
        <input type="number" step="50" min="50" name="pole"/><br><br>


        <label><b>Oprocentowanie:</b> </label>
        <input type="number" step="0.1" min="0.1" name="pole2"/><br><br>

        <label><b>Okres trwania: </b></label>
        <input type="number" step="1" min="1" name="pole3"/>
        <select name="okres">
            <option >miesiące</option>
            <option selected>lata</option>
        </select><br><br>

        <label><b>Rata płatna co: </b></label>
        <select name="rata">
            <option selected>miesiąc</option>
            <option >kwartał</option>
            <option  >pół roku</option>
            <option >rok</option>
        </select><br><br>

        <input type="submit" value="Sprawdź" name="submit"/><br><br>

        <table>
            <tr>
                <th>Lp.</th>
                <th>Zadłużenie</th>
                <th>Spłacany kapitał</th>
                <th>Odsetki</th>
                <th>Rata kredytowa</th>
            </tr>






            <?php
            $liczba=$_POST['pole'];
            $liczba2=$_POST['pole2'];
            $liczba3=$_POST['pole3'];
            $okres=$_POST['okres'];
            $rata=$_POST['rata'];
            $submit=$submit['submit'];

            $ilośćRat="";
            $W_raty="";
            $procent="";
            $a="";

            if(isset($_POST['submit']))
            {

                echo "Spłaty kredytu zaciągniętego na kwotę " .$liczba. " z oprocentowaniem " .$liczba2. "% będą wyglądały następująco:";
                $liczba2=$liczba2/100;
                switch($okres)
                {
                    case "miesiące":
                        if($rata=='miesiąc')
                        {
                            $liczba2=$liczba2/12;
                            $ilośćRat=$liczba3;
                        }
                        else if ($rata=='kwartał')
                        {
                            $liczba2=$liczba2/4;
                            $ilośćRat=$liczba3/3;
                        }
                        else if($rata=='pół roku')
                        {
                            $liczba2=$liczba2/2;
                            $ilośćRat=$liczba3/6;
                        }
                        else
                        {
                            $ilośćRat=$liczba3/12;
                        }
                        $procent=pow($liczba2+1,$ilośćRat);
                        $W_raty=$liczba*$liczba2*$procent/($procent-1);
                        $Zadłużenie=$liczba;
                        $Odsetki=round(($liczba*$liczba2),2);
                        $Rata_kredytowa=round($W_raty,2);
                        $Spłacany_kapitał=round($Rata_kredytowa-$Odsetki,2);
                        for($a="1";$a<=$ilośćRat;$a++)
                        {
                            echo "<tr>
                <th>".$a."</th>
                <th>".$Zadłużenie."</th>
                <th>".$Spłacany_kapitał."</th>
                <th>".$Odsetki."</th>
                <th>".$Rata_kredytowa."</th>
            </tr>";

                            $Zadłużenie=$Zadłużenie-$Spłacany_kapitał;
                            $Odsetki=round(($Zadłużenie*$liczba2),2);
                            $Spłacany_kapitał=round($Rata_kredytowa-$Odsetki,2);

                        }
                        break;

                    case "lata":
                        if($rata=='miesiąc')
                        {
                            $liczba2=$liczba2/12;
                            $ilośćRat=$liczba3*12;
                        }
                        else if ($rata=='kwartał')
                        {
                            $liczba2=$liczba2/4;
                            $ilośćRat=$liczba3*3;
                        }
                        else if($rata=='pół roku')
                        {
                            $liczba2=$liczba2/2;
                            $ilośćRat=$liczba3*2;
                        }
                        else
                        {
                            $liczba2=$liczba2/1;
                            $ilośćRat=$liczba3;
                        }
                        $procent=pow($liczba2+1,$ilośćRat);
                        $W_raty=$liczba*$liczba2*$procent/($procent-1);
                        $Zadłużenie=$liczba;
                        $Odsetki=round(($liczba*$liczba2),2);
                        $Rata_kredytowa=round($W_raty,2);
                        $Spłacany_kapitał=round($Rata_kredytowa-$Odsetki,2);
                        for($a="1";$a<=$ilośćRat;$a++)
                        {
                            echo "<tr>
                <th>".$a."</th>
                <th>".$Zadłużenie."</th>
                <th>".$Spłacany_kapitał."</th>
                <th>".$Odsetki."</th>
                <th>".$Rata_kredytowa."</th>
            </tr>";

                            $Zadłużenie=round($Zadłużenie-$Spłacany_kapitał,2);
                            $Odsetki=round(($Zadłużenie*$liczba2),2);
                            $Spłacany_kapitał=round($Rata_kredytowa-$Odsetki,2);
                        }
                        break;
                }

            }
            ?>
        </table>
    </form>
</div>
</body>
</html>
