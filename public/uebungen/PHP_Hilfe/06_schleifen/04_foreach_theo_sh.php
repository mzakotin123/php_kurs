<?php
/*foreach-Schleifen in PHP

In PHP wird häufig eine Möglichkeit gebraucht, um bestimmte Codes wiederholen zu lassen. Ein Anwendungsfall hierbei
sind Arrays, die mehrere Werte enthalten können. Beispielsweise wiederholen sich die Schritte beim Auslesen und Ausgeben
der Werte. Für solche Wiederholungen können Schleifen verwendet werden. Man kann zwar auch mit der while-, do while- und
for-Schleife Arrays verarbeiten. Es gibt aber eine spezielle foreach-Schleife, die für die Verarbeitung von Arrays
(und Objekten) gedacht ist. Damit kann man auf eine einfache Art und Weise die Werte eines Arrays nacheinander abarbeiten.

Auf der folgenden Abbildung ist die Syntax anhand eines Beispiels in der Grundform. Mit der Funktion foreach wird
die Schleife eingeleitet. Innerhalb der runden Klammern wird der name des Arrays, gefolgt von einem as angegeben.
Danach wird die Variable angegeben, in der die einzelnen Werte bei jedem Schleifendurchgang gespeichert werden. So kann
man darüber auf die Werte zugreifen und verarbeiten. Innerhalb der geschweiften Klammern wird der Code angegeben, der
bei jeder Wiederholung ausgeführt wird. Die Schleife wird solange wiederholt, bis alle Werte eines Arrays abgearbeitet
wurden.*/

/*Aufbau einer foreach-schleife

foreach ($arrays as $wert)
    {

        echo $wert;

    }




PHP foreach-Schleife
Beispielcode mit einer foreach-Schleife

Mit dem folgenden Code weist man zunächst die Wochentage Mo - Fr dem Array $tage zu. Mit der foreach-Schleife werden
die einzelnen Werte des Arrays zeilenweise (mit Zeilenumbruch) über die Variable $wert ausgegeben.

<?php

$tage = array('Mo', 'Di', 'Mi', 'Do', 'Fr');

foreach ($tage as $wert)
{
  echo $wert . '<br>';
}
?>
Index oder Key eines Arrays verarbeiten

Arrays können indiziert (mit Index, z.B. $arrayname[0]) oder assoziativ (mit Key, z.B. $arrayname['key'] sein. Wenn
man auf den Index bzw. Key zugreifen möchte, so gibt es die Möglichkeit, mit => die foreach-Schleife zu erweitern und
eine weitere Variable anzugeben. In dem Fall ist die erste Variable für den Index bzw. Key und die zweite Variable
für den Wert. Mit => wird sozusagen der Wert zu einer anderen Variable durchgeleitet. Mit dem folgenden Beispielcode
wird vor dem Wert der Index mit angegeben.

<?php

$tage = array('Mo', 'Di', 'Mi', 'Do', 'Fr');

foreach ($tage as $index => $wert)
{
  echo $index . ' ' .$wert . '<br>';
}
?>
Mit dem folgenden Beispielcode werden die Keys eines assoziativen Arrays mit ausgegeben.

<?php

$tage = array
(
'mo' => 'Mo',
'di' => 'Di',
'mi' => 'Mi',
'do' => 'Do',
'fr' => 'Fr'
);

foreach ($tage as $key => $wert)
{
  echo $key . ' ' .$wert . '<br>';
}
?>
Verarbeitung von mehrdimensionalen Arrays

Mit der foreach-Schleife kann man auch die Werte eines mehrdimensionalen Arrays verarbeiten. Mit dem folgenden Code
werden zuerst die Wochentage (Index 0) ausgegeben, danach die Tageszeiten (Index 1).

<?php

$tage = array
(

// Index 0
  array
    (
    'Montag',
    'Dienstag',
    'Mittwoch',
    'Donnerstag',
    'Freitag'
    ),

// Index 1
  array
    (
    'morgen',
    'vormittag',
    'mittag',
    'nachmittag',
    'abend',
    'nacht',
    )
);

// Index 0 ausgeben
foreach ($tage[0] as $index => $wert)
{
  echo $index . ' ' .$wert . '<br>';
}

// Index 1 ausgeben
foreach ($tage[1] as $index => $wert)
{
  echo $index . ' ' .$wert . '<br>';
}
?>

foreach-Schleifen verschachteln

Man kann foreach-Schleifen auch verschachteln, so dass eine Schleife eine weitere Schleife enthält.
Mit dem folgenden Code werden nacheinander die Werte von mehrdimensionalen Arrays ausgegeben. Die Logik der
Schleife ist so aufgebaut, dass zunächst das Array mit dem Index 0 und danach mit dem Index 1 ausgegeben wird.

<?php

$tage = array
(

// Index 0
  array
    (
    'Montag',
    'Dienstag',
    'Mittwoch',
    'Donnerstag',
    'Freitag'
    ),

// Index 1
  array
    (
    'morgen',
    'vormittag',
    'mittag',
    'nachmittag',
    'abend',
    'nacht',
    )
);

// Index 0 und 1 ausgeben
foreach ($tage as $index => $arrays) {
  echo $index . '<br>';

  foreach ($arrays as $index => $wert) {
    echo $index . ' ' . $wert . '<br>';
  }
}
?>
<!--Der Code hat den Vorteil, dass man den Index nicht manuell angeben muss, damit alle Werte ausgegeben werden.-->