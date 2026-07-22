<?php

// Вывести на экран три случайных названия дня недели

function getDayNameByNumber(int $number): string
{
    if ($number == 1) {
        return 'Понедельник';
    } elseif ($number == 2) {
        return 'Вторник';
    } elseif ($number == 3) {
        return 'Среда';
    } elseif ($number <= 7) {
        return 'Четверг';
    }
}

function genRandDayNumber(): int
{
    return rand(1, 7);
}

const DAY_COUNT = 3;

function task7(): void
{
//    $day1 = rand(1, 7);
//    $day2 = rand(1, 7);
//    $day3 = rand(1, 7);
//
//    echo getDayNameByNumber($day1);
//    echo getDayNameByNumber($day2);
//    echo getDayNameByNumber($day3);

    for ($i = 0; $i < DAY_COUNT; $i++) {
        echo getDayNameByNumber(genRandDayNumber());
    }
}

function genRandLetter(): string
{
//    $number = rand(1, 8);
//    if ($number == 1) {
//        return 'A';
//    } elseif ($number == 2) {
//        return 'B';
//    } elseif ($number <= 8) {
//        return 'C';
//    }

    // echo ord('B'); 65 - A
    // 65 - 90
    $code = rand(65, 90);
    return chr($code);
}

function task20(): void
{
    $letter = genRandLetter();
    $number = rand(1, 8);

    echo $letter . $number;
}

//task20();

// A, B, C
// 65 66 67

//echo chr(ord('A'));

function task16(): void
{
    // Вывести на экран натуральные числа от 1 до 100,
    // кроме одного, которое определяется случайным образом

    $number = rand(1, 100);
    echo 'Отсутствует ' . $number . '<br>';

    for ($i = 1; $i <= 100; $i++) {
        if ($i == $number) {
            continue;
        }
        echo $i . ' ';
    }
}

//task16();

function task17(): void
{
    // Вывести на экран все натуральные числа от 1 до 100,
    // кроме двух случайных чисел.
    // Вывести на экран сумму этих пропущенных чисел.

    $number1 = rand(1, 100);
    $number2 = rand(1, 100);
    echo 'Отсутствует ' . $number1 . '<br>';
    echo 'Отсутствует ' . $number2 . '<br>';

    for ($i = 1; $i <= 100; $i++) {

        if (($i == $number1) || ($i == $number2)) {
            continue;
        }

        echo $i . ' ';
    }

    echo '<br>' . ($number1 + $number2);
}

//task17();

//for ($i = 1; $i <= 10; $i++) {
//
//   if ($i == 2) {
//       continue;
//   }
//
//   echo $i . ' ';
//}