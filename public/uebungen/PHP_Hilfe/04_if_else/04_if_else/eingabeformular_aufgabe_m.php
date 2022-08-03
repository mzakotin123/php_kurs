<!DOCTYPE html><html><head><meta charset="utf-8"></head><body>
<?php
($_POST["nachname"]="Zakotin");
($_POST["geschlecht"]="männlich");
echo ($_POST["geschlecht"] == "männlich") ? "Hallo, Herr ".$_POST["nachname"]."<br>":
    (($_POST["geschlecht"] == "weiblich") ? "Hallo, Frau ".$_POST["nachname"]."<br>":
        "Ungültige Geschlechtsangabe!<br>");
/*if ($_POST["geschlecht"] == "männlich") {
    $anrede = 'Herr';
    echo 'Hallo, '.$anrede.' '.$_POST["nachname"].'<br>';}

else if ($_POST["geschlecht"] == "weiblich") {
    $anrede = 'Frau';
    echo 'Hallo, '.$anrede.' '.$_POST["nachname"].'<br>';}
else {echo 'Ungültige Geschlechtsangabe!<br>';}*/
?>
</body></html>
