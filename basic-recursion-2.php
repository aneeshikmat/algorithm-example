<?php

/**
 * Basic Recursion Example 2
 * Do Sum Via Recursion Example
 * 2nees.com
 */

/**
 * @param $list
 * @return int
 */
function sunByRecursion($list): int
{
  if($list === []){
    return 0;
  }

  return array_pop($list) + sunByRecursion($list);
}

echo "Example 1: " . sunByRecursion([1, 5, 7, 3, 4]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 2: " . sunByRecursion([10, 20, 30, 40, 50, 80, 90]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 3: " . sunByRecursion([]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 4: " . sunByRecursion([5]) . PHP_EOL;
echo "=================================" . PHP_EOL;