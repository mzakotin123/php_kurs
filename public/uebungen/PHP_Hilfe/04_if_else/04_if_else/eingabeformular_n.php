<!DOCTYPE html><html lang="de"><head><meta charset="UTF-8"><title>Title</title></head><body>
<?php
($_POST["liter"] = 200);
($_POST["gramm"] = ($_POST["liter"]) * 0.05 * 0.79);
echo $_POST["liter"].' Liter Bier entsprechen '. $_POST["gramm"] . ' Gramm Alkohol.<br>';
echo '<br>';
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
echo (($_POST["prozent"])*100).' Prozent Alkohol<br>';
echo $_POST["c"].' Promille -> '.$bemerkung;
?>
</body></html>
