<?php
// Funktionen in PHP

/*PHP-Anwendungen nehmen zum Teil sehr große Ausmaße an, z.T. macht das Zusammenspiel von Hunderten Seiten
eine PHP-Anwendung aus. Hierbei passiert es häufig, dass man bestimmte Codezeilen an verschiedenen Stellen
verwendet. Das können z.B. Berechnungen sein, wo der Rechenweg derselbe ist. Ein typisches Beispiel
hierfür ist die Berechnung Mehrwertsteuer.

Wenn man einen Code mehrfach verwendet, dann bedeutet das einen hohen Aufwand bei der Erstellung und bei
Aktualisierungen. Angenommen, man hat einen bestimmten Code 20x verwendet. Wenn der Code verändert werden soll,
muss der Code an 20 Stellen verändert werden. Neben dem erhöhten Aufwand können sich hier leicht Fehler einschleichen.

Damit man einen mehrfach verwendeten Code nur 1x schreiben muss, kann man in PHP Funktionen erstellen.
Eine Funktion kann an verschiedenen Stellen einer Anwendung aufgerufen werden. Falls der Code irgendwann
verändert werden muss, so muss man nur die Funktion bearbeiten und nicht überall an den Stellen, an denen
er aufgerufen wird. Das vereinfacht die Arbeit enorm.

Ist eine Funktion einmal erstellt, ist die funktionsweise eigentlich sehr einfach. Die Funktion kann aufgerufen
werden. Dabei können auch Werte als Parameter übergeben werden. Angenommen, man hat eine Funktion zum Addieren
von zwei Zahlen erstellt. Man kann die Funktion aufrufen und dabei zwei Zahlen übergeben. Die Funktion wird
daraufhin ausgeführt und liefert das Ergebnis der Addition, das weiter verarbeitet werden kann. Nach diesem Prinzip
kann die Funktion mehrfach verwendet werden.

Aufbau von Funktionen
Eingene Funktionen werde mithilfe von function(OPTIONAL Parameter){Funktionsrumpf} definiert.
Auf der folgenden Abbildung ist anhand eines Beispiels der Aufbau einer Funktion zu sehen. Mit dem Begriff
function wird diese deklariert. Danach wird der Name der Funktion (ohne $) eingegeben, in diesem Beispiel
heißt die Funktion sayHello. Innerhalb der runden Klammern kann man kommagetrennt OPTIONAL Parameter angeben,
die man beim Aufruf an die Funktion übergeben kann. In diesem Beispiel wird kein Parameter bestimmt.
Innerhalb der geschweiften Klammern wird der Code angegeben, der beim Aufruf ausgeführt werden soll.
In diesem Beispiel wird der Satz Ich sag Hallo mein Fre und das Ergebnis wird ausgegeben.



*/
function sayHello ()
{
    $satz = 'Ich sag Hallo mein Freund.';
    echo $satz;

}

sayHello();
echo '<br>';
sayHello();

//__________________________________________



function pluszeichen ()
{
    echo '<br>';
    for ($i=1; $i<=40; $i=$i+1)
    echo '+';
    echo '<br>';
}

pluszeichen();
echo 'hier ist die erste Zeile';
pluszeichen();
echo 'hier ist die zweite Zeile';
pluszeichen();
echo 'hier ist die dritte Zeile';
pluszeichen();


/*Aufruf, Definition und Funktionstypen
Der Aufruf einer eigenen oder vordefinierten Funktione erfolgt

entweder aus dem Rumpf des Dokuments heraus wie oben pluszeichen()
oder aus anderen Funktionen heraus.

Der Ort der Funktionsdefinition wichtig. Sie können nur Funktionen aufrufen, die dem Programm bekannt sind.
Sie müssen:
- entweder zu den vordefinerten Funktionen gehören oder
- im Dokument definiert werden oder
- aus eigenen externen Dateien Stammen

Ein Funktion
ohne Parameter führt bei jedem Aufruf immer genau die gleich Aufgabe aus
mit einem oder mehreren Parametern führt sie bei jedem Aufruf in Abhängigkeit von den Parametern ähnliche Aufgabe aus,
und mit einem Rückgabewert führt sie gleich oder ähnliche Aufgabeb aus und liefert eine Ergebnis an die aufrufende Stelle.

Achtung: Namen der Funktionen beginnen mit keinem $-Zeichen. Zusätzlich dürfen die Funktionen nicht den Namen einer
vordefinierten Funkionen haben.
*/
/*
Ein Funktion mit Parameter
führt vom Parameterwert ähnliche Aufgabe aus. Erweiterung der Funktion Pluszeichen

*/
function pluszeichen1 ($anzahl)
{
    echo '<br>';
    for ($i=1; $i<= $anzahl; $i=$i+1)
    echo '+';
    echo '<br>';
}

