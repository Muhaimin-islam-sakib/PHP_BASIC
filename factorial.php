<?php
function recursive_factorial($n){
    if($n == 0){
        return 1;
    }
    return $n * recursive_factorial($n-1);
}
$result = recursive_factorial(7);
echo $result;


function nonrecursive_factorial($n){
    $result = 1;
    for($i=$n;$i>0;$i--){
        $result *= $i;
    }
    return $result;
}
$result = nonrecursive_factorial(7);
echo $result;