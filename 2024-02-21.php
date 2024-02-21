<?php
// kata 1
// Array.diff
// Your goal in this kata is to implement a difference function, which subtracts one list from another and returns the result.
// solusi :
function arrayDiff($a, $b) {
  
    $result = array_diff($a, $b);
     return array_values($result);
   
   }