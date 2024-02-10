<?php
// kata 1
// soal
// Terminal game move function
// In this game, the hero moves from left to right. The player rolls the dice and moves the number of spaces indicated by the dice two times.

// Create a function for the terminal game that takes the current position of the hero and the roll (1-6) and return the new position.
// solusi:
function move($pos, $roll) {
    return $pos + ($roll * 2);
  }
move(0,9);

// kata 2
// You will be given a list of strings. You must sort it alphabetically (case-sensitive, and based on the ASCII values of the chars) and then return the first value.

// The returned value must be a string, and have "***" between each of its letters.

// You should not remove or add elements from/to the array.
// solusi:
function twoSort($s) {
    sort($s);
    return implode("***",str_split($s[0]));
  }