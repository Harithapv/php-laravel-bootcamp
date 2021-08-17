<?php

$arr = [2, 3, [4,5], [6,7], 8];
$output = array();
foreach ($arr as $value){
    if(is_array($value)) {
        foreach ($value as $array) {
            array_push($output, $array);
        }
    } else {
        array_push($output,$value);
    }
}
print_r($output);