<?php
// kata 1
// soal
// Terminal game move function
// In this game, the hero moves from left to right. The player rolls the dice and moves the number of spaces indicated by the dice two times.

// Create a function for the terminal game that takes the current position of the hero and the roll (1-6) and return the new position.
// solusi:
function move($pos, $roll)
{
    return $pos + ($roll * 2);
}
move(0, 9);

// kata 2
// You will be given a list of strings. You must sort it alphabetically (case-sensitive, and based on the ASCII values of the chars) and then return the first value.

// The returned value must be a string, and have "***" between each of its letters.

// You should not remove or add elements from/to the array.
// solusi:
function twoSort($s)
{
    sort($s);
    return implode("***", str_split($s[0]));
}

// kata 3
// Welcome. In this kata, you are asked to square every digit of a number and concatenate them.

// For example, if we run 9119 through the function, 811181 will come out, because 92 is 81 and 12 is 1. (81-1-1-81)

// Example #2: An input of 765 will/should return 493625 because 72 is 49, 62 is 36, and 52 is 25. (49-36-25)

// Note: The function accepts an integer and returns an integer.

// Happy Coding!

// solusi:
function square_digits($num): int {
    $arr = str_split($num);
    $result = 0;
    foreach($arr as $num){
      $result .= pow($num, 2);
    }
    return $result;
  }

