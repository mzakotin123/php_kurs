<?php

$termin[] = array('Datum' => 20211208,
    'Ort' => "Wangen",
    'Band' => "cOol RoCk oPaS");

$termin[] = array('Datum' => 20210311,
    'Ort' => "Stuttgart",
    'Band' => "Die Hosenbodenband");

$termin[] = array('Datum' => 20210628,
    'Ort' => "Tübingen",
    'Band' => "flying socks");

$termin[] = array('Datum' => 20210630,
    'Ort' => "Stuttgart",
    'Band' => "flying socks");

$termin[] = array('Datum' => 20210429,
    'Ort' => "Leipzig",
    'Band' => "Yxelag");

$termin[] = array('Datum' => 20210427,
    'Ort' => "Leipzig",
    'Band' => "Kali Masi");


//echo '<pre>';
//print_r ($termin);

foreach ($termin as $nr => $inhalt) {
    $band[$nr] = strtolower($inhalt['Band']); //Groß- und Kleinschreibung ignorierend
    $ort[$nr] = strtolower($inhalt['Ort']);
    $datum[$nr] = strtolower($inhalt['Datum']);
}

//
//print_r ($termin);

//var_dump ($termin);
?>
    <html>
    <body>
    <a href="terminkalender_mz_sh.php?sortierung=d">Datum</a>
    <a href="terminkalender_mz_sh.php?sortierung=b">Band</a>
    <a href="terminkalender_mz_sh.php?sortierung=o">Ort</a>
    </body>
    </html>
<?php
echo ($GET['sortierung']='');
switch ($_GET['sortierung']) {
    case('d'):
        array_multisort($datum, SORT_ASC, $termin);
        break;
    case('b'):
        array_multisort($band, SORT_ASC, $termin);
        break;
    case('o'):
        array_multisort($ort, SORT_DESC, $termin);
        break;

}
echo '<pre>';
print_r ($termin);

echo '<table border="1" cellpadding="1" cellspacing="1" summary="">';
echo '<tr>';
echo        '<td>'.'Datum'.'</td>';
//echo        '<td>'.$datum->Datum.'</td>';
echo        '<td>'.'Band'.'</td>';
//echo        '<td>'.$band->Band.'</td>';
echo        '<td>'.'Ort'.'</td>';
//echo        '<td>'.$ort->Ort.'</td>';
echo '</tr>';

for ($i=0; $i<=5; $i++)
{
    echo '<tr>';
    echo        '<td>'.$inhalt['Datum'].'</td>';
//echo        '<td>'.$datum->Datum.'</td>';
    echo        '<td>'.$inhalt['Band'].'</td>';
//echo        '<td>'.$band->Band.'</td>';
    echo        '<td>'.$inhalt['Ort'].'</td>';
//echo        '<td>'.$ort->Ort.'</td>';
    echo '</tr>';

}
echo '</table>';