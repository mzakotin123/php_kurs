<?php

/*Bedingung

die allgemeine Form der if-Anweisung ist:*/

/*Aufbau:

if (BEDINGUNG ZUTRIFFT DANN) {FÜHRE DIE ANWEISUNG/BEFEHLE IN KLAMMER AUS}

Eine Anweisung ist entweder eine einzelne Code-Zeile (Befehl, Variablenzuweisung ...)
oder - wie in unseren Beispielen - ein Code-Block, der mit geschweiften Klammern markiert ist.

Eine Bedingung ist ein sogenannter boolescher Ausdruck, benannt nach dem britischen
Mathematiker George Boole. Ein boolescher Ausdruck ist ein Ausdruck, der nach Auswertung immer
entweder wahr (true) oder falsch (false) ist. Die zwei einfachsten booleschen Ausdrücke sind
true und false. Sie können z.B. schreiben:-->*/

if (true)
{
echo 'ist richtig';
}

if (false)
{
    echo 'ist richtig';
}

/*Eine weiterer boolescher Ausdruck ist ein numerischer Vergleich*/

/*Vergleichsoperatoren
==	gleich
===	identisch (auch vom Variablentyp - String, Boolean, Integer)
!=	nicht gleich / Negation
<>	ungleich
<	kleiner
<=	kleiner oder gleich
>	größer
>=	größer und auch gleich*/


/*oder*/


$aktion = '3';

if ($aktion == '3') {
    echo "<p>Aktion hat gewünschten Wert 3</p>";
}



$punkte = 80;

if ($punkte > 50) {
    echo 'Super, Du hast bestanden!' . '</br>';
}

echo 'Weiter so.'. '</br>';


$punkteTest = 75;
$zusatzTest = 85;


if ($punkteTest >= 50)
{
    echo 'Test ist bestanden!'.'</br>';
    if ($zusatzTest >= 50)
    {
        echo 'Zusatztest ist AUCH bestanden!'.'</br>';
    }
}
echo 'Top noch ein Test gewünscht?';


/*Zusammenfassung
Eine If-Anweisung erlaubt es, eine oder mehrere Code-Zeilen (einen Code-Block)
nur unter einer ganz bestimmten Bedingung auszuführen.

Eine Bedingung wird durch einen booleschen Ausdruck definiert. Dies ist ein Ausdruck,
der zu true oder false ausgewertet werden kann. Die Schlüsselworte true und false sind
jeweils (triviale) boolesche Ausdrücke. Wichtiger sind arithmetische Vergleiche wie
x > 5 oder 10 == y und nur binäre Vergleiche. WICHTIG: Immer doppeltes Gleichheitszeichen beim Vergleich nehmen!

Ein Code-Block ist eine Anzahl von Anweisungen (können also mehrere Zeilen sein),
von geschweiften Klammern umgrenzt sind. Die Code-Zeilen innerhalb der Klammern sind
in Processing alle gleich weit eingerückt, so dass man leicht erkennt, in welchem Block
sich eine Zeile befindet.

Möchte man Code-Zeilen genau dann ausführen, wenn die Bedingung nicht erfüllt ist, so
hängt man mit Hilfe von else einen zweiten Code-Block an, der genau dann ausgeführt wird.*/

/*Der Else-Teil
Wollen wir auch eine Aktion immer dann ausführen, wenn die Bedingung nicht erfüllt oder falsch ist,
können wir noch einen Else-Teil (else heißt "sonst") anfügen:*/

$punkteTest = 75;

if ($punkteTest >= 50)
{
    echo 'Test ist bestanden!'.'</br>';}
else
{
            echo 'Zusatztest ist NICHT bestanden!'.'</br>';
        }

echo 'Top noch ein Test gewünscht?';



$punkteTest2 = 55;

if ($punkteTest2 > 90) {
    echo 'Bestnote.';
} else if ($punkteTest2 > 75) {
    echo 'Sehr gut.';
} else if ($punkteTest2 > 50) {
    echo 'Bestanden.';
} else {
    echo 'Leider durchgefallen'; // Else-Teil
}
echo 'Servus'.'<br>';


