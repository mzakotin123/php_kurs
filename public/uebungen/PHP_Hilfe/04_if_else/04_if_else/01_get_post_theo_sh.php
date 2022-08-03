<?php
/*
Superglobals

Etliche vordefinierte Variablen in PHP sind sogenannte "Superglobals", das bedeutet, sie sind in allen
Gültigkeitsbereichen (sogenannte Scopes) eines Skripts verfügbar.

Diese Superglobals sind:

$GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV

$_GET und $_POST

Möchtet ihr in PHP Werte von einer Seite zur nächsten übertragen, zu greift man oft auf die zwei speziellen Variablen
$_GET und $_POST zurück. Beispielsweise möchtet ihr die Benutzereingabe eines Formulars an euer Script übertragen,
diese überprüfen und abspeichern. Das Übertragen dieser Benutzereingaben erfolgt entweder mittels $_GET oder $_POST.


Datenübergabe mittels $_GET

Bei der GET-Methode spricht man von Variablenwerten, die mittels der URL übergeben werden. Vielleicht ist euch im
Browser bereits aufgefallen, dass viele URLs ein ? hinter dem Dateinamen haben gefolgt von entsprechenden Werten.
Dies sind die GET-Variablen der Website. Im PHP-Script könnt ihr auf diese wie folgt zugreifen.

$vorname = $_GET['vorname'];
$nachname = $_GET['nachname'];
echo "Hallo $vorname $nachname";

Wenn ihr diese Seite auf eurem Webspace mittels get.php ? vorname=Max & nachname=Meier aufruft, so übergebt ihr dem Script
zwei $_GET-Variablen. Zum einen die Variable $_GET['vorname']  mit dem Wert Max, zum anderen die Variable $_GET['nachname']
mit dem Wert Meier.
Ihr könnt den Aufrufpfad des interaktiven Editors hier in der Seite modifizieren, indem ihr auf das $-Zeichen neben Ausführen klickt.
Die GET-Variablen beginnen nach dem ? hinter dem Namen eures Scripts. Verschiedene GET-Variablen lassen sich durch ein
entsprechendes &-Zeichen voneinander trennen. Die Reihenfolge ist übrigens nicht von Bedeutung, ihr könnt das Script
ebenfalls mittels get.php ? nachname=Meier & vorname=Max aufrufen.

Übung: Erweitert das obige Script um eine dritte GET-Variable, z.B. den Mittelnamen, übergebt diesen und lasst den Wert ausgeben.

GET-Variablen werden meistens genutzt, um Links mit entsprechend dynamischen Werten auszustatten. Sicher habt ihr schon
URLs gesehen, die ein ?id=456 bzw. entsprechend andere Parameter haben. So übergibt man dem PHP Script Informationen,
beispielsweise welches Produkt aus einem Online Shop dargestellt werden soll.

Hinweis: Die neuen "Superglobals" bzw. register_globals stehen seit der PHP-Version 4.1.0. zur Verfügung. Dieses
sind die Arrays $_GET, $_POST, $_ENV, $_SERVER, $_COOKIE, $_REQUEST, $_FILES und $_SESSION. Sie werden informell al
Superglobals bezeichnet, da sie immer zur Verfügung stehen, ohne Berücksichtigung des Geltungsbereichs. Damit sind die
alten beziehungsweise die $HTTP_*_VARS Arrays ausgemustert. Im folgenden Abschnitt erfahren Sie mehr darüber.


*/
phpinfo();


$vorname = $_GET['vorname'];
$nachname = $_GET['nachname'];
echo 'Hallo'. $vorname . $nachname;