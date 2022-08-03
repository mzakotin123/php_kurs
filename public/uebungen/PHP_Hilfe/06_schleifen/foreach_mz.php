<?php

/*$tage = ['Mo', 'Di', 'Mi', 'Do', 'Fr'];

foreach ($tage as $wert)
{

    echo $wert.'<br>';
}*/

$tage = array(
        array ('Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag'),
        array('morgens',
             'vormittag',
             'mittag',
             'nachmittag',
             'abend',
             'nacht',

        ) );

foreach ($tage as $index=> $arrays) {

    echo $index.'<br>';


foreach ($arrays as $index => $wert) {

    echo $index.' '.$wert.'<br>';
} }
