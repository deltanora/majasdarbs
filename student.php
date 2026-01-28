<?php

$students = [
    ["name"=>"Džons", "age"=>20, $grades = [90, 85, 88]],
    ["name"=>"Džena", "age"=>22, $grades = [92, 80, 84]],
    ["name"=>"Džo", "age"=>21, $grades = [78, 85, 90]]
];

foreach($students as $people){
    $sum = 0;
    foreach($grades as $atzime){
        $sum += $atzime;
}
echo $people["name"] . " " . $sum . " ";
}

?>