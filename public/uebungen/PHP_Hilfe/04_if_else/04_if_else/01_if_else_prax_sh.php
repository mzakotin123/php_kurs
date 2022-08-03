<?php

/*a) Größer 50

Gegeben sei eine int-Variable aus. Wenn diese größer als 50 ist, soll "OK" ausgegeben werden.
Nehmen Sie verschiedene Werte für die int-Variable, um Ihr Programm zu testen.*/


/*b) a gewinnt

Gegeben seien zwei int-Variablen a und b. Wenn a um mindestens 10 größer ist als b, soll "a gewinnt"
ausgegeben werden. Nehmen Sie verschiedene Werte für a und b, um Ihr Programm zu testen.
*/

/*c) Summe gewinnt

Gegeben seien vier float-Variablen a, b, c, d. Wenn die Summe von a und b größer ist als
die Summe von c und d, dann soll "Team ab gewinnt" ausgegeben werden.*/



/*d) Gegeben seien zwei int-Variablen z1 und z2. Wenn die zwei Zahlen gleich sind, soll
"gleich" ausgegeben werden, sonst "ungleich".

Lösen Sie die obige Aufgabe, indem Sie im ersten If-Teil "ungleich" ausgeben und im
Else-Teil "gleich". Passen Sie dazu die Bedingung an.*/


/* e) Positiv/negativ

Gegeben sei eine int-Variable zahl. Wenn diese größer als oder gleich 0 ist, soll "positv" ausgegeben werden.
Wenn sie kleiner als 0 ist, soll "negativ" ausgegeben werden. Probieren Sie verschiedene Werte für zahl, um
Ihr Programm zu testen.*/

/* f) Klausurnoten

Lösen Sie eine ähnliche Aufgabe wie die im letzten Abschnitt mit if-else-if. Sie haben eine Punktzahl gegeben:

int punkte = 10;
Schreiben Code, so dass bei verschiedenen Punktständen ausgegeben wird, wie die Klausur ausfällt:

0  - 10: Durchgefallen
11 - 20: Naja
21 - 30: Mittelgut
31 - 40: Gut
41 - 50: Super
Testen Sie Ihr Programm mit den Werten 0, 15, 25, 35, 45.*/

/* g) Eingabeformular
Erstellen Sie ein Eingabeformular und ein dazu passendes PHP-Programm. Es soll der Preis für eine Tankfüllung
berechnet werden. Es gibt zwei Sorten Benzin: Normal (Preis: 1.35 Euro) und Super (Preis: 1,40 Euro).
Der Benutzer gibt im Eingabefeld die getankte Literzahl und im zweiten entweder ein großes N oder ein großes S ein.
Das PHP-Programm ermittelt in Abhängigkeit von der Sorte und der getankten Menge den zu zahlenden Betrag. Es wird
davon ausgegangen, dass der Benutzer keine Fehleingaben macht.*/

/*<p>Bitte geben Sie Menge und Sorte ein</p>
<form action = "musteruebung.php" method = "post">
    <p><input name = "liter"> Menge in Liter</p>
    <p><input name = "sorte"> Sorte (S oder N)</p>
    <p><input type = "Senden">
    <input type = "Neue Eingabe"></p>
</form>*/

________________;

   if ($_POST["sorte"] == "N") {
       $zahlung = $_POST["liter"] * 1.35;
       $text = "Normal";
   } else {
       $zahlung = $_POST["liter"] * 1.40;
       $text = "Super";
   }
   echo $_POST["liter"] . " Liter $text kosten $zahlung &euro;";


/* h) Eingabeformular Erweiterung
Erweitern Sie die Übung g - Eingabeformular. Großkunden, die 100 Liter oder mehr tanken, erhalten unabhängig von der Sorte an
dieser Tankstelle 2% Rabatt. Fall der Benutzer bspw. eingibt, dass er 120 Liter Normalbenzin tankt.*/




/*i) Fehler im IF-ELSE-Listing

Korrigieren Sie die Fehler (insgesamt: 9 Stück) im folgenden Listing und prüfen Sie, ob das Programm funktioniert.*/

