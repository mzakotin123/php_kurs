<?php
require '../../../../config.php';

echo '<b>n) IF-ELSE anwenden: Promillerechner</b>'.NL;
?>
<!DOCTYPE html><html lang="de"><head><meta charset="utf-8"><title>Title</title></head>
<body>
<p>Bitte geben Sie die Menge Bier in Liter ein</p>
<form action = "eingabeformular_n.php" method = "post">
    <p><input name = "Liter"> Liter (Menge Bier)</p>
    <p><input type = "submit">
        <input type = "reset"></p><br>
    <p>Bitte geben Sie die Alkoholmenge in Gramm sowie Ihr Körpergewicht ein</p>
    <p><input name = "Gramm"> Alkoholmenge in Gramm</p>
    <p><input name = "Kilogramm"> Körpergewicht in Kilogramm</p>
    <p><input name = "Geschlecht"> Geschlecht (m oder w)</p>
    <p><input name = "Getraenk"> Getränk</p>
    <p><input type = "submit">
        <input type = "reset"></p>
</form>

<?php
($_POST["liter"] = NULL);
($_POST["gramm"] = ($_POST["liter"]) * 0.05 * 0.79);
$_POST["liter"].' Liter Bier entsprechen '. $_POST["gramm"] . ' Gramm Alkohol.';NL;
echo NL;
($_POST["A"] = 20);
($_POST["G"] = 70);
($_POST["geschlecht"]='weiblich');
($_POST["getraenk"]='Bier');
($_POST["geschlecht"]=='männlich') ? ($_POST["c"]=$_POST["A"]/(0.7*$_POST["G"])) :
     ($_POST["c"]=$_POST["A"]/(0.6*$_POST["G"]));

switch($_POST["getraenk"]) {
    case 'Bier': $_POST["prozent"] = 0.05; break;
    case 'Wein': $_POST["prozent"] = 0.12; break;
    case 'Spirituose': $_POST["prozent"] = 0.4; break;
    default: $_POST["prozent"] = 0; break;
}

switch ($_POST["c"]) {
    case ($_POST["c"]<=0.3): { $bemerkung = "Das geht ja noch.";} break;
    case ($_POST["c"]<=0.5): { $bemerkung = "Achtung!";} break;
    case ($_POST["c"]<=0.8): { $bemerkung = "Das ist schon eine Menge.";} break;
    default/*case ($_POST["c"]>=0.8)*/: { $bemerkung = "Kein Kommentar.";} break;
}
?>
</body></html>
<?php
echo NL;
echo NL;

echo '<b>o) Einfacher Passwortschutz</b>'.NL;
?>
<!DOCTYPE html><html lang="de"><head><meta charset="UTF-8"><title>Title</title></head>
<body>
<p>Bitte geben Sie das Passwort ein</p>
<form action = "eingabeformular_o.php" method = "post">
    <p><input name = "Passwort"> Passwort </p>
    <p><input type = "submit">
        <input type = "reset"></p>
</form>
<?php
$_POST["passwort"]='';

($_POST["passwort"]=='Rauschebart13') ? $meldung = "Erfolgreich eingeloggt." :
                                        $meldung = "Falsches Passwort!";
?>
</body></html>
<?php
