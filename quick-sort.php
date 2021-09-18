<?php

/**
 * QuickSort Algorithm Example
 * Worst-case run time: O(n^2)
 * Average-case run time: O(n log n) - (when make pivot start from middle nested of first index)
 * 2nees.com
 */

/**
 * Example for Sort ASC
 *
 * @param $list
 * @return array
 */
function simpleQSortExample($list): array
{
  // if count less than 2, then no need to sort
  if(count($list) < 2){
    return $list;
  }

  $pivot = $list[0];
  $lessItems = [];
  $greaterItems = [];

  for ($i = 1; $i < count($list); $i++){
    if($list[$i] <= $pivot){
      $lessItems[] = $list[$i];
    }else {
      $greaterItems[] = $list[$i];
    }
  }

  return array_merge(simpleQSortExample($lessItems), [$pivot], simpleQSortExample($greaterItems));
}

echo "Example: " . implode(", ", simpleQSortExample([10, 5, 18, 3, 2, 15, 17])) . PHP_EOL;
echo "=================================" . PHP_EOL;