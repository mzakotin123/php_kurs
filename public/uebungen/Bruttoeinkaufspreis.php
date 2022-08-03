<?php
require_once __DIR__ . '/../config.php';
echo HEAD;

// @var float Netto1
$Netto1 = 22.50;

//@var float Netto2
$Netto2 = 12.30;

//@var float Netto3
$Netto3 = 5.20;

//@var float Ust
$Ust = 0.19;

//@var float Netto_ges
$Netto_ges = $Netto1+$Netto2+$Netto3;

//@var float Brutto
$Brutto = $Netto_ges+($Netto_ges*$Ust);

echo "Nettopreis für Artikel 1: <b> $Netto1 € </b>" . NL;
echo "Nettopreis für Artikel 2: <b> $Netto2 € </b>" . NL;
echo "Nettopreis für Artikel 3: <b> $Netto3 € </b> ". NL;
echo "Gesamtnettopreis: <b>         $Netto_ges € </b> ". NL;
echo "Bruttoverkaufpreis: <b>       $Brutto € </b>". NL;

echo FOOT;