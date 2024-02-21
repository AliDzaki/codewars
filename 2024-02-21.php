<?php
// kata 1
// Array.diff
// Your goal in this kata is to implement a difference function, which subtracts one list from another and returns the result.
// solusi :
function arrayDiff($a, $b)
{

    $result = array_diff($a, $b);
    return array_values($result);

}

//kata 2
// Small enough? - Beginner
// You will be given an array and a limit value. You must check that all values in the array are below or equal to the limit value. If they are, return true. Else, return false.
// You can assume all values in the array are numbers.
// solusi
function smallEnough($a, $limit)
{
    $result = true;
    foreach ($a as $item) {
        if ($item > $limit) {
            $result = false;
        }
    }
    return $result;
}

// kata 3
// Find Multiples of a Number
// In this simple exercise, you will build a program that takes a value, integer , and returns a list of its multiples up to another value, limit . If limit is a multiple of integer, it should be included as well. There will only ever be positive integers passed into the function, not consisting of 0. The limit will always be higher than the base.
// For example, if the parameters passed are (2, 6), the function should return [2, 4, 6] as 2, 4, and 6 are the multiples of 2 up to 6.
// solusi
function findMultiples(int $integer, int $limit): array{
    $result = [];
   for($i = $integer;$i <= $limit;$i += $integer){
     $result[] = $i;
   }
   return $result;
 }