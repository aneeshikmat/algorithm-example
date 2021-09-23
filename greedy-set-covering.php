<?php

/**
 * Greedy Algorithm (Set Covering Example) - Here you will see good result not optimal result
 * You will use this tactic when you cant find the optimal solution since its needed a big time...
 * Worst-case run time: O(n^2)
 * 2nees.com
 */

$neededCities = ["Amman", "Zarqa", "Balqa", "Madaba", "Karak", "Aqaba", "Irbid", "Jerash", "Tafila"];

$stations = [
  "nor" => ["Madaba", "Irbid", "Jerash", "Balqa"],
  "amm" => ["Amman", "Zarqa", "Irbid"],
  "tf" => ["Karak", "Tafila", "Amman", "Madaba"],
  "bel" => ["Amman", "Balqa", "Jerash"],
  "ker" => ["Karak", "Tafila"],
  "aq" => ["Tafila", "Aqaba"],
  "qa" => ["Balqa", "Aqaba", "Jerash"],
];

$goodStations = [];

while (count($neededCities) > 0){
  $bestStation = null;
  $coveredState = [];

  foreach ($stations as $key => $cities){
    $covered = array_intersect($neededCities, $cities);

    if(count($covered) > count($coveredState)){
      $bestStation = $key;
      $coveredState = $covered;
    }

    $neededCities = array_diff($neededCities, $coveredState);

    if(!is_null($bestStation)){
      array_push($goodStations, $bestStation);
      $goodStations = array_unique($goodStations);
    }
  }
}

echo "Example 1: " . PHP_EOL;
print_r($goodStations);
echo PHP_EOL . "=================================" . PHP_EOL;