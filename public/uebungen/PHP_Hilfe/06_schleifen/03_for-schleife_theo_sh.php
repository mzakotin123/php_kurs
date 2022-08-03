<?php
/*7.2 For-Schleife

Die While-Schleife ist schlicht und elegant, kann aber zu Endlosschleifen führen, wenn man z.B. die Schleifenaktion
vergisst. Eine weitere Beobachtung ist, dass fast immer eine Laufvariable eingeführt wird, die in der Schleifenbedingung
genutzt und im Schleifenkörper verändert wird.
For Schleife wird verwendet wenn die Anzahl der Wiederholungen bekannt ist oder diese sich eindeutig im Verlauf
des Programms vor der Schleife ergibt.(Zählscheife)
Die For-Schleife bietet ein kompaktes Wohlfühl-Paket für Schleifen mit Laufvariable mit relativ geringem Endlos-Risiko.*/

/*Nehmen wir an, Sie wollen wie im obigen Beispiel drei Mal "wow" drucken. Dann machen Sie das mit einer
For-Schleife wie folgt:*/

    for ($zahl = 0; $zahl < 3; $zahl = $zahl + 1) {
    echo 'wow<br>';
}

/*Eine For-Schleife ist im Grunde eine Kurzschreibweise für die entsprechende While-Schleife:


$zahl = 0; // 1. Initialisierung der Laufvariable

while ($zahl < 3) { // 2. Schleifenbedingung
    echo 'wow';
    $zahl = $zahl + 1; // 3. Schleifenaktion
}
echo 'fertig';

Sie sehen oben die drei Komponenten einer While-Schleife mit
Laufvariable: Initialisierung (eine Laufvariable wird erzeugt und initialisiert),
Schleifenbedingung (nur unter dieser wird der Code-Block durchlaufen) und
Schleifenaktion (wird nach Ausführung des Code-Blocks durchgeführt).

Die For-Schleife sieht allgemein so aus:

for (INITALISIERUNG; BEDINGUNG; AKTION) {ANWEISUNG}

Die For-Schleife, die Sie also am häufigsten in irgendwelchem Code sehen werden, ist folgende:



*/

for ($zahl = 0; $zahl < 3; $zahl = $zahl + 1) {
    echo $zahl;
}
/*
Sie sehen, dass es identisch mit dem der While-Schleife ist. Deshalb ist es auch so wichtig, dass man versteht,
wie eine While-Schleife funktioniert, bevor man For-Schleifen verwendet. Eine For-Schleife ist nichts weiter
als ein Spezialfall einer While-Schleife.

Die Syntax einer For-Schleife wirkt am Anfang etwas sperrig. Schreiben Sie viele davon und lassen Sie sich wie
oben immmer die Laufvariable ausgeben, dann bekommen Sie schnell ein Gespür dafür. Beim Programmieren verwenden
Sie für Wiederholungen fast immer die For-Schleife, es lohnt sich also...

Laufvariable ist lokal
Die Laufvariable Ihrer For-Schleife ist eine lokale Variable:*/

for ($zahl = 0; $zahl < 3; $zahl ++) {
    echo $zahl;
}

/*Die $zahl wird im Kopf der Schleife (erste Zeile) deklariert und existiert für die Dauer der Schleife, also
bis zur schließenden geschweiften Klammer. Das heißt, dass man nach der Schleife nicht mehr auf $zahl zugreifen kann:*/

for ($zahl = 0; $zahl < 3; $zahl ++) {
    echo $zahl;
}
echo $zahl; //Fehlermeldung

/*Sie können natürlich mehrere Schleifen hintereinander definieren. Es wird jedesmal eine neue Variable erzeugt.

Beispiele für For-Schleifen
Rückwärts zählen

Sie können natürlich auch rückwärts durch die Zahlen gehen, wenn Sie die Initialisierung, Bedingung und Aktion
entsprechend anpassen.

*/


for ($zahl = 10; $zahl > 0; $zahl--) {
    echo $zahl;
}

/*Ein häufiger Anfängerfehler ist hier, dass die Bedinung "falsch herum" gedacht wird, also i < 0. In diesem Fall
wird die Schleife gar nicht ausgeführt, da i zu Beginn 10 ist, also nicht kleiner 0.

Jede zweite Zahl

Sie können auch in 2er-Schritten durch die Zahlen schreiten. Beachten Sie die Aktion.*/


for ($zahl = 0; $zahl <= 10; $zahl=$zahl+2) {
    echo $zahl;
}

/*Summe

Eine typische Anwendung der For-Schleife ist die Berechnung der Summe 1 + 2 + 3 + ... + N, wobei N eine
beliebige Zahl ist.

*/
for ($i=10; $i<=15; $i++)
for ($i=10; $i<15; $i++)
for ($i=10; $i>=5; $i--)
for ($i=10; $i>5; $i--)
for ($i=3; $i<=22; $i=$i+3)
for ($i=32; $i>12; $i=$i-4)
for ($i=12; $i<12.9; $i=$i+0.2)

$a=6; $b=16; $c=2;
for ($i=$a; $i<$b; $i=$i+$c);

/*Array mit Schleife durchlaufen
Im Abschnitt Arrays haben wir ein Array mit Namen angelegt. Dieses wollen wir jetzt mal mit einer
for-Schleife ausgeben:*/

$namen = array("David", "Norman", "Gerhard", "Henning", "Peter");

for($i=0; $i < 5; $i++)
{
    echo $namen[$i].'<br>';
}


/*Geschachtelte Schleifen

Dabei befindet sich eine Schleife innerhalb einer anderen Schleife. Dadurch wird später die Bearbeitung einer
Zweidimensionalen Struktur, Bsp. Einer Tabelle möglich.

for($z=1; $z<=5; $z=$z+1)
{
 for ($s=1; $s<=3; $s=$s+1)
echo 'Zeile'. $z . 'und Spalte'.$s;}

echo "<br>";


Die äusserste Schleife wird 5x durchlaufen. Innerhalb dieser Schleife befindet sich wiederrum eine innere Schleife
Die bei jedem Durchlauf der äußeren Schleife dreimal durchlaufen wird. Anschließend wird ein Umbruch erzeugt.
Es ergeben sich insgesamt 5x3=15 Wiederholungen.*/