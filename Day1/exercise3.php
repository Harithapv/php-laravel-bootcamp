<?php

$input = array("snake_case", "camel_case");
foreach ($input as $value){
    $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $value)));
    $camelcase[] = $str;
}
print_r($camelcase);
