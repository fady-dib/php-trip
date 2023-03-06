<?php

$string = $_GET('string');
function reverseNumbers($string) {
    $list = [];
    for ($i = 0; $i < strlen($string); $i++) {
        for ( $j = 0; $j <= 9; $j++) {
            if ($string[$i] == $j) {
                array_push($list, $i);
            }
        }
    }
    $temp ="";
    $array = str_split($string);
    while (count($list) > 1) {
        $temp = $array[$list[0]];
        $array[$list[0]] = $array[$list[count($list) - 1]];
        $array[$list[count($list) - 1]] = $temp;
        array_pop($list);
        array_shift($list);
    }
    echo join("",$array);

}

reverseNumbers('fady0hi1ab9');
