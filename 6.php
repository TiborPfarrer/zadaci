<?php
/**
 * potrebno je ispisati svaki 7. član i svaki član dijeljiv sa 3
 */
$l = array(123,45,66,32,78,87,59,31,62,54,28,76,38,12,15);
for ($i = 0;$i == 15;$i++)
{
    if (($l[$i]%3==0) || (($i+1)%7==0))
    {
        echo $l[$i]. " ";
    }

}
