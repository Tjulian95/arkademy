<?php

function dataJson()
{
    $data = array (
        'Nama' => "Tri Yulianto",
        'Age' => 24,
        'Address' => "Kebondalem 02/06 Paseban Bayat, Klaten",
        'Hobby' => array ("Membaca", "Badminton"),
        'is_married' => false,
        'List_school' => array ( "SMK N 2 Klaten", "2010","2014","Teknik Gambar Bangunan"),
        'Skills' => array (
            0 => array("AutoCAD","Advanced"),
            1 => array("SketchUp","Advanced"),
            2 => array ("PHP", "Beginner"),
        ),
        'Interest_in_coding' => true,
  
    );
    return json_encode($data);
}


$jsonData = dataJson();

echo $jsonData

?>