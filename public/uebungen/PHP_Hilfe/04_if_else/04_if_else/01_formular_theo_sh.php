<?php
/*Formulare erstellen und auswerten
Ein Formular besteht eigentlich nur aus HTML (eventuell noch Javascript) und hat somit erstmal nichts mit PHP zu tun. Wenn wir aber das Formular auswerten möchten, brauchen wir PHP.

Ein typisches Formular*/
?>

<form action="formular_verarbeiten.php" method="get">
    <p>Gib deinen Namen ein: <input type="text" name="benutzername" /></p>
    <input type="submit" value="absenden" />
</form>

/*
Hier siehst du ein typisches HTML-Formular. Unser Formular hat zwei Attribute:

action – das action-Attribut hat den Wert „formular_verarbeiten.php“. Nachdem der Besucher
auf den Absenden Button des Formulars klickt, wird diese Datei aufgerufen und die Formular-Werte
übermittelt.
method – Die Methode mit der die Variablen verschickt werden sollen. Es gibt die Wahl zwischen
get und post. Wir benutzen hier erstmal die Methode GET
Der Rest ist Standard HTML: Ein Input-Feld mit dem Feldnamen „benutzername“ und einen
Submit-Button, um das Formular abzuschicken.

Erstelle jetzt die Datei „index.html“ und füge obigen HTML Code ein. Wenn du die Datei
aufrufst, solltest du folgende Ausgabe sehen:*/

Formular Daten mit PHP verarbeiten
Um die Fehlermeldung zu beseitigen, erstellen wir jetzt die Datei „formular_verarbeiten.php“ im
selben Ordner wie die „index.html“:

<?php
echo 'Hallo ';
?>
Bislang alles wie gewohnt, aber nun wollen wir auf die Formular-Eingaben zugreifen.
Die Formular-Werte werden in die PHP-Variablen „$_GET“ und „$_POST“ gespeichert, je nachdem,
welche Methode wir oben im Formular angegeben haben. Da wir uns erstmal für „get“ entschieden haben,
sind da auch unsere Werte drin. Da „$_GET“ ein Array ist, wollen wir uns das mal anschauen:

<?php
echo 'Hallo ';

echo '<pre>';
print_r($_GET);
echo '</pre>';
?>


Die Formular-Werte werden also als assoziatives Array in der $_GET-Variable abgelegt.
Der Wert des „name“-Attributs ist der Index und der Wert ist die Eingabe, die der User ins
Feld geschrieben hat. Das wollen wir nun direkt mal nutzen und passen die Datei
„formular_verarbeiten.php“ an:

<?php
echo 'Hallo '.$_GET['benutzername'];
?>
Ausgabe: Hallo Christian (bzw. welchen Namen du eingibst)

Ein weiteres Beispiel
Man kann alle Formular-Werte an PHP schicken, man muss den Eingabe-Feldern nur einen Namen geben:

index.html

<form name="eingabe" action="formular_verarbeiten.php" method="get">
    <p><strong>Wie geht es dir?</strong></p>
    <input type="radio" name="zustand" value="1" /> Super <br />
    <input type="radio" name="zustand" value="2" /> Gut <br />
    <input type="radio" name="zustand" value="3" /> Wie immer <br />
    <input type="radio" name="zustand" value="4" /> Geht so <br />
    <input type="radio" name="zustand" value="5" /> Schlecht <br />

    <br />
    <input type="submit" value="absenden" />
</form>


formular_verarbeiten.php

<?php
switch($_GET['zustand']) {
    case 1:
        echo 'Geht mir genau so, ein super Tag!';
        break;

    case 2:
        echo 'Toll, das freut mich für dich :)';
        break;

    case 3:
        echo 'Besser als sich schlecht zu fühlen ;)';
        break;

    case 4:
        echo 'Kopf hoch, das wird schon wieder.';
        break;

    case 5:
        echo 'Denk dran, nach jedem Tief kommt ein Hoch.';
        break;

    default:
        echo 'Du hast vergessen deinen Zustand auszuwählen.';
}
?>
Der Besucher kann seinen Gemütszustand auswählen und wir geben ihm eine dazu passende Antwort.
Wenn der Besucher vergisst etwas auszuwählen, nutzen wir die „default“-Aktion von Switch.

