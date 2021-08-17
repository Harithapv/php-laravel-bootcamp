<?php
$json_strng = "{\"players\":[{\"name\":\"Ganguly\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dravid\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dhoni\",\"age\":37,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Virat\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}}]}";
$obj = json_decode($json_strng);
$obj = ($obj->players);

$name = array();
$age  = array();
$city = array();


foreach ($obj as $arryObj){
    $names[] = $arryObj->name;
    $ages[]  = $arryObj->age;
    $citys[] = $arryObj->address->city;
}
$nameInString = implode(",",$names);
echo "Names: [ $nameInString ] \n";
$ageInString  = implode(",",$ages);
echo "Age: [ $ageInString ]\n";
$cityInString = implode(",",$citys);
echo "Cities: [ $cityInString ]\n";

$uniqueName = array_unique($names);
$uniqueName = implode(",",$uniqueName);
echo "Output: Names : [ $uniqueName ]";

$maxAge = max($ages);
foreach ($obj as $arryObj){
    if($arryObj->age == $maxAge ) {
        $nameOfMaxAge[] = $arryObj->name;
    }
}
$maxAgeName = implode(",",$nameOfMaxAge);
echo "Output Names: [ $maxAgeName  ]";