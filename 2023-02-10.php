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
function square_digits($num): int
{
  $arr = str_split($num);
  $result = 0;
  foreach ($arr as $num) {
    $result .= pow($num, 2);
  }
  return $result;
}

// kata 4
// Deoxyribonucleic acid (DNA) is a chemical found in the nucleus of cells and carries the "instructions" for the development and functioning of living organisms.

// If you want to know more: http://en.wikipedia.org/wiki/DNA

// In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G". Your function receives one side of the DNA (string, except for Haskell); you need to return the other complementary side. DNA strand is never empty or there is no DNA at all (again, except for Haskell).

// More similar exercise are found here:
// solusi:
function DNA_strand($dna)
{
  $arr = str_split($dna);
  $result = "";
  foreach ($arr as $string) {
    switch ($string) {
      case "A":
        $result .= "T";
        break;
      case "T":
        $result .= "A";
        break;
      case "C":
        $result .= "G";
        break;
      case "G":
        $result .= "C";
        break;
      default:
        $result .= "";
    }

  }
  return $result;
}

// kata 5
//   Write a function that takes a list of strings as an argument and returns a filtered list containing the same elements but with the 'geese' removed.

// The geese are any strings in the following array, which is pre-populated in your solution:

//   ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"]
// For example, if this array were passed as an argument:

//  ["Mallard", "Hook Bill", "African", "Crested", "Pilgrim", "Toulouse", "Blue Swedish"]
// Your function would return the following array:

// ["Mallard", "Hook Bill", "Crested", "Blue Swedish"]
// The elements in the returned array should be in the same order as in the initial array passed to your function, albeit with the 'geese' removed. Note that all of the strings will be in the same case as those provided, and some elements may be repeated.
// solusi :
function gooseFilter($birds) {
  $geese = ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"];
  $filtered = [];
  foreach($birds as $bird){
    if(!in_array($bird, $geese)){
      $filtered[] = $bird;
    }
  }
  return $filtered;
}
