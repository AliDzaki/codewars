<?php
// kata 1
// All of the animals are having a feast! Each animal is bringing one dish. There is just one rule: the dish must start and end with the same letters as the animal's name. For example, the great blue heron is bringing garlic naan and the chickadee is bringing chocolate cake.
// Write a function feast that takes the animal's name and dish as arguments and returns true or false to indicate whether the beast is allowed to bring the dish to the feast.
// Assume that beast and dish are always lowercase strings, and that each has at least two letters. beast and dish may contain hyphens and spaces, but these will not appear at the beginning or end of the string. They will not contain numerals.
// solusi
function feast($beast, $dish)
{
    return substr($beast, -1) == substr($dish, -1) && $beast[0] == $dish[0] ? true : false;
}

//   kata 2
// Given a non-negative integer, 3 for example, return a string with a murmur: "1 sheep...2 sheep...3 sheep...". Input will always be valid, i.e. no negative integers.
// solusi
function countsheep($num)
{
    $result = "";
    if ($num > 0) {
        for ($i = 1; $i <= $num; $i++) {
            $result .= "$i sheep...";
        }
    }
    return $result;
}

//   kata 3
// Count the number of divisors of a positive integer n.
// 4 --> 3 // we have 3 divisors - 1, 2 and 4
// 5 --> 2 // we have 2 divisors - 1 and 5
// 12 --> 6 // we have 6 divisors - 1, 2, 3, 4, 6 and 12
// 30 --> 8 // we have 8 divisors - 1, 2, 3, 5, 6, 10, 15 and 30
// solusi :
function divisors($n)
{
    $result = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $result += 1;
        }
    }
    return $result;
}

//   kata 4 
// Write a function which takes a number and returns the corresponding ASCII char for that value.
// solusi
function getChar($c)
{
    return chr($c);
}

// kata 5
// Bob is working as a bus driver. However, he has become extremely popular amongst the city's residents. With so many passengers wanting to get aboard his bus, he sometimes has to face the problem of not enough space left on the bus! He wants you to write a simple program telling him if he will be able to fit all the passengers.
// solusi
function enough($cap, $on, $wait) {
    return $on + $wait < $cap ? 0 : $on +$wait-$cap;
  }