<?php
$books = [
    ["id"=>1,"title"=>"Harry Potter 1","author"=>"J.K.Row"],
    ["id"=>2,"title"=>"Harry Potter 2","author"=>"J.K.Row"],
    ["id"=>3,"title"=>"Lord of the Rings","author"=>"J.R.R.Tolk"],
    ["id"=>4,"title"=>"Catch-22","author"=>"Joseph Heller"],
    ["id"=>5,"title"=>"Niladri","author"=>"CB"],

];
function sortByAuthorName($book1,$book2){
    if(strlen($book1["author"])>strlen($book2["author"])){
        return 1;
    }
elseif (strlen($book1["author"])<strlen($book2["author"])){
    return -1;
}else{
    return 0;
}
}
usort($books,"sortByAuthorName");
print_r($books);