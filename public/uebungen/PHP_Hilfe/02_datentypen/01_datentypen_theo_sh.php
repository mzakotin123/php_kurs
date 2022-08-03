<?php

require '../../../config.php';
echo HEAD;
/*Variablen Typen
Eine Variable kann unterschiedliche Werte aufnehmen, um Beispiel Zahlen oder Text . Allerdings ist es einer PHP Variable egal, welchen Wert du ihr gibst.*/

/*Integer
Bezeichnungen: int, integer, Ganzzahl*/

$zahl1 = 2;
$zahl2 = 15;
$zahl3 = 4432552;
$zahl4 = 0;
$zahl5 = 234;
$zahl6 = -5;
$zahl7 = -39928;

echo $zahl1 . NL;
echo $zahl2 . NL;
echo $zahl3 . NL;
echo $zahl4 . NL;
echo $zahl5 . NL;
echo $zahl6 . NL;
echo $zahl7 . NL;

/*Float
Bezeichnungen: float, double, Fließkommazahl*/

$float_zahl1 = 1.423;
$float_zahl2 = 166343.23;
$float_zahl3 = 0.234345;

echo $float_zahl1 . NL;
echo $float_zahl2 . NL;
echo $float_zahl3 . NL;


/*String
Bezeichnungen: String, Zeichenkette, Text, Zeichen*/

$string1 = "Hallo Welt";
$string2 = "test";
$string3 = "Klaus";
$string4 = "a";
$string5 = "xyz";
$string6 = "123";
$string7 = "1. Wahl";

echo $string1 . NL;
echo $string2 . NL;
echo $string3 . NL;
echo $string4 . NL;
echo $string5 . NL;
echo $string6 . NL;
echo $string7 . NL;

/*Boolean
Bezeichnungen: boolean, bool, Wahrheitswert*/

/*Boolean ist mitunter der einfachste Typ, denn er kann nur zwei Werte haben: TRUE oder FALSE
Variablen vom Typ boolean werden z.b. für folgende Abfrage eingesetzt:

Ist der Benutzer eingeloggt? TRUE = Ja, er ist eingeloggt
wurde die Taste „p“ gerückt? FALSE = Nein, sie wurde nicht gedrückt
hat sich der Benutzer für den Newsletter angemeldet? TRUE = Ja, hat er*/

$eingeloggt = true;
$eingeloggt = false;


/*Array
Bezeichnungen: array*/

/*Ein Array ist eine Variable, die viele Werte speichern kann.*/

$zahlen = array(1, 14, 82, 1002);
$namen = array("Peter", "David", "Henning", "Gerhard", "Norman");

echo PRE;

print_r($namen);
var_dump($zahlen);

print_r($zahlen);
var_dump($namen);

echo UPRE;

echo FOOT;