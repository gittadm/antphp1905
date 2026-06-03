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

function compareDates() {
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