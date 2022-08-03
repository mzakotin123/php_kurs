<?php

/*Konstanten

Der Wert einer Konstante ist, im Gegensatz zu einer Variable, nicht mehr veränderlich sobald dieser definiert wurde.
Dies ist nützlich, um zum Beispiel feste, unveränderliche Werte zu definieren, beispielsweise die maximale Länge eines
Beitrags oder die Version eures Scripts.*/

/*Syntax ¶

Sie können eine Konstante definieren, indem Sie entweder die define()-Funktion oder das Schlüsselwort const
außerhalb einer Klassendefinition verwenden. Während define() es ermöglicht eine Konstante auf einen beliebigen Wert zu
definieren,  hat das const Schlüsselwort Einschränkungen, die im nächsten Absatz beschrieben werden. Einmal definiert,
kann eine Konstante weder verändert noch gelöscht werden.*/

/*Das hier sind die Unterschiede zwischen Konstanten und Variablen:

-   Konstanten haben kein Dollarzeichen ($) vorangestellt;
-   Vor PHP 5.3 können Konstanten nur über die Funktion define() definiert werden, nicht durch einfache Zuweisung;
-   Konstanten können überall definiert werden, und auf Ihren Wert können Sie ohne Rücksicht auf Namensraumregeln von
    Variablen zugreifen;
-   Sobald Konstanten definiert sind, können sie nicht neu definiert oder gelöscht werden; und
-   Konstanten können nur skalare Werte haben. Ab PHP 5.6.0 ist es möglich, Array-Konstanten mit dem const Schlüsselwort
    zu definieren; ab PHP 7 können Array-Konstanten ebenfalls mit define() definiert werden. In konstanten skalaren
    Ausdrücken können Arrays verwendet werden (z.B. const FOO = array(1, 2, 3)[0];), aber das Endergebnis muss ein Wert
    eines erlaubten Typs sein.*/

define('projektName', 'Meine Seite');

$abc = 'projektName';

if (defined($abc)) {
    echo "Wert der Konstanten: ".constant($abc).".";
}

