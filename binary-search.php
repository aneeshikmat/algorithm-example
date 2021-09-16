<?php

/**
 * Binary Search Algorithm Example
 * Worst-case run time: O(log n)
 * Log 8 = 3; (Base 2) => (2^3 = 8)
 * 2nees.com
 */

/**
 * @param $list
 * @param $item
 * @return int|null
 */
function binarySearchExample($list, $item)
{
  $lowValue = 0;
  $highValue = count($list) - 1;

  while ($lowValue <= $highValue){
    $mid = floor(($lowValue + $highValue) / 2);
    $guess = $list[$mid];

    if($guess === $item){
      return $mid;
    }else if($guess > $item){
      $highValue = $mid - 1;
    }else {
      $lowValue = $mid + 1;
    }
  }

  return "Not Found!";// return null or something you want...
}

echo "Example 1: " . binarySearchExample([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 0) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 2: " . binarySearchExample([1, 5, 20, 22, 32, 45, 66], 45) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 3: " . binarySearchExample([10, 20, 30], 120) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 4: " . binarySearchExample([5, 6, 123, 1231, 34243, 123012], 123012) . PHP_EOL;
echo "=================================" . PHP_EOL;