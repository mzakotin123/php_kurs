<?php

$i = 0;
while ($i < 3) {
 echo 'hi';
    $i++;
}
/*Was wird ausgegeben?*/


$i = 0;
while ($i < 3) {
 echo 'hi';
    $i++;
}
echo 'bye';

//Was wird ausgegeben?


$i = 0;
while ($i < 0) {
 echo 'hi';
    $i++;
}
echo 'bye';

//Was wird ausgegeben?




//**$i = 3;

while ($i < 6) {
 echo $i;
    $i += 1;
}
//Was wird ausgegeben?

$i = 0;

while ($i < 3) {
 echo $i;
    $i ++;
}

//Was wird ausgegeben?

$x = 3;
$i = 0;

while ($i < 3) {
    $x += 1;
    $i += 1;
}
echo $x;

//Was wird ausgegeben?



/*
Aufgaben 1

Schreiben Sie ein PHP-Programm, das alle Quadratzahlen der Zahlen von 1 bis 20 auf dem
Bildschirm ausgibt.

Verwenden Sie sowohl die while-Schleife.

Ausgabe-Beispiel: Das Quadrat von 12 ist 144.

// Gib die Quadratzahlen von 1 bis 20 aus



/*
Aufgaben 2

Die Aufgabe dieses Programms besteht darin, mithilfe einer while-Schleife wiederholt Zahlen zu potenzieren.

Unter Setzung einer Untergrenze (zahl = 1) und einer Obergrenze (ober = 100) sollen für jede natürliche Zahl
seine Zweier- und Dreierpotenz berechnet werden.

Unter einer Überschrift "Potenzieren von Zahlen" sollen die Ergebnisse in einer Tabelle mit der Kopfzeile:
Zahl - Quadratzahl - Kubikzahl angezeigt werden.

Ergebnis:

Potenzieren von Zahlen

Zahl	Quadratzahl	Kubikzahl
1	        1       	1
2	        4	        8
3	        9	        27
4	        16      	64
5           25      	125


Aufgabenerweiterung: Verändern Sie die Unter- und Obergrenze!

Eingesetzte PHP-Elemente: Schleife mit while-Anweisung, Funktion pow */


/*
Aufgaben 3

Erstelle ein kleines Computerspiel. Zwei Spieler würfeln mithilfe des Zufallsgenerators gegeneinander.
Die Würfel jedes Spielers sollen addiert werden. Sobald einer der beiden Spieler oder beide Spieler nach
einer Spielrunde den Wert 25 erreicht oder überschritte haben, ist das Spiel zu Ende.

*/

