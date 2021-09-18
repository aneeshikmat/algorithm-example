<?php

/**
 * Basic Recursion Example 4
 * Get Maximum Number for list Via Recursion
 * 2nees.com
 */

/**
 * Via Recursion with max value
 * @param $list
 * @param $maximumValue
 * @return int|null
 */
function maximumNumberViaRecursion($list, $maximumValue = null): ?int
{
  if($list === []){
    return null;
  }

  $value = array_pop($list);
  if($value > $maximumValue){
    $maximumValue = $value;
  }

  if($list === []){
    return $maximumValue;
  }

  return maximumNumberViaRecursion($list, $maximumValue);
}

/**
 * Via recursion on index without touch list
 * @param $list
 * @param $index
 * @return int|null
 */
function maximumNumberViaRecursionTwo($list, $index = null): ?int
{
  if($list === []){
    return null;
  }

  if ($index === null){
    $index = count($list) - 1;
  }

  if($index === 0){
    return $list[0];
  }

  return max($list[$index], maximumNumberViaRecursionTwo($list, $index - 1));
}

echo "Example 1: " . maximumNumberViaRecursion([1, 5, 7, 3, 4]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 2: " . maximumNumberViaRecursion([10, 20, 30, 40, 50, 80, 90]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 3: " . maximumNumberViaRecursion([]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 4: " . maximumNumberViaRecursion([5]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 5: " . maximumNumberViaRecursion([-30, -105, -15, -99]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 6: " . maximumNumberViaRecursion([0, -1, 1, -2, 22]) . PHP_EOL;
echo "=============Second Approach=====================" . PHP_EOL;
echo "Example 7: " . maximumNumberViaRecursionTwo([1, 5, 7, 3, 4]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 8: " . maximumNumberViaRecursionTwo([10, 20, 30, 40, 50, 80, 90]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 9: " . maximumNumberViaRecursionTwo([]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 10: " . maximumNumberViaRecursionTwo([5]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 11: " . maximumNumberViaRecursionTwo([-30, -105, -15, -99]) . PHP_EOL;
echo "=================================" . PHP_EOL;
echo "Example 12: " . maximumNumberViaRecursionTwo([0, -1, 1, -2, 22]) . PHP_EOL;
echo "=================================" . PHP_EOL;