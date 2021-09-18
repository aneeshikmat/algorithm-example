<?php

/**
 * Basic Recursion Example
 * Factorial Example: O(n)
 * 2nees.com
 */

/**
 * @param $number
 * @return int|null
 */
function factorial($number)
{
  if($number === 1){
    return 1;
  }

  return $number * factorial($number - 1);
}

echo "Example 1: " . factorial(3) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 2: " . factorial(5) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 3: " . factorial(10) . PHP_EOL;
echo "=================================" . PHP_EOL;