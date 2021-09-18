<?php

/**
 * Basic Recursion Example 3
 * Get Count for list Via Recursion
 * 2nees.com
 */

/**
 * @param $list
 * @return int
 */
function countViaRecursion($list): int
{
  if($list === []){
    return 0;
  }

  array_pop($list);
  return 1 + countViaRecursion($list);
}

echo "Example 1: " . countViaRecursion([1, 5, 7, 3, 4]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 2: " . countViaRecursion([10, 20, 30, 40, 50, 80, 90]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 3: " . countViaRecursion([]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 4: " . countViaRecursion([5]) . PHP_EOL;
echo "=================================" . PHP_EOL;