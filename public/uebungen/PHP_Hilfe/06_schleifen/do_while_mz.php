<?php
/*$i = 11;

do {
    echo $i . '<br>';
    $i++;
}
while ($i<10);

$i = 0;
//Elternschleife
do{

    $j = 0;
    //Kindschleife
do {

    echo 'Hallo';

    $j++;
}
while ($j<=$i);
echo '<br>';

$i++;

}
while ($i<=10);*/

$tage = ['Mo', 'Di', 'Mi', 'Do', 'Fr'];

$i = 0;
$j = count ($tage);

do{

    echo $tage[$i].'<br>';
    $i++;
}
while ($i<$j);


$summe = 0;

do{
    $wuerfel = rand(1,6);
    $summe = $summe + $wuerfel;

    echo 'Zahl'. $wuerfel . ' Summe' . $summe . ' ';
}
while ($summe<25);