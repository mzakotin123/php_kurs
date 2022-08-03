<?php
/*Eine While-Schleife (während)
hat große Ähnlichkeit mit einer If-Anweisung. Auch hier wird der Kontrollfluss verändert,
aber anstatt Zeilen zu überspringen, können Sie die Ausführung von Zeilen mehrfach wiederholen.
While Schleife wird verwendet wenn unbestimmte Anzahl von Wiederholungen erzeugt werden soll.
Das Ende der Wiederholung wird bei einem Schleifendurchlauf erreicht. While-Schleife wird hauptsächlich
bei Datenbankenabfragen eingesetzt. (bedingungsgesteuerte Schleife)

Nehmen wir an, Sie wollen etwas ausdrucken unter der Bedingung, dass die $zahl kleiner als 3 ist:*/

$zahl = 0;

if ($zahl < 3) {
    echo 'wow <br>';
}

/*Hier wird ein Mal "wow" wiedergegeben. Wenn Sie statt "if" "while" schreiben, wiederholt Processing den Code so lange,
wie die $zahl kleiner als 3 ist.*/

/* $zahl = 0;

das kann dauern...
while ($zahl < 3) {
    echo 'wow <br>';

}*/

/*Da sich $zahl nicht ändert, läuft die Schleife unendlich lang. Man nennt das eine Endlosschleife.
Die Lösung ist, $zahl bei jedem Durchlauf des Code-Blocks zu ändern.*/

$zahl = 0;

while ($zahl < 3) {
    echo 'wow <br>';
    $zahl = $zahl + 1;
}

/*Jetzt wird der Code-Block drei Mal durchlaufen. Beim ersten Mal ist $zahl gleich 0, also wird der Block durchlaufen.
Beim zweiten Mal ist $zahl gleich 1, also wieder durch den Block. Beim dritten Mal ist $zahl gleich 2, also nochmal.
Erst beim vierten Mal ist die Bedingung hinter while nicht mehr erfüllt und der Code-Block wird nicht mehr ausgeführt.
Es geht weiter hinter der schließenden geschweiften Klammer.*/

$zahl = 0;

while ($zahl < 3) {
    echo 'wow <br>';
    $zahl = $zahl + 1;
}
echo 'fertig';

/*Begriffe
Die allgemeine Form der While-Schleife kann man so formulieren:*/

/*while (BEDINGUNG){ANWEISUNG;}

Die BEDINGUNG nennt man auch die Schleifenbedingung. Nur wenn diese Bedingung erfüllt ist, wird der Code in der Schleife
ausgeführt (ähnlich wie beim If).

Das Gegenteil der Schleifenbedingung (die logische Negation) nennt man übrigens die Abbruchbedingung. In unserem Beispiel
ist die Abbruchbedingung, dass $zahl größer-gleich 3 ist. Ein häufiger Fehler ist, dass statt der Schleifenbedingung
die Abbruchbedingung eingesetzt wird.

Eine Variable, die hochgezählt (oder runtergezählt) wird und Teil der Schleifenbedingung ist, nennt man Laufvariable.
Die Tatsache, dass die Laufvariable hochgezählt wird, nennt man auch die Schleifenaktion. Diese ist besonders wichtig,
weil man sie leicht vergisst, was wiederum zur Folge hat, dass die Schleife nie abbricht (Endlosschleife) und Ihr Programm
evtl. abstürzt.

Die ANWEISUNG in der allgemeinen Form der While-Schleife ist in der Regel ein Code-Block, d.h. eine oder mehr Zeilen Code,
die von geschweiften Klammern umgeben sind.*/

$zahl = 0; // Initialisierung der Laufvariable

while ($zahl < 3) { // Schleifenbedingung
    echo 'wow';
    $zahl = $zahl + 1; // Schleifenaktion
}
echo 'fertig';
/*
Übung
a) While-Schleife 1 bis 5

Erzeugen Sie eine einfache While-Schleife mit Laufvariable i, die von 1 bis 5 läuft. Geben Sie die Werte von i auf der Konsole aus.*/

$i = 1;

while ($i <= 5) {
    print_r($i);
    $i ++;
}
echo 'fertig';

/*b) While-Schleife 0 bis 4

Ändern Sie die Schleife von oben, so dass die Laufvariable i von 0 bis 4 läuft. Auf der Konsole soll weiterhin 1 bis 5 erscheinen.*/

$i = 0;

while ($i < 5) {
    echo $i+1;
    $i ++;
}
echo 'fertig <br>';


/*Zusammenfassung
Eine While-Schleife erlaubt es, eine Zahl von Codezeilen (Code-Block) wiederholt auszuführen. Die allgemeine
Form der While-Schleife lautet:

while (BEDINGUNG)
    ANWEISUNG
Die Schleife besteht aus einer BEDINGUNG, genannt Schleifenbedingung, und einer ANWEISUNG, i.d.R. in Form eines
Code-Blocks. Nur wenn die Schleifenbedingung erfüllt ist, wird der Code-Block ausgeführt. Nach Ausführung des
Code-Blocks wird wieder die Schleifenbedingung getestet. Das ganze geht solange bis die Schleifenbedingung nicht
mehr erfüllt ist.

Ein Beispiel für eine typische While-Schleife:*/

    $i = 0;

    while ($i < 5) {
        echo $i+1;
        $i ++;
    }
    echo 'fertig';


