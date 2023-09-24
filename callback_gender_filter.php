<?php
$people=[
    ['name'=>'Arif','gender'=>'M'],
    ['name'=>'Bilal','gender'=>'M'],
    ['name'=>'Shiuli','gender'=>'F'],
    ['name'=>'Lamia','gender'=>'F'],
    ['name'=>'Minhaj','gender'=>'M'],

];
function isMale ($person){
    if ($person['gender']=='M'){
    return true;
}return false;
}
function isFemale ($person){
    if($person['gender']=='F'){
        return true;
    }return false;
}
$males = array_filter($people,"isMale");
$female = array_filter($people,"isFemale");
// print_r($males);
print_r($males);
