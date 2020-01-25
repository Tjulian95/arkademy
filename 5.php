<?php

function findHighestProfit($harga)
{
    $profit [] = 0;
    $b=count($harga)-1;
    for ( $i=0; $i<count($harga);$i++)
    {
        for ( $j=0 ; $j<$b; $j++){
            $c=$harga[$b]-$harga[$j];
            if ($c>0){$profit [] = $c;}
        }
        $b=$b-1;
    }
    if (count ($profit)!=1)
    {
        echo max($profit);}
        else {echo "Tidak Mendapatkan Profit Hari Ini";}
    }

findHighestProfit (array(33,29,11,4));

?>