/*if (BEDINGUNG-1)
    ANWEISUNG-1
else if (BEDINGUNG-2)
    ANWEISUNG-2
else if (BEDINGUNG-3)
    ANWEISUNG-3
else
   ANWEISUNG-N*/



/*Ein gutes Beispiel ist ein Kommentarsystem. Du möchtest deinen Benutzern erlauben, auf deiner Seite Kommentare
zu schreiben, aber nur wenn der Benutzer seinen Namen und eine Email-Adresse angibt.*/


$name = 'Name';
$email = 'klaus63552@fakemail.de';

    if($name != '')
    {
        if($email != '')
        {
            echo 'Vielen Dank für deinen Kommentar.'.'<br>';
        }
    }
    else {
        echo 'Bitte geben Sie eine gültige Mailadresse an.';
    }

/*Wie kann man es anders schreiben?*/

/*
Bislang haben wir innerhalb der Bedingung nur für einen Wert geprüft, ob der Wert wahr oder falsch ist.
Doch man kann mehrere Wahrheitswerte kombinieren:


Kurze Zusammenfassung:

if (Bedingungen){Anweisung}

Gelernt haben wir dass wir eine Bedingung mit einer Variable und einem Vergleichsoperator ins Verhältnis setzen.
(Bedingung kann zB. x>5 Vergleich, x==5 Gleichheit, x!=5 ungleich, true/false)



Was nicht geht ist wenn eine Variable zwischen zwei Werten steht zB. 0 < x < 10
diese Aussage hat zwei Bedingungen x>0 und x<10 stehen in einer Beziehung und sollen gleichzeitig wahr sein.

Logisches UND

Nehmen wir an, Sie möchten prüfen, ob die Variable x zwischen 10 und 20 liegt, in der Schule schreibt man
einfach 10 < x < 20. In der Programmierung müssen Sie das in zwei Vergleiche zerlegen, in 10 < x und x < 20.

Damit "10 < x < 20" wirklich gilt, müssen beide Vergleich wahr sein.

Diese Kombination nennt man das logische UND (engl. AND).
Das logische UND nennt man auch einen logischen Operator. Im Code schreibt man für den UND-Operator ein doppeltes
"käufmännisches Und", also && :

$x = 15;
$y = 10;
if ($x>10 && $y<20) {
    echo 'Yes!';
}
else {
    echo 'No!';
}


$name = 'Tim';
$email = 'timtim@fakemail.de';

if ($name != '' && $email != '')
{
    echo 'Dein Kommentar wurde gespeichert';
}
 else {
        echo 'Bitte geben Sie eine gültige Mailadresse an.';
    }


Logisches ODER
Der zweite wichtige Operator ist das logische ODER (engl. OR).  Dieser sagt, dass nur eine Bedingung wahr sein muss,
damit der gesamte Ausdruck wahr ist. Das logische ODER schreibt man im Code mit zwei senkrechten Strichen || (Pipe-Symbol)
In der mathematischen Logik nennt man diese Operation auch Disjunktion - „Oder-Verknüpfung“, von lat. disiungere „trennen,
unterscheiden, nicht vermengen“ und das Symbol für ODER sieht so aus: V

    $name = 'Name';
    $email = '';


    if($name != '' || $email != '')
    {
        echo 'Dein Kommentar wurde gespeichert';
    }
    else {
        echo 'Bitte geben Sie eine gültige Mailadresse oder einen gültigen Namen an.';
    }

Drei und mehr Bedingungen kombinieren
Natürlich ist man nicht auf zwei Bedingungen beschränkt, man kann soviele Bedingungen miteinander kombinieren wie man mag:

    if ($wert1 != 0 && $wert2 > 100 && $wert2 <= 200)
    {
        //WAHR, nur wenn alle 3 Bedingungen wahr sind
    }


    if ($wert1 != 0 || $wert2 > 100 || $wert2 <= 200)
    {
       //WAHR, wenn einer der 3 Bedingungen wahr sind
    }


    if (($wert1 != 0 || $wert2 > 100) && ($wert2 <= 200))
    {
        //WAHR, wenn entweder Bedingung 1 oder Bedingung 2 wahr ist UND Bedingung 3 wahr ist
        //bei solchen Konstruktionen auf die Klammersetzung achten!
    }


    if (($wert1 != 0 && $wert2 > 100) || ($wert2 <= 200))
    {
        //WAHR, wenn entweder Bedingung 1 und Bedingung 2 wahr sind ODER Bedingung 3 wahr ist
        //bei solchen Konstruktionen auf die Klammersetzung achten!
    }


Negation
Mit dem Ausrufezeichen negieren Sie einen Ausdruck, d.h. Sie kehren den Wert um (true statt false bzw. false statt true).
Das Ausrufezeichen nennt man auch den logischen Negationsoperator oder das logische NICHT (engl. NOT). Im Unterschied zu
UND/ODER steht dieser Operator nicht zwischen zwei Ausdrücken, sondern vor einem einzigen Ausdruck.

Wenn Sie z.B. den Vergleich x < 10 negieren wollen, schreiben Sie ! (x < 10) . Das entspricht dann offensichtlich
x >= 10 , d.h. das könnte man eigentlich auch direkt so (ohne Negation) hinschreiben, aber für komplexere Ausdrücke ist
die Negation manchmal bequemer oder lesbarer.


$x = 15;
$y = 10;
if (!($x>10 && $y<20)) {
    echo 'Yes!';
}
else {
    echo 'No!';
}

Zusammenfassung
Zwei boolesche Ausdrücke (wie z.B. die Vergleiche x > 5 und x < 10) lassen sich mit den logischen Operatoren UND bzw.
ODER kombinieren. Das Gesamte ist wieder ein boolescher Ausdruck.
Wir haben drei logische Operatoren kennen gelernt:
UND: Der Ausdruck A && B (A und B) ist genau dann wahr, wenn sowohl A als auch B wahr sind.
ODER: Der Ausdruck A || B (A oder B) ist genau dann wahr, wenn entweder A oder B (oder beide) wahr sind.
NICHT: Der Ausdruck !A ist genau dann wahr, wenn A falsch ist.
Ein booleschen Ausdrucks ist also entweder
das Schlüsselwort true oder false
ein Vergleich von Werten (z.B. == oder <=<>)
die logische Verknüpfung von zwei booleschen Ausdrücken mit && oder ||
die Negation eines booleschen Ausdrucks mit !
Interessant an dieser Definition ist, dass boolesche Ausdrücke innerhalb von booleschen Ausdrücken vorkommen können
(wie z.B. in $x && ($y || $z)). Das ist sehr praktisch, weil man mit wenigen Regeln auch sehr komplexe, verschachtelte
Konstrukte erfassen kann.




Ternärer Operator – Kurzform für If then else

Das „if else“-Konstrukt wird in PHP sehr häufig verwendet, daher haben die Entwickler eine Kurzform für if else
herausgebracht. Auch wenn sie für Anfänger häufig nicht so leicht verstanden wird, kann sie in manchen Fällen Platz und
Codezeilen sparen. Das ganze nennt sich der ternärer Operator und sieht folgendermaßen aus:



(wenn Ausdruck wahr) ? (mache das hier) : (ansonsten das hier)


if($alter < 18)
        {echo 'Du bist nicht volljährig';}
    else
        {echo 'Du bist volljährig';}

//als Kurzform
echo ($alter < 18) ? 'Du bist nicht volljährig' : 'Du bist volljährig';


--------------


 if($a > $b)
        {$b = $a;}
    else
        {$a = $b;}

    //als Kurzform
    ($a > $b) ? $b = $a : $a = $b;


    if($a > $b)
        {$c = $a;}
    else
        {$c = $b;}

    //als Kurzform
    $c = ($a > $b) ? $a : $b;


--------------

$stunden= 1;

if($stunden == 1)
    echo 'zuletzt eingeloggt vor 1 Stunde'.'<br>';
else
    echo 'zuletzt eingeloggt vor '.$stunden.' Stunden'.'<br>';

$stunden= 2;

echo 'zuletzt eingeloggt vor '.$stunden.' Stunde'.(($stunden==1) ? "" : "n");


--------------


$auswahl = 3;
    echo $geschlecht = ($auswahl == 1) ? "männlich" : (($auswahl == 2) ? "weiblich" : "unbekannt");
*/

?>