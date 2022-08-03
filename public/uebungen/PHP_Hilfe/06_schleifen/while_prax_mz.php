<?php
require '../../../config.php';

echo'<b>Aufgabe 1</b>'.NL;
$i = 1;
while ($i>=1 && $i<=20) {

    echo 'Das Quadrat von '.$i.' ist '.pow($i,2).'.'.NL;
    $i++;
}
echo NL;

echo '<b>Aufgabe 2</b>'.NL;
echo NL;
$zahl = 1;
$oben = 10;
echo "<h2>Potenzieren von Zahlen</h2>";
echo "<table border='1'> ";
echo "<tr>";
echo "<th>Zahl</td>";
echo "<th>Quadratzahl</th>";
echo "<th>Kubikzahl</th></tr>";
while ($zahl <= $oben) {
    echo "<tr>";
    echo "<td>" . $zahl . "</td>";
    echo "<td >" . pow ($zahl, 2) . "</td>";
    echo "<td>" . pow ($zahl, 3) . "</td></tr>"; $zahl = $zahl + 1;
}
echo "</table> ";
echo NL;

echo '<b>Aufgabe 3</b>'.NL;
echo NL;
$summe1 = 0;
$summe2 = 0;

while($summe1 < 25 && $summe2 < 25 ) {

    $wurf1 = rand(1, 6);
    $wurf2 = rand(1, 6);

    $summe1 += $wurf1;
    $summe2 += $wurf2;

    echo "Spieler 1 Ergebnis: $wurf1 </br> Spieler 2 Ergebnis: $wurf2 </br>";
    echo "Spieler 1 Punktestand: $wurf1 </br> Spieler 2 Punkestand: $wurf2 </br><br>";
}
    if($summe1 >= 25 && $summe1 > $summe2 || $summe2 >= 25){
        if($summe1 >= 25 && $summe1 > $summe2){
            echo "Spieler 1 hat gewonnen. </br>";
        }
        else if($summe2 >= 25 && $summe2 > $summe1) {
            echo "Spieler 2 hat gewonnen. </br>";
        }
        else if($summe1 == $summe2) {
            echo "Beide Spieler haben gewonnen.";
        }
    }


