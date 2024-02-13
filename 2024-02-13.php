<?php
// kata 1
// Your task is to write a function which returns the sum of following series upto nth term(parameter).
// solusi : 
function series_sum($n)
{
    $pembagi = 1;
    $sum = 0.00;
    $angka = 1;
    for ($i = 1; $i <= $n; $i++) {
        if ($i === 1) {
            $sum = 1;
        } else {
            $pembagi += 3;
            $sum += 1 / $pembagi;
        }
    }
    return strval(number_format($sum, 2, '.', ''));
}