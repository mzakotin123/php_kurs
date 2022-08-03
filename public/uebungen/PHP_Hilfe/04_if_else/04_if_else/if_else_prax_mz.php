<?php
require '../../../../config.php';

echo '<b>a) größer 50</b>'.NL;
$zahl = 70;
echo $zahl.NL;

if ($zahl>50) { echo 'OK'.NL;}
echo NL;


echo '<b>b) a gewinnt</b>'.NL;
$a = 35;
$b = 23;

echo $a.NL;
echo $b.NL;

if (($a-$b)>=10) {echo 'a gewinnt'.NL;}
echo NL;


echo '<b>c) Summe gewinnt</b>'.NL;
$a = 35;
$b = 31;
$c = 32;
$d = 30;

echo $a.NL;
echo $b.NL;
echo $c.NL;
echo $d.NL;

if (($a+$b)>($c+$d)) { echo 'Team ab gewinnt'.NL;}
echo NL;


echo '<b>d) gleich und ungleich</b>'.NL;
$z1 = 170;
$z2 = 171;

echo $z1.NL;
echo $z2.NL;

if ($z1 == $z2) { echo 'gleich'.NL;}
else {echo 'ungleich'.NL;}
echo NL;


echo '<b>e) positiv/negativ</b>'.NL;
$zahl = 0;
echo $zahl.NL;

if ($zahl>=0) { echo 'positiv'.NL;}
else { echo 'negativ'.NL;}
echo NL;


echo '<b>f) Klausuren</b>'.NL;
$punkte = 30;
echo $punkte.NL;

switch($punkte) {
    case (!($punkte>=0  && $punkte<=10)): { echo 'Durchgefallen'.NL;} break;
    case (!($punkte>=11 && $punkte<=20)): { echo 'Naja'.NL;} break;
    case (!($punkte>=21 && $punkte<=30)): { echo 'Mittelgut'.NL;} break;
    case (!($punkte>=31 && $punkte<=40)): { echo 'Gut'.NL;} break;
    case (!($punkte>=41 && $punkte<=50)): { echo 'Super'.NL;} break;
    default:                              { echo 'Falscher Wert!'.NL;} break;
}

/*   if ($punkte>=0  && $punkte<=10) { echo 'Durchgefallen'.NL;}
else if ($punkte>=11 && $punkte<=20) { echo 'Naja'.NL;}
else if ($punkte>=21 && $punkte<=30) { echo 'Mittelgut'.NL;}
else if ($punkte>=31 && $punkte<=40) { echo 'Gut'.NL;}
else if ($punkte>=41 && $punkte<=50) { echo 'Super'.NL;}
   else                              { echo 'Falscher Wert!'.NL;}*/
echo NL;


echo '<b>g) Eingabeformular</b>'.NL;
echo NL;
?>
<!DOCTYPE html><html lang="de"><head><meta charset="utf-8"><title>Title</title></head><body>
    <p>Bitte geben Sie Menge und Sorte ein</p>
    <form action = "eingabeformular_aufgabe_g.php" method = "post">
    <p><input name = "liter"> Menge in Liter</p>
    <p><input name = "sorte"> Sorte (S oder N)</p>
    <p><input type = "submit">
        <input type = "reset"></p>
    </form>
    <?php
    echo ($_POST["sorte"]='');
         ($_POST["liter"]=300);
    if ($_POST["sorte"] == "S")
    {
        $zahlung = $_POST["liter"] * 1.40;
        $text = "Super";
    }
    else
    {
        $zahlung = $_POST["liter"] * 1.35;
        $text = "Normal";
    }
    $_POST["liter"] . " Liter $text kosten $zahlung &euro;".NL;
    echo NL;

    echo '<b>h) Eingabeformular Erweiterung</b>'.NL;
    echo ($_POST["sorte"]='');
         ($_POST["liter"]=300);

    if   ($_POST["liter"]>=100) {
        if ($_POST["sorte"] == "S")
        {
            $zahlung = $_POST["liter"] * 1.40;
            $text = "Super";
        }
        else
        {
            $zahlung = $_POST["liter"] * 1.35;
            $text = "Normal";
        }
        echo $_POST["liter"] . " Liter $text kosten $zahlung &euro;".NL;
    }
    ?>
    </body></html>
    <?php
    echo NL;