pluszeichen1(30);
echo 'hier ist die erste Zeile';
pluszeichen1(25);
echo 'hier ist die zweite Zeile';
pluszeichen1(50);
echo 'hier ist die dritte Zeile';
$x=20;
pluszeichen1($x);
echo 'hier ist die vierte Zeile';
pluszeichen1($x*3);
echo 'hier ist die fünfte Zeile';


/*Die Funktion pluszeichen() wird 5x aufgerufen und bekommt jedesmal einen anderen Wert.
    Es kann sich um eine Zahl, eine Variable oder ein Ergebnis einer Berrechnung handeln.

    Der Parameter wird an der Funktion übergeben. Dort wird dieser Wert in der Variable $anzahl gespeichert.
    Der Wert $anzahl steuert die Ausführung der for-Schleife mit dem Ergebnis, dass die Pluszeichen unterschiedlich
land sind.*/

/*
Rückgabewert mit return

Beim Aufruf einer PHP-Funktion wird der Code der Funktion mit den evtl. übergebenen Parametern ausgeführt.
Enthält z.B. die Funktion einen echo-Befehl, dann erfolgt auch eine entsprechende Ausgabe. Nicht immer ist es erwünscht,
dass das bereits in der Funktion festgelegt wird. Es ist auch möglich, erst beim Aufruf festzulegen, ob eine Ausgabe
erfolgen soll oder nicht. Hierbei muss man die Funktion mit der Anweisung return einen Rückgabewert übergeben lassen.
Das ist ein Wert, der beim Aufruf der Funktion an das aufrufende Modul übergeben wird und beispielsweise ausgegeben
werden kann.

Beim folgenden Beispiel enthält die Funktion eine Additionsrechnung und das Ergebnis wird in der Variable $ergebnis
gespeichert. Diese Variable wurde als Rückgabewert festgelegt, sodass man beim Aufruf der Funktion immer den Wert der
Variable $ergebnis erhalten würde. Möchte man den Rückgabewert direkt ausgeben, kann man die Funktion mit dem echo-Befehl
aufrufen.*/

// Funktion deklarieren
function addieren ($wert1, $wert2)
{
    $ergebnis = $wert1 + $wert2;
    return $ergebnis;
}

// Aufruf der Funktion, Ausgabe des Rückgabewerts
echo addieren (3, 2);


/*
Der Umweg über den Rückgabewert ist deshalb notwendig, weil Variablen in Funktionen nicht außerhalb zur Verfügung
stehen und umgekehrt. Ausnahmen bilden hier lediglich die globalen Variablen. Beim folgenden Beispiel würde nichts
ausgegeben werden, da die in der Funktion enthaltene Variable $ergebnis außerhalb der Funktion nicht zur Verfügung steht.
*/




function add($z1, $z2)
{
    $summe = $z1+$z2;
    return $summe;

}

$c = add(3,4);
echo 'Summe:'.$c;

$x = 5;
$c = add($x, 12);
echo 'Summe:'.$c;

echo 'Summe:'.add(13,2);
echo 'Summe:.add(13,2)';


/*
Mit Hilfe der Anweisung return:
-wird der Wert an die aufrufende Stelle zurückgeliefert und
kann dort weiterverarbeitet werden.
-vorzeitig verlassen erden und nicht erst am Ende. Dies gilt unabhängig
davon, ob sie einen Wert zurückliefert oder nicht.


Allgemein Der Aufruf einer Funktion darf nicht innerhalb einer Zeichenkette stehen.
Die letzte Zeile der Ausgabe zeigt, dass dann nur der Name der Funktion und ihre Parameter
genannt werden, die Funktion selber aber nicht aufgerufen wird.*/


/*______________*/


function schleife () {

    // Text, der ausgegeben wird
    echo 'Auszugebender Text <br>';

    $tage = array('Mo', 'Di', 'Mi', 'Do', 'Fr');

    for ($i = 0; $i < count ($tage); $i++)
    {

        // Abbruch mit Rückgabewert
        if ($tage[$i] == 'Do')
        {
            return $i;
        }
    }

}

// Aufruf der Funktion
$rueckgabe = schleife();

// Rückgabewert ausgeben
echo $rueckgabe;

