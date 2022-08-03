<?php
require '../../../config.php';

$AKZ = array("B","S","TÜ","M","MZ".NL);
echo $AKZ[2].NL;

//assoziatives Array: Autokennzeichen
$AKZ["B"]  = "Berlin".NL;
$AKZ["S"]  = "Stuttgart".NL;
$AKZ["TÜ"] = "Tübingen".NL;
$AKZ["M"]  = "München".NL;
$AKZ["MZ"] = "Mainz".NL;

print_r($AKZ).NL;

echo "Stadt: ".$AKZ["TÜ"].NL;


//Lottozahlen
$Zahlen = array();
$Zahlen[] = 15..NL;
$Zahlen[] =  6..NL;
$Zahlen[] =  3..NL;
$Zahlen[] = 11..NL;
$Zahlen[] = 36..NL;
$Zahlen[] = 32..NL;

for($i=0; $i<6; $i++) {
    $Lotto = mt_rand(1,49);
    if( in_array($Lotto, $Zahlen) ) {
        $i--; //Dekrementieren: $i=$i-1
        continue; //fortfahren
    }
    $Zahlen[] = $Lotto.NL;
    //shuffle($Zahlen);
}
print_r($Zahlen).NL;