Unterschied zwischen GET und POST
Beim Formular-Attribut „method“ haben wir die Wahl zwischen „get“ und „post“, je nachdem welches
wir wählen, müssen wir im PHP Script auf die Variable „$_GET“ oder „$_POST“ zugreifen. Doch was ist
der Unterschied zwischen den beiden?

GET wird in der URL angezeigt
Wenn wir ein Formular mit „get“ verschicken, wird in der URL-Zeile des Browser die Variablen +
ihrem Wert angezeigt:


Diesen Wert kann der Benutzer manipulieren, allerdings ist $_POST kein Schutz dagegen, aber es
sieht in den meisten Fällen „schöner“ aus, da die URL-Zeile nicht mit Variablen vollgepumpt ist.

GET ist begrenzt, POST nicht
Gerade wenn man ein Formularfeld hat, indem sehr sehr viele Daten reinkommen können (z.b. ein
Blog-Artikel, ein Forumbeitrag, ein Wikipedia-Artikel) muss man POST verwenden, da die get-Methode
begrenzt ist. Bzw eigentlich ist nicht „get“ begrenzt, sondern die Url-Zeile des Browsers. Je nach
Browser hat man eine maximale Länge um 1024 Zeichen und für Artikel ist das in der Regel nicht
ausreichend (für Twitter-Nachrichten schon ;) )


$_POST oder $_GET?
Wann benutzt man POST und wann GET?
Die Frage ist leicht zu beantworten. Wenn man Eingaben aus einem
Formular übergeben möchte, so sollte man immer POST benutzen.
Warum ?

Mit GET werden die Eingaben der URL angehängt, dadurch ist die Textlänge eingeschränkt, außerdem kann
jeder im Browser-Verlauf an der URL erkennen, was als Daten übermittelt wurde, und bei einer Passworteingabe
ist das nicht so schön.
Vorteil von GET
GET wird benutzt, wenn man einfache Informationen übergeben möchte. Soll zum
Beispiel mit dem Klick auf einen Link eine Auswahl übergeben werden, so benutzt
man die Methode GET. Ein Link in einer aufrufenden Seite könnte dann so aussehen:
<a href="artikel.php?id=234">Das PHP Einsteiger Buch</a>
In diesem Beispiel würde die Eingabe 234 übermittelt werden.
Solche Links werden in PHP zur Programmierung dynamischer Seiten benutzt, z.B.
um Produktdetails in einem Online-Shop anzuzeigen.



Vor- und Nachteile von post und get
Hier nochmal die Vor- und Nachteile zusammengefasst:

Vor- und Nachteile:
1. Bei GET sieht der User, welche Daten übergeben werden (kann man als Vorteil oder als Nachteil sehen)
2. Bei GET ist die Länge begrenzt, bei POST nicht
3. Die Ergebnisseite eines GET-Formulars kann man bookmarken, da alle nötigen Informationen in der URL enthalten sind
4. Die Ergebnisseite eines POST-Formulars kann man weder bookmarken noch im Browser aktualisieren, da die Daten nicht mehr zur Verfügung stehen
5. File-Upload ist nur mit POST möglich

Aus Punkt 4. folgt außerdem, dass man ein Formular mit method="post" nicht aus Versehen mehrmals
abschicken kann (z.B. indem man nach dem Abschicken die "Zurück"-Funktion des Browsers verwendet
und dann erneut abschickt). Deswegen wird empfohlen, POST für Formulare zu verwenden, die irgendeine
nachhaltige Veränderung auf der Serverseite bewirken - z.B. ein Eintrag in eine Datenbank,
das Versenden einer Nachricht etc., während GET für solche Zwecke eingesetzt werden sollte, bei
denen ein Mehrfachaufruf keine unerwünschten Nebeneffekte hat - also etwas eine reine Datenbankabfrage,
eine Suchanfrage, etc.



https://www.php-kurs.com/formularauswertung-mit-php.htm

https://www.php-einfach.de/php-tutorial/_get-und-_post/