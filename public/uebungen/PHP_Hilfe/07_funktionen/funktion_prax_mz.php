<?php
require '../../../config.php';

echo '<b>Aufgabe 1 und 2</b>'.NL;
echo NL;

function vermerk($name)
{
    echo "<table border='2'>";
    $vermerk="Dieser Programmteil wurde geschrieben von $name";
    echo "<tr><td>".$vermerk."</td></tr></table>";
}

echo 'Anfang des Programms'.NL;
vermerk('Bodo Berg');
echo 'Mitte des Programms'.NL;
vermerk('Hans Heim');
echo 'Ende des Programms'.NL;

echo NL;

echo '<b>Aufgabe 3</b>'.NL;

function quadrat($zahl){
    $ergebnis = pow($zahl,2);
    return $ergebnis;
}
echo quadrat(5).NL;
echo NL;

echo '<b>Aufgabe 4</b>'.NL;

function mittel($zahl1,$zahl2,$zahl3)
{
  $mittel = ($zahl1+$zahl2+$zahl3)/3;
  echo "Der Mittelwert von $zahl1, $zahl2 und $zahl3 ist $mittel.".NL;
}
mittel(1,2,3).NL;
mittel(4,5,6).NL;
mittel(7,8,9).NL;
echo NL;

echo '<b>Aufgabe 5</b>';
echo NL;

function vermerk2($vorname,$nachname,$abteilung) {

    echo "<table border='2'>";
    $vermerk2 ="Programmteil von $vorname $nachname, Abteilung $abteilung<br>
               E-Mail: $vorname.$nachname@$abteilung.phplevel.de";
    echo "<tr><td>".$vermerk2."</td></tr></table>";
}
vermerk2('Bodo','Berg','FE2');
vermerk2('Hans','Heim','SU3');