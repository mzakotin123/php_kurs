<?php
require '../../../config.php';
echo HEAD;
/*Wir können ein Array in PHP mit folgender Anweisung anlegen:*/

$namen = array();

/*Das Array hat noch keinen Wert, deshalb fügen wir ihm jetzt einen hinzu:*/

$namen = array();
$namen[] = "David";

echo $namen;

/*Wenn du das Skript ausführst, wirst du als Ausgabe „Array“ erhalten . Das ist auch korrekt,
denn Arrays arbeiten ein bisschen anders als Variablen . Um alle Werte in einem array zu erhalten,
gibt es die Funktion „print_r()“:*/

$namen = array();
$namen[] = "David";

print_r($namen);

/*Ausgabe: Array ( [0]=> David )*/
/*In Arrays startet der erste Wert nicht an Position 1, sondern an Position 0.*/
/*Als erstes wollen wir unser Namens-Array mit weiteren Namen füttern:*/


$namen = array();
$namen[] = "David";
$namen[] = "Norman";
$namen[] = "Paul";
$namen[] = "Henning";
$namen[] = "Peter";


print_r($namen);

/*Array Werte hinzufügen, ausgeben und löschen*/

/*Einfach der Name des Arrays + []-Klammern = Wert:*/
$namen = array("David", "Norman", "Paul", "Henning", "Peter");

echo PRE;
print_r($namen);
echo UPRE;

$namen = ["Max", "Norman", "Paul", "Henning", "Peter"];

echo PRE;
print_r($namen);
echo UPRE;

/*Der Versuch „echo $namen;“ führte zu nichts, denn das gesamte Array können wir nicht ausgeben.
Wir müssen auf die einzelnen Container im Array zugreifen. Möchtest du z.b. den Namen „Paul“ ausgeben,
führt dich folgender Code zum Ziel:*/


$namen = array("David", "Norman", "Paul", "Henning", "Peter");

echo $namen[2].NL;
var_dump($namen);


/*Oben ist unser Array mit allen 5 Spielern. Nun hat der Spieler „Henning“ verloren und wir wollen
ihn aus unserem Array löschen. Dazu hilft uns die Funktion „unset()“.*/

$namen = array("David", "Norman", "Paul", "Henning", "Peter");

echo "Anzahl Spieler: ".count($namen)."<br />";
unset($namen[3]);
echo "Anzahl Spieler: ".count($namen)."<br />";

echo '<pre>';
print_r($namen);
echo '</pre>';

/*In Zeile 72 geben wir erstmal aus, wieviele Spieler wir derzeit haben. Die Funktion „count()“ gibt die Anzahl aller
Elemente eines Arrays aus. In Zeile 73 löschen wir mit „unset()“ den 3. Container, also den Spieler
„Henning“ (0. Container beachten!). In Zeile 74 prüfen wir nun nochmal, wieviele Spieler vorhanden sind und stellen fest,
dass nun nur noch 4 Spieler dabei sind.*/






/*
Zum Schluss geben wir nochmal das Array formatiert aus und stellen fest, dass zwar der Spieler gelöscht wurde, aber
die Array-Indizes (also die Container-Zahlen) lückenhaft sind (die 3 fehlt). Im Kapitel Schleifen wirst du sehen, dass
das nicht so toll ist und fortlaufende Indizes weniger Probleme machen. Daher müssen wir, nachdem der Spieler „Henning“
gelöscht wurde, noch schnell das Array neu auflisten mit der PHP Funktion „array_values($namen);“:*/



$namen = array("David", "Norman", "Pauli", "Henning", "Peter");

echo "Anzahl Spieler: ".count($namen)."<br />";
unset($namen[3]);
echo "Anzahl Spieler: ".count($namen)."<br />";

echo '<pre>';
print_r($namen);
echo '</pre>';

$namen = array_values($namen);

echo '<pre>';
print_r($namen);
echo '</pre>';

/*Assoziative Arrays*/
/*Assoziative Arrays unterscheiden sich von normalen Arrays in nur einem
Punkt: Anstelle von Zahlen-Indizes haben assoziative Arrays, Namen als Index-Wert:*/

