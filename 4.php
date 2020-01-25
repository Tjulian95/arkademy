<?php

function findDuplicates ($find)
{
    $filter = preg_replace ("/[^a-zA-Z!]/", "", $find);
    $huruf = str_split ($filter);
    for ($i=0; $i<count($huruf);$i++)
    {
        $jumlah = substr_count($filter,$huruf[$i]);
        if ($jumlah>1){
            if (in_array($huruf[$i], $tampung)){echo "";}
            else {
                echo $huruf[$i], ": ",$jumlah;
                echo "<br>";
            }
        }
        $tampung[]=$huruf[$i];
    }
}

findDuplicates("cepat kerjakan!!!")


?>