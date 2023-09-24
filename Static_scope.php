\\static scope
<?php
function increament(){
    static $counter = 0;
    $counter ++;
    echo $counter. "\n";
}
increament();
increament();
increament();
