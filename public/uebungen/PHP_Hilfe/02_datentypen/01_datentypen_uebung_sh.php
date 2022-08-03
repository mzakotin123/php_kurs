<?php

require '../../../config.php';
echo HEAD;


    $a = 12;
    $z = $a;

    echo $z.NL;


/*Welcher Wert ist $z?*/

$a = 100;
$b = 200;

echo $a." - ".$b.NL;

/*Was wird ausgegeben?*/


$a = 100;
$b = 200;

$a = $b;
$b = $a;

echo $a." - ".$b.NL;


/*Was wird ausgegeben?*/



$a = 100;
$b = 200;

$temp = $a;
$a    = $b;
$b    = $temp;


echo $a." - ".$b;

/*Was wird ausgegeben?*/
echo FOOT;