/*<!--Nicht immer möchte man, dass der Rückgabewert der Funktion am Bildschirm ausgegeben wird. Es passiert auch häufig,
dass man ihn einer Variable zuweisen möchte, damit man ihn weiter verarbeiten kann. Beim folgenden Beispiel wird
der Rückgabewert beim Aufruf der Funktion der Variable $rueckgabe zugewiesen.-->*/

// Funktion deklarieren
function addition ($wert1, $wert2)
{
$ergebnis = $wert1 + $wert2;
return $ergebnis;
}

// Rückgabewert einer Variable zuweisen
$rueckgabe = add (3, 2);

// Weiterverarbeiten des Variable
$neuesergebnis = $rueckgabe + 5;
echo $neuesergebnis;
/*
Datentyp des Rückgabewerts

Man kann mit return nur einen Rückgabewert übergeben. Dieser kann jedoch beliebigen Datentyps sein, also Zeichenketten,
Wahrheitswert (bool), Ganzzahlen, Fließkommazahlen, Arrays oder auch Objekte. Wenn man mehrere Werte übergeben möchte,
könnte man diese in einem Array speichern, da diese mehrere Werte enthalten können und als Rückgabewert das Array angeben.
    Nachfolgend sind einige Beispielcodes, bei denen die Rückgabewerte der Funktionen unterschiedlichen Datentyps sind
und zur Überprüfung untereinander ausgegeben werden. Für die Ermittlung des Datentyps wird die Funktion gettype() verwendet.*/


// Typ string
function typstring()
{
    return 'Zeichenkette';
}

// Typ und Wert ausgeben
echo gettype (typstring()) . '<br>';
echo typstring() . '<br>';


// Typ bool
function typbool()
{
    return TRUE;
}

// Typ und Wert ausgeben
echo gettype (typbool()) . '<br>';
echo typbool() . '<br>';


// Typ int
function typint()
{
    return 10;
}

// Typ und Wert ausgeben
echo gettype (typint()) . '<br>';
echo typint() . '<br>';



// Typ double
function typdouble()
{
    return 10.563;
}

// Typ und Wert ausgeben
echo gettype (typdouble()) . '<br>';
echo typdouble() . '<br>';



// Typ array
function typarray()
{
    $wochentage = array ('Mo', 'Di', 'Mi', 'Do', 'Fr');
    return $wochentage;
}

// Typ und Wert ausgeben
echo gettype (typarray()) . '<br>';
$wochentage = typarray();

foreach ($wochentage as $wert)
{
    echo $wert . '<br>';
}

//Parameter in PHP-Funktionen

/*Bei der Deklaration von PHP-Funktionen werden innerhalb der runden Klammern kommagetrennt die Parameter angegeben,
die man beim Aufruf an die Funktion übergeben kann. Die festgelegten Parameter sowie die Übergabe beim Aufruf sollten
soweit es geht konsistent sein. Beim folgenden Beispiel werden zwei Parameter festgelegt, die innerhalb der Funktion
in den Variablen $wert1 und $wert2 gespeichert werden. Da beim Aufruf ebenfalls zwei Werte übergeben wurden ist die
Konsistenz gegeben.*/


function addieren_3 ($wert1, $wert2)
{
  $ergebnis = $wert1 + $wert2;
  return $ergebnis;
}

// Ausgabe 5
echo addieren (3, 2);


/*Auslassen von Werten

Wenn man Werte auslässt, behandelt der PHP-Interpreter die nicht übergebenen Parameter als NULL. und versucht trotzdem
die Funktion soweit es geht auszuführen. Das kann natürlich dafür sorgen, dass das Ergebnis nicht stimmt. Beim folgenden
Beispiel wird nichts ausgegeben, da eine Division durch NULL nicht möglich ist.*/


function dividieren ($wert1, $wert2)
{
  $ergebnis = $wert1 / $wert2;
  return $ergebnis;
}

// Gibt nichts aus
echo dividieren (6);

/*
Übergabe zu vieler Werte

Übergibt man beim Funktionsaufruf mehr Werte als die Anzahl der festgelegten Parameter, werden die zuviel
übergebenen Werte ignoriert. Beim folgenden Beispiel wurden drei Parameter übergeben, obwohl nur zwei festgelegt wurden.*/



function addieren4 ($wert1, $wert2)
{
  $ergebnis = $wert1 + $wert2;
  return $ergebnis;
}

// Ausgabe 5
echo addieren (3, 2, 4);


