<?php 
//Nested for loop

for($i=10; $i<=20; $i++){
    echo "Time table of :$i" .PHP_EOL;

    for ($j =1;$j<=10;$j++){
        $product = $i * $j;
        echo "$i x $j = $product" .PHP_EOL;
    
    }
    echo PHP_EOL;
}