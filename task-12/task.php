<?php

//課題1
$name = "島田千香";
if ($name === "島田千香") {
    echo "私は 島田千香 です";
} else {
    echo "島田千香ではありません";
}

//課題2
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

//課題3
$fruits = array("banana", "apple", "lemon", "kiwi", "peach",);
foreach($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}

//課題4
for($i = 1; $i <= 100; $i ++){
    if($i % 5 === 0){
        echo $i;
        echo "\n";
    }
}
