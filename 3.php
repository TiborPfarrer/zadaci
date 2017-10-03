<?php
/**
 * 
 * potrebno je izvaditi svaki parni član, staviti ga u odvojenu listu te ispisati obje liste
 */
$l = array(12,35,37,24,51,64,78,81,97,6);
$p = array();
for ($i = 0;$i < 10;$i++)
{
    if ($l[$i]%2==0)
    {
        $p = $l[$i];
        unset($l[$i]);
    }
}
foreach($l as $indeks)
{
    echo $indeks . " ";
}
foreach($p as $indeksa)
{
    echo $indeksa . " ";
}
?>