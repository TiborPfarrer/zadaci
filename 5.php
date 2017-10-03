<?php
/**
 * potrebno je prebrojati koliko kvadrata tih brojeva je djeljivo sa 2
 */
$lista = array(1,2,3,4,5,6,7,8,9,10);
$brojalica = 0;
for ($i = 0;$i==9;$i++)
{
    if(($lista[$i]**2)%2==0)
    {
        $brojalica++;
    }
	echo($brojalica);
}