<?php

function checkDate($day, $month, $year)
{
    if ($year < 0) {
        return 'no';
    }

    if ($month < 1 || $month > 12) {
        return 'no';
    }

    if ($day < 1 || $day > 31) {
        return 'no';
    }

    if ($month == 2 && $day > 28) {
        return 'no';
    }

    if (($month == 11 || $month == 5 || $month == 8) && $day > 30) {
        return 'no';
    }
}

function compareDates()
{
    $day1 = 4;
    $day2 = 6;
    $month1 = 5;
    $month2 = 5;
    $year1 = 2026;
    $year2 = 2025;

    if ($year1 < $year2) {
        return 'yes';
    }

    if ($year1 > $year2) {
        return 'no';
    }
}

echo compareDates();

//

function checkOneMoreDate(?int $day, string $month, float $p, bool $flag): bool
{
    $isValidDate = false;

    // ...

    $isValidDate = true;

    return $isValidDate;
}

$isValid = checkOneMoreDate(7, 6, 4.5, false);

if ($isValid) {
// if ($isValid == true) {
    echo 'Yes';
} else {
    echo 'No';
}

function showNumber(int $number): void
{
    echo '<p>' . $number . '</p>';
}

$number = null;


//

function test()
{
    $b = 0;
    $a = 1;

    if ($a == 1) {
        $b = 2;
    } else {
        $b = $a + 1;
    }

    // тернарный оператор

    $b = $a == 1 ? 2 : $a + 1;

    $day = 6;
    $k = null;

    if ($day == 1) {
        $k = 5;
    } elseif ($day == 2) {
        $k = 6;
    } elseif ($day == 3) {
        $k = 6;
    } elseif ($day == 4) {
        $k = 6;
    } elseif ($day == 6) {
        $k = 7;
    }

    switch ($day) {
        case 1:
            $k = 5;
            break;
        case 2:
            $k = 6;
            break;
        case 3:
            $k = 9;
            break;
        default:
            $k = 10;
    }

    echo $k;

    //
    $a = 0.10;
    $b = 0.7;

    $c = $a + $b; // 0.799999999924235993423

    $eps = 0.001;
    $c = 0.8;
    $d = 0.7999999;

    if (($c - ($a + $b)) < 0.000001) {
        echo 'equal';
    }
}


