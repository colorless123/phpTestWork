<?php

require_once('classes/Farm.php');
require_once('classes/cow.php');
require_once('classes/chicken.php');
require_once('functions.php');


$farm = array();
$milk = 0;
$egg = 0;
$days = 0;

AddAnimals(10,'cow');
AddAnimals(20,'chicken');
CountAnimalsForTypes();

while ($days<7) {

    ++$days;
    CollectItemsInOneDay();
}
echo "\n";
echo '~~ Прошла неделя ~~'."\n";
echo "Всего молока: ".$milk.' л.'."\n";
echo "Всего яиц: ".$egg.' шт.'."\n";
echo '~~ +++++++++++++ ~~'."\n";
echo "\n";

AddAnimals(1,'cow');
AddAnimals(5,'chicken');
CountAnimalsForTypes();

while ($days<14) {

    ++$days;
    CollectItemsInOneDay();
}
echo "\n";
echo '~~ Прошла неделя ~~'."\n";
echo "Всего молока: ".$milk.' л.'."\n";
echo "Всего яиц: ".$egg.' шт.'."\n";
echo '~~ +++++++++++++ ~~'."\n";
echo "\n";

//~~~~~можно посмотреть номер каждого животного и сколько в последний день он дал продуктов~~~~~
// $i = 0;
// while (!empty($farm[$i])){
//     echo 'Номер :'. $farm[$i]->idAnimal .' - ' . $farm[$i]::nameAnimal . '. Принесло :' . $farm[$i]->lastItems."\n";
//     $i++;
// }