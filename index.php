<?php

// 2. Даны три числа. Найти среднее арифметическое этих чисел
// и если оно положительное, то найти корень из этого числа.

$a = 2;
$b = 4;
$c = 1;

$avg = ($a + $b + $c) / 3;

if ($avg > 0) { // >, <, >=, <=, ==
    $sqrt = round(sqrt($avg), 2);
} else {
    $sqrt = 'нет';
}

$avg = round($avg, 2);

// $avg = $avg * 2;

echo 'Среднее: ' . $avg . ';<br> корень: ' . $sqrt;

// 1. Даны два числа. Найти их сумму

// $usersCount = 12; // !!!
// $users_count = 12; // no
// $kolichestvo_polzovatelei = 19;

//$number1 = 10;
//$number2 = 20;
//
//$sum = $number1 + $number2;
//
//echo 'Сумма двух чисел: ' . $sum . '<br>';
//
//$word = 'hello';
//$word2 = "world";
//$word3 = $word . ' - ' . $word2; // конкатенация
//
//echo $word3;

///////////////////////////////////////////////
// PSR
// Ctrl + alt + L


// echo 222; // echo 'hello';

/*
    echo 'hello';
    echo 'hello';
    echo 'hello';
    echo 'hello';
    echo 'hello';
*/

// Ctrl+/

//echo 'hello';
//echo 'hello';
//echo 'hello';
//echo 'hello';
//echo 'hello';

//echo 1;

