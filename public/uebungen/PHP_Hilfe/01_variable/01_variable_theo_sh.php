<?php
require_once __DIR__ . '/../../config.php';
//Aufbau ein Variable

/*Variablen in PHP beginnen immer mit einem Dollarzeichen($), direkt gefolgt vom Variablen - Namen,
danach ein "Gleichheitszeichen" (=) und anschließend der Text in Anführungszeichen('') eingebunden.
Am Ende das Semikolon als Befehlsabschluss(;).*/

$semantischername = 'Ein Name der selbsterklärend ist!';
$semantischer_name = 'ist eine komplett neue Variable mit anderer Schreibweise';


/*Dennoch solltet ihr wissen, welche Grundtypen von Werten / Variablen existieren:
Integer: Eine Integer-Variable enthält nur Ganzzahlen, d.h. Zahlen ohne Komma.
String: Dies ist eine Variable, die einen Text/Satz/Wort enthält.
Float: Eine Fließkommazahl, d.h. eine Zahl mit Komma. Man verwendet aber die englische Schreibweise und somit einen Punkt statt dem deutschen Komma.
Double: In PHP das gleiche wie float.
bool: Dies sind die Werte true und false*/

//Ausgabe eine String-Variable

echo $semantischername . NL;
echo $semantischer_name . NL;


//Wenn wir eine Variable doppelt "definieren", so überschreiben wir den Inhalt der Variable.


$name = 'Paul Meier';
echo 'Zuerst heiße ich ' . $name . '<br />';

$name = 'Stefan Müller';
echo 'Dann ist mein Name ' . $name . '<br />';

// Ein . Punke ist eine Verkettung einer Zeichenkette

$liter = 14;
$preis = 1.35;
$zahlung = $liter * $preis;
$einheit1 = 'Liter';
$einheit2 = 'Euro';

$gesamt = '<p>' . $liter . ' ' . $einheit1; /* 'Leeraum' */
$gesamt .= ' kosten ' . $zahlung . ' ' . $einheit2 . '</p>'; /* .= verlängert die Operation */

echo $gesamt . NL;
echo "<p>$liter $einheit1 kosten $zahlung $einheit2</p>" . NL;
echo '<p>$liter $einheit1 kosten $zahlung $einheit2</p>';


// Variablen für Zahlen
//Weist man einer Variable eine Zahl zu, so dürfen im Gegensatz zum Text hier keine Anführungszeichen benutzt werden.
//Ihr schreibt die Zahl also direkt in euren Code.

$zahl1 = 10;
$zahl2 = 5;

echo $zahl1 + $zahl2; //addieren
echo "<br />";
echo $zahl1 - $zahl2; //subtrahieren
echo "<br />";
echo $zahl1 * $zahl2; //multiplizieren
echo "<br />";
echo $zahl1 / $zahl2; //dividieren
echo "<br />";
echo pow($zahl1, $zahl2); //Zahl1 hoch Zahl2 (10^5)
echo "<br />";
echo sqrt(64); // Wurzel von 64
echo "<br />";
echo 2 * $zahl1 + 5 * $zahl2 - 3; //Berechnet 2*10 + 5*5 - 3 - (* und / Vorrang vor + und -)

//Dekrementieren und Inkrementieren

$erhoehen = 1;
$erhoehen++;
echo $erhoehen . NL;

$senken = 2;
$senken--;
echo $senken . NL;

//Schreibweise in Kurzform

$zahl = 1;
$zahl = $zahl + 10;
echo $zahl . NL;

$zahl ++;
$zahl = $zahl + 1;
echo $zahl;






