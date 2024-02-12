<?php
// day 2
//kata 1
// Create a function that takes an integer as an argument and returns "Even" for even numbers or "Odd" for odd numbers.
// solusi :
function even_or_odd(int $n): string {
    return $n % 2 == 0 ? "Even" : "Odd";
   }

function even_or_odd2($n){
    if($n % 2 == 0){
        return "Even";
    }else{
        return "Odd";
    }
}