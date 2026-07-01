<?php

// Выведите на экран прямоугольник из нулей.
// Количество строк n, количество столбцов равно 5.

function showRectangle(): void
{
    $n = 10;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo '0';
        }
        echo '<br>';
    }
}

// Выведите на экран прямоугольник из нулей на границе.
// Количество строк n, количество столбцов равно 5.
// Внутри из единиц.

function showOneLine(int $p, int $m = 9, int $k = 10): void
{
    for ($j = 0; $j < $k; $j++) {
        echo '0';
    }
    echo '<br>';
}

function isPointInRectangle(): bool
{
    $b = 4 > 1 && 6 < 3;

    return $b;
    $i = 1;
    $j = 2;
    $k = 4;

//    $isPointInRectangle = $i > 10 || $j < 30 || $k + $i == $j ||
//        $i + 5 < $j - $k;

//    return $isPointInRectangle;

    return $i > 10 || $j < 30 || $k + $i == $j || $i + 5 < $j - $k;
}

function showRectangleMiddlePart(): void
{
    $n = 10;
    $k = 10;
    for ($i = 0; $i < $n - 2; $i++) {
        echo '0';
        for ($j = 0; $j < $k - 2; $j++) {
            echo '1';
        }
        echo '0';
        echo '<br>';
    }
}

function showRectangle2(): void
{
    $n = 10;
    $k = 10;

    showOneLine(77);
    showRectangleMiddlePart();
    showOneLine($k);

    // попадает ли точка в квадрат
    if (isPointInRectangle()) {
        echo '123';
    }

    if (isPointInRectangle()) {
        echo 'yes';
    }
}

//showRectangle2();

//////////////

// Найти сумму двух чисел и умножить на 10.

function findSum(int $a, int $b): int
{
    $k = 10;
    $p = $k + $a - 3;

    $c = ($a + $b) * $k;
    return $c;
}

function show000(): void
{
    echo '000';
}

//show000();

//$p = (findSum(7, 9) + 5) * findSum(8, 9);
//findSum(16, 10);

function task1(): void
{
    $a = 4;
    $b = 56;
    echo $a + $b;
}

function task2(): void
{
    $a = 4;
    $b = 56;

    echo $a + $b;
}

/////////////////////////////////

function genNumber(): void
{
    $n = rand(1, 20);
    echo $n;

    // while
    // for

    for ($i = 0; $i < 10; $i++) {
        echo $i;
        if ($i == 7) {
            break;
        }
    }

    // вывести на экран 1, 2, 3, 4, 6, 7, 8, 9, 10
    for ($i = 1; $i < 11; $i++) {
        echo $i . ' ';
    }

    $i = 0;
    while ($i < 10) {
        echo $i;
        $i++;
    }
    ///

    $p = 2;
    while (true) {
        $i = $p + 3;
        if ($i == 5) {
            break;
        }
    }

}

function whileFor(): void
{
// вывести на экран 1, 2, 3, 4, 6, 7, 8, 9, 10
//    for ($i = 1; $i < 11; $i++) {
//        if ($i == 5) {
//            continue;
//        }
//        echo $i . ' ';
//    }

//    $i = 1;
//    while ($i < 11) {
//        if ($i != 5) {
//            echo $i . ' ';
//        }
//        $i++;
//    }

//    $i = 1;
//    while ($i < 11) {
//        if ($i == 5) {
//            $i++;
//            continue;
//        }
//        echo $i . ' ';
//        $i++;
//    }

    // вывести на экран два различных случайных числа
    // от 1 до 10

    $n = rand(1, 10);
    $m = rand(1, 10);

    while ($n == $m) {
        $n = rand(1, 10);
        $m = rand(1, 10);
    }

    echo $n . ' ' . $m;
    echo '<br>';

    // do - while
    do {
        $n = rand(1, 10);
        $m = rand(1, 10);
    } while ($n == $m);

    echo $n . ' ' . $m;
}

whileFor();