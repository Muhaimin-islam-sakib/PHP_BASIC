<?php
$number = [1,2,3,4,5,6,7,8,9,10,11,12];
function isEven($n){
    if($n%2 == 1){
        return true;
    }
    return false;
}
$evenNumber = array_filter($number, "isEven");
print_r($evenNumber);