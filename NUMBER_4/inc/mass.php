<?php
$array = makeRandArray();
$k = 0;
for($i = 1; $i < 100; $i++){//Перебираем массив сравнивая текущий элемент с предыдущим
if($array[$i] == $array[$i-1]){
    $k++;
}
}
function makeRandArray(){//Функция заполнения массива случайными числами
    $randArray = array();
    for($i = 0; $i < 100; $i++){
        $randArray[$i] = rand(0, 10);
    }
    return $randArray;
}

