<?php

function count_handshake($a)
{
    $n=0;
    $b=$a-1;
    for ($i=0; $i<$a; $i++)
    {
        for ($j=0; $j<$i; $j++)
        {
        $n=$n+1;
        }
        $b=$b-1;
    }
    echo $n;
    
}
count_handshake(3);


?>