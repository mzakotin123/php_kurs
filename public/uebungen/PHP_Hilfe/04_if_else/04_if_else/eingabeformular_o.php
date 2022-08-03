<!DOCTYPE html><html lang="de"><head><meta charset="UTF-8"><title>Title</title></head><body>
<?php
$_POST["passwort"]='Rauschebart13';
echo($_POST["passwort"]=='Rauschebart13') ? $meldung = "Erfolgreich eingeloggt." :
                                            $meldung = "Falsches Passwort!";
?>
</body></html>