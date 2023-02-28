<?php

$file = "FurnitureData.json";

$json = json_decode(file_get_contents($file, true));

foreach($json->roomitemtypes->furnitype as $items)
{
    $items->offerid = $items->id;
    echo "done \n";
}

file_put_contents('furnidata_new.json', json_encode($json));
?>

