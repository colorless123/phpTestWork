<?php

//добавление животных
function AddAnimals($count,$type){

    global $farm;

    for($i=1;$i<=$count;$i++){
        $farm[] = new $type;
    }
    echo '~~~система добавила животных~~~'."\n";
}

//подсчет животных по типам
function CountAnimalsForTypes(){

    global $farm;
    $cows = 0;
    $chickens = 0;

    foreach ($farm as $value){
        switch ($value->getClass()) {
            case "cow":
                $cows++;
                break;
            case "chicken":
                $chickens++;
                break;
        }
    }
    
    echo "\n";
    echo '~~~ТЕПЕРЬ В ХЛЕВУ~~~'."\n";
    echo '~~~~~'.$cows.' коров~~~~~~~'."\n";
    echo '~~~~~'.$chickens.' куриц~~~~~~~'."\n";
    echo "\n";
}

//сбор продуктов по типам
function CollectItemsInOneDay() {

    global $farm;
    global $milk;
    global $egg;
    foreach ($farm as $value){
        switch ($value->getClass()) {
            case "cow":
                $milk +=$value->getItem();
                break;
            case "chicken":
                $egg +=$value->getItem();
                break;
        }
    }
}