<?php
/*
Die »do while«-Schleife

Die Schleife do while verhält sich wie die while-Schleife, nur dass die Bedingung am Ende des Anweisungsblocks überprüft wird.


do {Anweisungen}

while(BEDINGUNG == wahr);

Der Anweisungsblock wird mit dem Schlüsselwort do eingeleitet. Im Block werden dann Anweisungen ausgeführt.
Am Ende des Anweisungsblocks steht der bereits bekannte Ausdruck while, bei dem überprüft wird, ob die angegebene
Bedingung wahr ist. Ist die Bedingung wahr, wird der Anweisungsblock erneut ausgeführt, und es beginnt wieder bei do.
Wenn die Bedingung unwahr ist, geht es hinter der while-Bedingung weiter.

Achten Sie auch darauf, dass Sie die do while-Schleife am Ende von while mit einem Semikolon abschließen.
Das Semikolon zu vergessen, ist ein häufig gemachter Fehler.


    https://openbook.rheinwerk-verlag.de/c_von_a_bis_z/008_c_kontrollstrukturen_009.htm*/

/*
do-while-Schleifen sind sehr ähnlich zu while-Schleifen, außer dass der Wahrheitsausdruck erst am Ende eines
jeden Durchlaufs statt zu dessen Beginn geprüft wird. Der Hauptunterschied zu einer normalen while-Schleife ist,
dass die do-while-Schleife garantiert mindestens einmal durchlaufen wird (Der Wahrheitsausdruck wird ja nur am
Ende jeden Durchlaufs geprüft), wohingegen es nicht zwingend ist, dass eine reguläre while-Schleife immer
ausgeführt wird (hier wird der Wahrheitsausdruck bereits zu Beginn eines jeden Durchlaufs überprüft. Evaluiert
er dabei zu false, wird die Verarbeitung der Schleife sofort abgebrochen).

Es gibt nur eine Syntax für do-while-Schleifen:*/


$i = 0;
do {
    echo $i.'<br>';
} while ($i > 0);


/*Die obige Schleife wird exakt einmal durchlaufen, da nach dem ersten Durchlauf, wenn der Wahrheitsausdruck geprüft
wird, dieser false ergibt ($i ist nicht größer als 0), so dass die Schleifenausführung beendet wird.


Fortgeschrittenen C-Programmierern ist möglicherweise eine etwas andere Verwendung von do-while-Schleifen bekannt,
die es erlaubt, die Ausführung in der Mitte des Codeblocks zu unterbrechen. Dies wird durch ein Kapseln in do-while(0)
und die Verwendung des break-Statements erreicht. Das folgende Codefragment demonstriert dieses Verhalten:

*/
$i = 1;
do
{
    if ( $i > 10 )
    {
        echo "i ist bereits größer als 10";
        break;
    }

    echo $i.'<br>';         // es wird $i ausgegeben
    $i++ ;            // Wert wird um 1 erhöht
} while ($i <= 10);



/* do while-Schleifen in PHP

In PHP-Programmen müssen häufig bestimmte Codes wiederholt werden. Damit man nicht für jede Wiederholung denselben Code
erneut schreiben muss, gibt es Schleifen. Typische Anwendungsfälle hierfür sind Datenbankabfragen, bei denen die
abgefragten Daten z.B. zeilenweise oder in Tabellen ausgegeben werden sollen. Auch wenn die Daten an sich unterschiedlich
sind, werden hierbei werden gewisse Wiederholungen benötigt, z.B. für das Bilden von Tabellenzeilen, -spalten etc.

Eine Möglichkeit für solche Wiederholungen bietet die do while-Schleife. Diese ist angelehnt an die while-Schleife,
unterscheidet sich jedoch in einem wichtigen Punkt. Auch bei der do while-Schleife wird gewöhnlich zu Beginn eine
Zählvariable gesetzt. Im Gegensatz zur while-Schleife erfolgt aber danach keine Bedingungsabfrage, sondern der
Programmcode wird abgearbeitet. Danach wird die Zählvariable um 1 hochgezählt und erst dann erfolgt die Bedingungsabfrage,
z.B. ob die Zählvariable kleiner als 10 ist. Liefert die Bedingungsabfrage den Rückgabewert TRUE, wird die Schleife ab
der Stelle mit der Codeausführung wiederholt. Das Verhalten hat zur Folge, dass der auszuführende Programmcode bei
der do while-Schleife mindestens 1x abgearbeitet wird. Bei der while-Schleife kann es dagegen passieren, dass der Code
überhaupt nicht abgearbeitet wird, wenn die Bedingung zu Beginn erst gar nicht zutrifft.

PHP do while-Schleife
Aufbau einer do while-Schleife

Der nachfolgende Code beschreibt den typischen Aufbau einer do while-Schleife. Zuerst wird eine Zählvariable $i mit dem
Initialwert 0 gesetzt. Danach wird mit do die Schleife begonnen. Der Programmcode innerhalb der geschweiften Klammern wird
ausgeführt und die Zählvariable wird um 1 hochgezählt. Im nächsten Schritt wird mit while ($i < 10); geprüft, ob die
Zählvariable kleiner als 10 ist. Wenn die Prüfung den Rückgabewert TRUE liefert, wird die Schleife nicht beendet und die
Ausführung des Codes nach do wird wiederholt. Bei einem Rückgabewert FALSE wird dagegen die Schleife beendet.
Der Beispielcode bewirkt, dass zeilenweise die Zahlen von 0 bis 9 ausgegeben werden. */


