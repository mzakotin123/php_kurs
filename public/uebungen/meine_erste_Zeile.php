<?php
/*Aufgabe1: meine erste Zeile*/
require_once __DIR__ . '/../config.php';
echo HEAD;

// @var string $Ausgabe
$Ausgabe = 'Meine erste Zeile, mit PHP ausgegeben.';

/*Zeile ausgeben*/
echo  $Ausgabe;

echo FOOT;