/*Parameter mit Werten vorbelegen

Es kann vorkommen, dass eine Funktion so konzipiert ist, dass nicht immer dieselbe Anzahl an Werten übergeben werden
muss. In solchen Fällen kann man den Parametern mit einem Gleichheitszeichen Standardwerte zuweisen. Diese gelten für
den Fall, dass keine Werte übergeben werden. Hierbei muss man auf jeden Fall die Reihenfolge beachten. Von links nach
rechts gesehen werden zuerst die Parameter festgelegt, die einen Wert benötigen und danach erst die optionalen Parameter
mit den Standardwerten. Hält man die Reihenfolge nicht ein, würde das zur fehlerhaften Ausführung der Funktion führen.*/



function addieren5 ($wert1, $wert2 = 5)
{
  $ergebnis = $wert1 + $wert2;
  return $ergebnis;
}

// Ausgabe 8
echo addieren (3);

/*
Standardfunktionen mit func_

Es gibt einige Standardfunktionen in PHP, die speziell beim Aufruf einer selbst definierten Funktion für die Verarbeitung
der Übergabewerte verwendet werden können. Diese beginnen mit func_ und ermöglichen die Verarbeitung vieler Parameter,
auch wenn bei der Deklaration der Funktion keine festgelegt wurden. Bei der Übergabe werden die Werte mit einem Index
durchnummeriert und man kann auf sie mit den folgenden Funktionen zugreifen.

func_get_arg(): Ermöglicht den Zugriff auf einen Wert über den Index.
func_get_args(): Bildet aus allen übergebenen Werten ein indiziertes Array.
func_num_args(): Gibt die Anzahl der übergebenen Werte zurück.
Zugriff auf einen Wert mit func_get_arg()

Diese Funktion ermöglicht den Zugriff auf einen Wert über den Index, der beim ersten Wert 0 ist und mit jedem weiteren
Wert um 1 hochgezählt wird. Beim folgenden Beispiel sind keine Parameter festgelegt. Trotzdem werden beim Funktionsaufruf 3 Werte
übergeben, die innerhalb der Funktion mit Hilfe von func_get_arg() ermittelt und verarbeitet werden.*/


function abc()
{
  $a = func_get_arg(0);
  $b = func_get_arg(1);
  $c = func_get_arg(2);
  return $a . $b . $c;
}

// Ausgabe abc
echo abc (a, b, c);


/*Zugriff auf alle Werte mit func_get_args()

Mit func_get_args() werden alle übergebenen Werte in einem indizierten Array gespeichert, sodass man darüber auf einzelne
oder alle Werte zugreifen kann. Das kann man beispielsweise nutzen, um eine Funktion für Additionsrechnung mit beliebig
vielen Zahlen zu erstellen. Beim folgenden Beispiel werden mit der foreach-Schleife nacheinander alle Parameter ausgelesen
und zur Variable $wert hinzu addiert. Beim Funktionsaufruf könnte man beliebig viele Zahlen übergeben.*/



function addieren6()
{
  $wert = 0;
  foreach (func_get_args() as $n)
  {
    $wert += $n;
  }
  return $wert;
}

// Ausgabe 20
echo addieren (2, 3, 5, 10);

/*
Anzahl der Werte func_num_args() ermitteln

Der auszuführende Code einer Funktion ist häufig abhängig von der Anzahl der übergebenen Werte. Mit func_num_args() kann
man die Zahl ermitteln und z.B. in Verbindung mit der if-, else-Abfrage den weiteren Programmverlauf davon abhängig machen.*/



function abcd()
{
  if (func_num_args() < 4)
  {
    return 'Keine Operation';
  }
  elseif (func_num_args() == 4)
  {
    $a = func_get_arg(0);
    $b = func_get_arg(1);
    $c = func_get_arg(2);
    $d = func_get_arg(3);
    return $a . $b . $c . $d;
  }
  else
  {
    return 'Keine Operation';
  }
}

// Ausgabe abcd
echo abcd (a, b, c, d);



