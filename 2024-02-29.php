<?php
// kata 1
// Jaden Casing Strings
// Your task is to convert strings to how they would be written by Jaden Smith. The strings are actual quotes from Jaden Smith, but they are not capitalized in the same way he originally typed them.
// example :
// Not Jaden-Cased: "How can mirrors be real if our eyes aren't real"
// Jaden-Cased:     "How Can Mirrors Be Real If Our Eyes Aren't Real"
// solusi :
function toJadenCase(string $string): string
{
    return ucwords($string);
}

// kata 2
// bouncing balls
// A child is playing with a ball on the nth floor of a tall building. The height of this floor above ground level, h, is known.

// He drops the ball out of the window. The ball bounces (for example), to two-thirds of its height (a bounce of 0.66).

// His mother looks out of a window 1.5 meters from the ground.

// How many times will the mother see the ball pass in front of her window (including when it's falling and bouncing)?

// Three conditions must be met for a valid experiment:
// Float parameter "h" in meters must be greater than 0
// Float parameter "bounce" must be greater than 0 and less than 1
// Float parameter "window" must be less than h.
// If all three conditions above are fulfilled, return a positive integer, otherwise return -1.

// Note:
// The ball can only be seen if the height of the rebounding ball is strictly greater than the window parameter.

// solusi :
function bouncingBall($h, $bounce, $window)  {
    if($h > 0 && $bounce > 0 && $bounce < 1 && $window < $h){
      $ct = 1;
      while($bounce*$h > $window){
        $ct += 2;
        $h *= $bounce;
      }
      return  $ct;
    }else{
      return -1;
    }
}
?>