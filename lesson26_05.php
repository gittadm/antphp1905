<?php

// task1 Даны 2 числа. Найти их сумму

//$a = round(5.7);

function findSum($a, $b)
{
    $sum = $a + $b;

    echo $sum;
}

function findSum2()
{
    $a = 3;
    $b = 7;

    $sum = $a + $b;

    echo $sum;
}

function solveSquareEquation($a, $b, $c)
{
    if ($a == 0) {
        echo 'Not square!';
        return 'Not square!';
    }

    $D = $b * $b - 4 * $a * $c;

    if ($D < 0) {
        echo 1;
    } else {
        echo 2;
    }

    if ($D < 0) {
        echo 1;
    } elseif ($D > 0) {
        echo 2;
    } else {
        echo 3;
    }

}

//findSum(5, 9);
//findSum(3, 4);
//findSum(9, 7);

//findSum2();

// task2
// Дан номер дня недели. Вывести название дня недели

function findDayNameOfWeek($dayNumber)
{
//    $a = 1;
//    return $a;
//    $a = 2; // BAD

    if ($dayNumber == 1) {
        return 'Monday';
    } elseif ($dayNumber == 2) {
        return 'T2';
    } elseif ($dayNumber == 3) {
        return 'T3';
    } elseif ($dayNumber == 4) {
        return 'T4';
    } elseif ($dayNumber == 5) {
        return 'T5';
    } elseif ($dayNumber == 6) {
        return 'T6';
    } else {
        return 'Error';
    }
}

function showDayNameOfWeek($name)
{
    echo '!!!' . $name . '!!!';
}

$name = findDayNameOfWeek(1);
//showDayNameOfWeek($name);

$a = 6;
$b = '6';

if ($a === (int)$b) { // <, <=, >, ==, ===
    echo 'Yes';
} else {
    echo 'No';
}

$a = 5;
$b = 6;

if (($a < 10 && $b > 5) || ($a > $b && $a > 1)) { // && - и, || - или
    echo 'Yes';
} else {
    echo 'No';
}