/*Gültigkeitsbereich von Variablen

Beim Funktionsaufruf kann man als Parameter nicht nur feste Werte übergeben, sondern auch Variablen. Hierbei gilt,
dass die Variablen außerhalb der Funktion ihren Wert beibehalten, selbst wenn die Parameter in der Funktion bearbeitet
werden. Der Grund hierfür ist, dass Variablen in der Funktion zunächst nichts mit den Variablen außerhalb der Funktion
gemein haben.

Beim folgenden Beispiel wird beim Funktionsaufruf die Variable $wert übergeben, in der Funktion um 1 hochgezählt und
als Rückgabewert festgelegt. Danach werden zwei Texte mit der Variable $wert ausgegeben. Über den Funktionsaufruf wird
die Variable in der Funktion ausgegeben und ohne den Funktionsaufruf die Variable außerhalb. Man erhält dabei zwei
unterschiedliche Zahlen. Die Variable $wert in der Funktion ist trotz identischer Namen etwas anderes als die Variable
außerhalb.

<?php

// Globale Variable $wert
$wert = 10;

function variable ($wert)
{
  // Lokale Variable $wert
  $wert++;
  return $wert;
}

// Ausgabe 11, lokale Variable
echo 'Wert in der Funktion: ' . variable ($wert) . '<br>';

// Ausgabe 10, globale Variable
echo 'Wert außerhalb der Funktion: ' . $wert;

?>
Die Variablen in Funktionen werden auch lokale Variablen genannt, da sie in der Hierarchie unterhalb der globalen
Ebene liegen. Die Variablen außerhalb der Funktionen nennt man globale Variablen, da sie in der globalen Ebene liegen.

Verweis auf eine Variable als Parameter

Es kann vorkommen, dass man beim Funktionsaufruf als Parameter eine Variable übergeben möchte und die Bearbeitung
in der Funktion auch eine Auswirkung auf die Variable außerhalb (in der globalen Ebene) haben soll. In solchen Fällen
ist es möglich, den Parameter bei der Funktionsdeklaration als Verweis anzugeben. Man nennt das auch Referenzieren.

Hierfür verwendet man das kaufmännische Und-Zeichen &, das man bei der Deklaration der Funktion vor dem Parameter setzt.
Gibt man beim Funktionsaufruf als Parameter eine Variable an, arbeitet man in der Funktion mit einem Verweis darauf.
Dann wird in der Funktion nicht mit einer eigenständigen (lokalen) Variable gearbeitet. Beim folgenden Beispiel werden
erhält man als Ausgabe von $wert in beiden Fällen die Zahl 11.

<?php

$wert = 10;

function variable (&$wert)
{
  $wert++;
  return $wert;
}

// Ausgabe 11, Verweis auf globale Variable
echo 'Wert in der Funktion: ' . variable ($wert) . '<br>';

// Ausgabe 11, globale Variable
echo 'Wert außerhalb der Funktion: ' . $wert;

?>
Verweis auf globale Variable mit global

Es ist innerhalb einer Funktion möglich, auf eine globale Variable zu verweisen, obwohl diese bei den Parametern als
Verweis nicht angegeben wurde. Hierfür verwendet man in der Funktion das Schlüsselwort global, mit dem man ebenfalls
einen Verweis auf eine globale Variable setzen kann. Beim folgenden Beispiel hat man denselben Effekt wie beim Verweis
über Parameter, nur mit dem Unterschied, dass keine Parameter definiert wurden und der Verweis innerhalb der Funktion
gesetzt wird.

<?php

$wert = 10;

function variable()
{
  // Variable als global kennzeichnen
  global $wert;
  $wert++;
  return $wert;
}

// Ausgabe 11, Verweis auf globale Variable
echo 'Wert in der Funktion: ' . variable() . '<br>';

// Ausgabe 11, globale Variable
echo 'Wert außerhalb der Funktion: ' . $wert;

?>
Zugriff auf globale Variable über Superglobals

Es gibt sogenannte Superglobals, die auch häufig superglobale Variablen genannt werden. Da das im Grunde Arrays sind,
nennt man sie auch superglobale Arrays. Zwei bekannte superglobale Arrays sind $_GET und $_POST, über die man
abgeschickte Formulardaten auslesen kann. Die Besonderheit hierbei ist, dass man von überall im Programm auf sie zugreifen
kann, auch in Funktionen. Es gibt das superglobale Array $GLOBALS['...'], in dem globale Variablen gespeichert werden.
Als Key für das Array verwendet man den Variablennamen, z.B. $GLOBALS['wert']. Beim folgenden Beispiel wird in der Funktion
der Wert der globalen Variable $wert um 1 hochgezählt und gleichzeitig der lokalen Variable $wert zugewiesen.
Der Rückgabewert der Funktion und der globalen Variable $wert ist 11. Man hat in der Funktion dafür gesorgt, dass die
globale Variable um 1 hochgezählt wird.

<?php

$wert = 10;

function variable()
{
  // Superglobal hochzählen und Variable zuweisen
  $wert = ++$GLOBALS['wert'];
  return $wert;
}

// Ausgabe 11, lokale Variable
echo 'Wert in der Funktion: ' . variable() . '<br>';

// Ausgabe 11, globale Variable
echo 'Wert außerhalb der Funktion: ' . $wert;

?>
Hierbei entsteht jedoch kein Verweis auf die globale Variable, wie das beim Verwenden des Schlüsselworts global der Fall
ist. Die Variable $wert in der Funktion ist eine andere als die globale Variable $wert, auch wenn sie identisch heißen.
Deutlich wird das beim nächsten Beispielcode. Hierbei wird in der Funktion zuerst das superglobale Array $GLOBALS['wert']
der Variable $wert zugewiesen und erst danach um 1 hochgezählt. Die Ausgabe der lokalen Variable ist 11, die der globalen
Variable dagegen 10.

<?php

$wert = 10;

function variable()
{
  // Superglobal Variable zuweisen, danach hochzählen
  $wert = $GLOBALS['wert'];
  $wert++;
  return $wert;
}

// Ausgabe 11, lokale Variable
echo 'Wert in der Funktion: ' . variable() . '<br>';

// Ausgabe 10, globale Variable
echo 'Wert außerhalb der Funktion: ' . $wert;

?>
Wert der Variable mit static speichern

Wenn eine lokale Variable in der Funktion verändert wird, geht die Änderung nach Beendigung der Funktion normalerweise
verloren. Ruft man die Funktion mehrmals auf, beginnen die Variablen mit ihrem Initialwert. Beim folgenden Beispielcode
wird die Funktion 3x hintereinander aufgerufen. Der ausgegebene Wert ist jedoch immer 1, da bei jedem Funktionsaufruf
der Wert der Variable auf 0 gesetzt, um 1 hochgezählt und dann ausgegeben wird.

<?php

function variable()
{
  $wert = 0;
  $wert++;
  return $wert;
}

// Ausgabe immer 1
echo variable();
echo variable();
echo variable();

?>
Es kann vorkommen, dass man den geänderten Wert für einen erneuten Aufruf der Funktion behalten möchte. Hierfür kann
man die Variable mit dem Schlüsselwort static als statisch kennzeichnen. Dadurch wird der zuletzt gültige Wert für einen
erneuten Aufruf gespeichert. Beim folgenden Beispiel ist die Ausgabe 123, da der um 1 hochgezählte Wert behalten wird.

<?php

function variable()
{
  // Variable als statisch kennzeichnen
  static $wert = 0;
  $wert++;
  return $wert;
}

// Ausgabe 123
echo variable();
echo variable();
echo variable();

?>
Solche statischen Variablen kann man auch sehr gut für rekursive Funktionen nutzen. Das sind Funktionen, die wie bei
einer Schleife sich selbst aufrufen, solange eine Bedingung erfüllt ist. Beim folgenden Beispiel beginnt die Variable
mit dem Wert 0, gibt den aus und zählt danach um 1 hoch. Die folgende if-Abfrage bewirkt an der Stelle, dass solange
der Wert kleiner oder gleich 10 ist, die Funktion quasi sich selbst wieder aufruft. Das sorgt dafür, dass der jeweils
um 1 hochgezählte Wert solange ausgegeben wird, bis der Wert der Variable 10 ist. Zum Schluss wird die Variable $wert
für den erneuten Aufruf wieder auf 0 gesetzt. Der mehrmalige Aufruf der Funktion sorgt dafür, dass jeweils die Zahlen
von 0 bis 10 ausgegeben werden.

<?php

function variable()
{
  static $wert = 0;
  echo $wert;
  $wert++;
  if ($wert <= 10) {
    variable();
  }

  // Anfangswert für den erneuten Aufruf
  $wert = 0;
}

// Ausgabe jeweils von 0 - 10
variable();
variable();
variable();

?>
Konstanten in Funktionen

Konstanten, die im globalen Bereich definiert wurden, sind auch in Funktionen verfügbar.

<?php

define ('K', 'Inhalt');

function konstante()
{
  return K;
}

echo konstante();

?>
Konstanten, die in Funktionen definiert wurden, sind im globalen Bereich verfügbar, wenn die Funktion zuvor aufgerufen
wurde.

<?php

function konstante()
{
  define ('K', 'Inhalt');
}

konstante();
echo K;

?>
Der Bereich, innerhalb der Variablen gültig sind, wird auch Geltungsbereich von Variablen (scope) genannt.

*/



?>