/*--- PHP-Code Start ---*/
/* Die folgende Zeilen entkommentieren und die Variablen benutzen, um die Funktionsfähigkeit des korrigierten Listings zu überprüfen.  */
// $kapital = 10000;
// $kreditsumme = 1300;

/* if (kapital > 10000 AND kreditsumme <= 2000)
{
$message = "Sie haben " . $kapital  " Euro Kapital, wir gewähren Ihren Kredit."
}
elseif $kreditsumme >2000
{
    $message = "Wir gewähren grundsätzlich keine Kredite über 2000 Euro. Deshalb können wir die von Ihnen gewünschte Summe von "  $kreditsumme  " Euro nicht akzeptieren."
}
elseif ($kapital <= 10000)
{
$message "Sie haben zu wenig Kapital (Ihre Eingabe: $kapital), um bei uns einen Kredit zu erhalten.";
}
--- Code Ende ---*/

/*@@@

/*
j) IF-ELSE anwenden:

Horoskop

Schreiben Sie ein Programm, wo der User ein Horoskop je nach angegebenem Sternzeichen erhält.
Berücksichtigt werden die Sternzeichen Steinbock, Waage und Widder.

@@@


k) IF-ELSE anwenden: Horoskop

Ergänzen Sie das Horoskop so, dass der User je nach eingegebenem
Horoskop einen anderen Satz ausgegeben bekommt, ungefähr so:
STEINBOCK Sie sind sehr impulsiv.

(oder eben für Fisch, Wassermann eine andere Ausgabe)

@@@


l) IF-ELSE anwenden: Persönlichkeits-Profiler

Schreiben Sie folgendes Programm: Der User soll sein Lieblingswerkzeug eingeben.
Abhängig vom angegebenen Werkzeug erhält er ein kurzes Persönlichkeitsprofil.
Berücksichtigt werden die Werkzeuge Hammer, Schraubenzieher, Zange, Säge.

@@@

m) Anrede mit IF-ELSE

    In ein Formular kann der Kunde seinen Nachnamen und sein Geschlecht eintragen.
Schreiben Sie das Formular und ein Programm, das den User nach erfolgreicher Eingabe mit 'Hallo Herr' bzw.
'Hallo Frau' + Name begrüßt.




@@@

n) IF-ELSE anwenden: Promillerechner

Schreiben Sie ein Programm, das
- aus einer angegebenen Menge Bier (Liter) die Menge des Reinalkohols (Gramm) berechnen kann (Formular 1).
Rechnen Sie die Menge des Alkohols mit 5% und multiplizieren Sie das Ergebnis mit der Dichte von
Alkohol (Ethanol) = 0.79mg/cm3, um die korrekte Zahl in Gramm zu erhalten.

Beispiel:
1000 * 0.05 * 0.8 = Alkoholmenge in Gramm

- aus einer angegebenen Menge konsumierten Alkohols und dem Körpergewicht in Kilogramm den Blutalkoholgehalt in Promille
berechnet (Formular 2). Die Formel lautet:

c = A / (0.65*G)

    (c = Promille, A = aufgenommener Alkohol in Gramm, G = Körpergewicht in kg). Die Formel ist nicht ganz genau, weil
nicht berücksichtigt wird, ob der Blutalkoholspiegel eines Mannes oder einer Frau berechnet werden soll.

Zusätzlich erfolgt eine Ausgabe, abhängig vom ermittelten Promillegehalt:
- bis 0.3 : "Das geht ja noch."
- bis 0.5 : "Achtung!"
- bis 0.8 : "Das ist schon eine Menge."
- ab 0.8: "Kein Kommentar."

Beide Formulare befinden sich auf einer Seite und zeigen auf die gleiche Auswertungsdatei!

Zusatzaufgabe: Geschlecht mit einbeziehen! (Internetrecherche!)

Zusatzaufgabe: Auswahl verschiedener Getränke, jeweilige Prozentzahl einbeziehen

@@@

o) Einfacher Passwortschutz

Schreiben Sie ein Programm, das ein Passwort abfragt. Wenn das Passwort "Rauschebart13" (= richtig) lautet, wird der User
mit einer Erfolgsmeldung ("Erfolgreich eingeloggt") begrüßt. Ist das Passwort falsch, erhält der User eine entsprechende Fehlermeldung.*/


?>