echo '<b>i) Fehler im IF-ELSE-Listing</b>'.NL;
 $kapital = 10000;//1. Fehler: Variable auskommentiert
 $kreditsumme = 1300;//2. Fehler: Variable auskommentiert

 if ($kapital > 10000 && $kreditsumme <= 2000)//3. und 4. Fehler: "$" vor Variablen vergessen
{                               //5. Fehler: Verkettungspunkt zwischen "$kapital" und " Euro..."
$message = "Sie haben " . $kapital . " Euro Kapital, wir gewähren Ihren Kredit.";//6. Fehler: ";" fehlt
   // echo $message.NL;
}
elseif ($kreditsumme >2000) //7. Fehler: runde Klammern () fehlen bei "elseif $kreditsumme..."
{
    $message = "Wir gewähren grundsätzlich keine Kredite über 2000 Euro. 
    Deshalb können wir die von Ihnen gewünschte Summe von " . $kreditsumme . " Euro nicht akzeptieren.";
    /*echo $message.NL;*/}
 //8. Fehler: je ein Verkettungspunkt vor bzw. nach Variable vergessen + ";" am Ende des Befehls vergessen
elseif ($kapital <= 10000)
{
$message = "Sie haben zu wenig Kapital (Ihre Eingabe: $kapital), um bei uns einen Kredit zu erhalten.";
//9. Fehler: Vergleichsoperator "=" vergessen;
    //echo $message.NL;
}
    echo ($kapital > 10000 && $kreditsumme <= 2000) ?
    "Sie haben " . $kapital . " Euro Kapital, wir gewähren Ihren Kredit.":
        (($kreditsumme > 2000) || ($kapital <= 1000) ?
            "Wir gewähren grundsätzlich keine Kredite über 2000 Euro.
            Deshalb können wir die von Ihnen gewünschte Summe von " . $kreditsumme . " Euro nicht akzeptieren.":
            "Sie haben zu wenig Kapital (Ihre Eingabe: $kapital), um bei uns einen Kredit zu erhalten.".NL);


 echo NL;

echo '<b>j), k) IF-ELSE anwenden: Horoskop</b>'.NL;
echo NL;
$sternzeichen = 'STEINBOCK';

if ($sternzeichen == 'STEINBOCK' || $sternzeichen == 'WAAGE' || $sternzeichen == 'WIDDER') {
 echo $sternzeichen.': ';

 if ($sternzeichen == 'STEINBOCK') { echo 'Sie sind sehr impulsiv.'.NL;}
}

echo NL;

echo '<b>l) IF-ELSE anwenden: Persönlichkeits-Profiler</b>'.NL;
echo NL;
$lieblingswerkzeug = 'Hammer';

if ($lieblingswerkzeug == 'Hammer' || $lieblingswerkzeug == 'Schraubenzieher' ||
    $lieblingswerkzeug == 'Zange' || $lieblingswerkzeug == 'Säge')
{ echo 'Lieblingswerkzeug: '.$lieblingswerkzeug.NL;}
echo NL;

echo '<b>m) Anrede mit IF-ELSE</b>'.NL;
echo NL;
?>
<!DOCTYPE html><html lang="de"><head><meta charset="utf-8"><title>Title</title></head>
<body>
<p>Bitte geben Sie Nachname und Geschlecht ein</p>
<form action = "eingabeformular_aufgabe_m.php" method = "post">
    <p><input name = "Nachname"> Nachname</p>
    <p><input name = "Geschlecht"> Geschlecht (m oder w)</p>
    <p><input type = "submit">
        <input type = "reset"></p>
</form>
<?php
($_POST["nachname"]="Zakotin");
($_POST["geschlecht"]="männlich");

    ($_POST["geschlecht"] == "männlich") ? "Hallo, Herr ".$_POST["nachname"]."<br>":
    (($_POST["geschlecht"] == "weiblich") ? "Hallo, Frau ".$_POST["nachname"]."<br>":
                                            "Ungültige Geschlechtsangabe!<br>");
?>
</body></html>
<?php
echo NL;







