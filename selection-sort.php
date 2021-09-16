<?php

/**
 * Selection Sort Algorithm Example
 * Worst-case run time: O(n^2)
 * 2nees.com
 */

/**
 * Example for Sort ASC
 *
 * @param $list
 * @return array
 */
function selectionSortExample($list): array
{
  for ($i = 0; $i < count($list); $i++){
    for ($j = $i + 1; $j < count($list); $j++){
      if($list[$j] < $list[$i]){// Swipe index
        $min = $list[$j];
        $list[$j] = $list[$i];
        $list[$i] = $min;
      }
    }
  }

  return $list;
}

echo "Example: " . implode(", ", selectionSortExample([10, 5, 18, 3, 2, 15, 17])) . PHP_EOL;
echo "=================================" . PHP_EOL;