// Zählvariable setzen
$i = 0;


// Beginn der Schleife
do
{
  // Beispielcode
  echo $i . '<br>';

  // Zählvariable hochzählen
  $i++;
}

// Bedingungsprüfung
while ($i < 10);

?>
/*
Zählvariable herunterzählen

Es ist nicht nur möglich, den Wert der Zählvariable initial auf 0 zu setzen und mit dem Inkrement-Operator hochzählen zu
lassen. Man kann auch mit einem höheren Startwert beginnen und mit dem Dekrement-Operator die Zählvariable herunterzählen
lassen. Der folgende Beispielcode bewirkt, dass untereinander die Zahlen von 10 bis 0 ausgegeben werden.
 */

<?php

// Zählvariable setzen
$i = 10;


// Beginn der Schleife
do
{
  // Beispielcode
  echo $i . '<br>';

  // Zählvariable herunterzählen
  $i--;
}

// Bedingungsprüfung
while ($i >= 0);

?>
/*
do while-Schleife verschachteln

Man kann eine do while-Schleife auch verschachteln, so dass sie z.B. weitere do while-Schleifen enthält. In einem solchen
Fall würden die Kindschleifen auf jeden Fall mindestens 1x durchlaufen werden, da die Bedingung bei der Elternschleife
am Ende geprüft wird. Wie oft der Code in der Kindschleife ausgeführt wird, hängt wiederum von der Bedingung in der
Kindschleife ab. Beim folgenden Beispiel wird mit Bindestrichen eine halbe Pyramide ausgegeben.
 */

<?php
$i = 0;

// Elternschleife
do
{

  $j = 0;

  // Kindschleife
  do
  {
    echo 'Hallo;';
    $j++;
  }
  while ($j <= $i);

  echo '<br>';
  $i++;

}
while ($i <= 10);

?>
/*

Wenn man den Code dahingehend ändert, dass die Bedingung bei der Elternschleife mit while ($i <= 0); eigentlich gar nicht
zutrifft, wird trotzdem die erste Zeile der Pyramide ausgegeben, da die Kindschleife 1x durchlaufen wird.
 */

<?php
$i = 0;

// Elternschleife
do
{

  $j = 0;

  // Kindschleife
  do
  {
    echo '- &nbsp;';
    $j++;
  }
  while ($j <= $i);

  echo '<br>';
  $i++;

}
while ($i <= 0);

?>
/* do while-Schleife mit unbestimmter Wiederholungszahl

Bei den Beispielen zuvor ist die Anzahl der Wiederholungen bekannt gewesen. Das ist jedoch häufig nicht der Fall, z.B.
beim Ausgeben von Arrays, die viele Werte haben können und die Anzahl dabei unbekannt sein kann. In solchen Fällen kann
die Anzahl mit der Funktion count (...) ermittelt und bei der Bedingungsprüfung verwendet werden.

Beim folgenden Beispiel werden zu Beginn die Wochentage von Mo - Fr im Array $tage gespeichert und eine Zählvariable $i
gesetzt. Mit count ($tage) wird die Anzahl der Werte des Arrays ermittelt und der Variable $j zugewiesen. Mit echo $tage[$i]
(entspricht zu Beginn $tage[0]) werden zeilenweise die Werte des Arrays ausgegeben. Die Zählvariable $i wird mit jeder
Wiederholung um 1 hochgezählt und dient dabei als Index des Arrays. */

<?php

$tage = array('Mo', 'Di', 'Mi', 'Do', 'Fr');

$i = 0;
$j = count ($tage);

do
{
  echo $tage[$i] . '<br>';
  $i++;
}
while ($i < $j);

?>
/*
Man kann die Funktion count ($tage) auch direkt in die Bedingungsprüfung setzen, sodass der Umweg über die Variable $j
entfallen kann. Mit dem folgenden Code würde dasselbe erreicht werden.
 */

<?php

$tage = array('Mo', 'Di', 'Mi', 'Do', 'Fr');

$i = 0;

do
{
  echo $tage[$i] . '<br>';
  $i++;
}
while ($i < count ($tage));

?>
/* Mit dieser Variante würde es keine Rolle spielen, wie viele Werte ein Array enthält. Die Werte können zeilenweis
ausgegeben werden, da mit der Funktion count ($arrayname) die Anzahl der notwendigen Wiederholungen ermittelt wird. */

<?php
 srand((double)microtime()*1000000);
   $summe = 0;

   do
   {
      $zufallszahl = rand(1,6);
      $summe = $summe + $zufallszahl;
      echo "Zahl $zufallszahl, Summe $summe<br>";
   }
   while ($summe < 25);