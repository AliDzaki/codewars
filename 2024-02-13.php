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

// kata 2
// Your task is to construct a building which will be a pile of n cubes. The cube at the bottom will have a volume of 
// link : https://www.codewars.com/kata/5592e3bd57b64d00f3000047
// solusi :
function findNb($m) {
    $angka = 0;
      while($m > 0){
        $angka++;
        $kubus = pow($angka,3);
        $m -= $kubus;  
      }
    if($m < 0){
      return -1;
    }
    return $angka;
  }

