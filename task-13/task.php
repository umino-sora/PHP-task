<?php

//課題1
function double($number) {
    $result = $number * 2;
    return $result;
}
echo double(5);

//課題2
function sum($a, $b) {
    $result = $a + $b;
    return $result;
}
echo sum(10, 5);

//課題3
function multiply($numbers) {
    $result = 1;
    foreach ($numbers as $number) {
        $result *= $number;
    }
    return $result;
}
echo multiply(array(1, 3, 5, 7, 9,));

//課題4
function return_max($numbers) {
    $max_number = $numbers[0];
    foreach ($numbers as $number) {
        if ($max_number < $number);
        $max_number = $number;
    }
    return $max_number;
}
echo return_max(array(3, 2, 7, 4, 8,));

//課題5
////strip_tags — 文字列から HTML および PHP タグを取り除く
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
echo strip_tags($text, '<p><a>');

////array_push — ひとつ以上の要素を配列の最後に追加する
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

////array_merge — ひとつまたは複数の配列をマージする
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

////time — 現在の Unix タイムスタンプを返す
$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";

////mktime — 日付を Unix のタイムスタンプとして取得する
date_default_timezone_set('UTC');
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo date('c', mktime(1, 2, 3, 4, 5, 2006));

////date — ローカルの日付/時刻を書式化する
date_default_timezone_set('UTC');
echo date("l");
echo date('l jS \of F Y h:i:s A');