$spieler = array("Marie", "Anna", "Lars", "Martin");
echo $spieler[2] .NL;

//assoziatives Array
$spieler["Marie"] = 4030;
$spieler["Anna"] = 2313;
$spieler["Lars"] = 120;
$spieler["Martin"] = 2819;

echo "Punktzahl: ".$spieler["Anna"];


/*Array Werte sortieren

PHP bietet einige Standard-Funktionen zum sortieren von Arrays an: Array
 https://www.php.net/manual/de/array.sorting.php Sortier-Funktionen
Mit diesen ist es möglich ein eindimensionales Array beliebig zu sortieren:*/

$zahlen = array(7, 3, 0, 8);

echo '<pre>';
print_r($zahlen);
echo '</pre>';

sort($zahlen);

echo '<pre>';
print_r($zahlen);
echo '</pre>';

rsort($zahlen);

echo '<pre>';
print_r($zahlen);
echo '</pre>';

/*In diesem Beispiel wird die Array-Sortier-Funktion „Sort“ verwendet. Sort sortiert die Werte eines Arrays
von klein nach groß. Möchte man die Werte anstelle von „klein nach groß“ von „groß nach klein“ sortieren,
kann man dafür die Funktion rSort benutzen.*/


$zahlen = array(7, 3, 0, 8);

shuffle($zahlen);

echo '<pre>';
print_r($zahlen);
echo '</pre>';


/*Array nach Zufall sortieren – shuffle
Hin und wieder möchte man die Werte eines Arrays durcheinandermischen, dazu empfiehlt sich die Funktion shuffle.
Shuffle durchschmischt alle Werte eines Arrays und sollte bei jedem Aufruf eine andere Reihenfolge erzeugen.*/

/*Array alphabetisch sortieren
Hat man ein Array was nur aus Strings besteht (z.B. SchülerInnen-Namen einer Klasse) und möchte alle Namen
alphabetisch sortieren, kann man dafür ebenfalls die Funktion sort verwendet:*/

$namen = ["Michael", "Alex", "Peter", "Yvonne", "Fabian", "Sabine"];

echo '<pre>';
print_r($namen);
echo '</pre>';

sort($namen);

echo '<pre>';
print_r($namen);
echo '</pre>';




/*Mehrdimensionales Array*/

$adresse[0][0]   = "Axel";
$adresse[0][1]  = "Pratzner";

$adresse[1][0]   = "Sabine";
$adresse[1][1]  = "Musterfrau";

$adresse[2][0]   = "Fritz";
$adresse[2][1]  = "Müller";

echo PRE;
print_r ( $adresse );
echo UPRE;


$termin[] = array('Datum' => 20201208,
    'Ort'   => "Wangen",
    'Band'  => "cOoL RoCk oPaS");

$termin[] = array('Datum' => 20200311,
    'Ort'   => "Stuttgart",
    'Band'  => "Die Hosenbodenband");

$termin[] = array('Datum' => 20200628,
    'Ort'   => "Tübingen",
    'Band'  => "flying socks");

$termin[] = array('Datum' => 20200628,
    'Ort'   => "Stuttgart",
    'Band'  => "flying socks");

echo "<pre>";
print_r ( $termin );


/*Nützliche Funktionen für Arrays
Es gibt eine Reihe nützlicher Funktionen, um effektiv mit Arrays arbeiten zu können und sich selber viel Zeit zu sparen.

array_count_values
zählt die Werte eines Arrays

array_diff
vergleicht Arrays und gibt Unterschiede zurück (in neues Array)

in_array
überprüft, ob ein Wert in einem Array vorhanden ist

min
gibt das Element mit dem niedrigsten Wert zurück

max
gibt das Element mit dem höchsten Wert zurück

array_merge
Verbinden zweier Arrays

range
erstellt ein Array mit Unter- und Obergrenze (z. B. Lottozahlen 1 bis 36)

shuffle
Mischen der Werte eines Arrays - so kann z.B. für Lottozahlen eine Zufallsauswahl erzeugt werden. Mischen und dann die ersten 6 Ausgaben
*/
echo FOOT;