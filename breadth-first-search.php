<?php

/**
 * breadth-first Algorithm Example - Note, This example just to explain how this algorithm its work, but in real project
 ** surly you can improvement inners functionality to do your work as you expect and use function for validate or any other job...
 * Worst-case run time: O(V+E) => V number of node and E number or edges).
 * 2nees.com
 */

/**
 * Simple example to implement bgs
 *
 * @param $graph
 * @param $find
 * @return bool
 */
function breadthFirstSearchExample($graph, $find): bool
{
  $searchedList = []; // If item is already searched, then skip it
  $searchQ = new SplQueue(); // provides the main functionalities of a queue

  // Add first level of graph
  foreach ($graph as $key => $value){
    $searchQ->enqueue($key);
  }
  // reset iterator pointer to be in first index - FIFO
  $searchQ->rewind();

  // While nodes is valid...
  while($searchQ->valid()){
    // pop element in current index, and save value in variable
    $city = $searchQ->dequeue();
    echo $city . PHP_EOL;

    // Check if element is searched before or not...
    if(!in_array($city, $searchedList)){
      print_r($searchQ);// Look here one by one how the array is change...

      // If we found the needed value, then print value and exit...
      if($city === $find){
        echo "City Found: " . $city . PHP_EOL;
        return true;
      }else {
        // If not found, we need to push current value to prevent search again
        array_push($searchedList, $city);
        if(isset($graph[$city])){
          // add all neighbors
          foreach ($graph[$city] as $value){
            $searchQ->enqueue($value);
          }
        }
      }

      // make sure index always in first index
      $searchQ->rewind();
    }else {
      // Just for example, we print this value is visited, so no action...
      echo "!!!!!!!!!!! Its already visited" . PHP_EOL;
    }
  }

  return false;
}

$dataSample = [
    "Zarqa" => ["CT1", "CT2", "CT3"],
    "Amman" => ["CT3", "CT4", "CT5"],
    "Aqaba" => ["CT6", "CT5", "CT8"],
];

echo "Example 1: " . PHP_EOL;
var_dump(breadthFirstSearchExample($dataSample, "Amman"));// will found fast
echo PHP_EOL . "=================================" . PHP_EOL;
echo "Example 2: " . PHP_EOL;
var_dump(breadthFirstSearchExample($dataSample, "CT6"));// nice sample to validate some cases...
echo PHP_EOL . "=================================" . PHP_EOL;
echo "Example 3: " . PHP_EOL;
var_dump(breadthFirstSearchExample($dataSample, "2nees.com"));// Not Found
echo PHP_EOL . "=================================" . PHP_EOL;