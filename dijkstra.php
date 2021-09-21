<?php

/**
 * Dijkstra’s Algorithm Example - Note, This example just to explain how this algorithm its work, but in real project
 ** surly you can improvement inners functionality to do your work as you expect and use function for validate or any other job...
 * Worst-case run time: O(ElogV) V is the number of vertices and E is the total number of edges
 * 2nees.com
 */

class Dijkstra {
  private array $graph;
  private array $parents;
  private array $costs;
  private array $processed;

  // You can write data as you want or pass data direct, its just an example here...
  public function __construct($graphData)
  {
    foreach ($graphData as $node => $neighbors){
      if($node === "start"){
        foreach ($neighbors as $neighbor => $weight){
          $this->costs[$neighbor] = $weight;
          $this->parents[$neighbor] = $node;
        }
      }else if(!isset($this->costs[$node])) {
        $this->costs[$node] = INF;
        $this->parents[$node] = null;
      }
    }

    $this->graph = $graphData;
    $this->processed = [];
  }

  /**
   * This method to Find the lowest-cost node that you haven't processed
   */
  private function dijkstraAlgorithm()
  {
    $node = $this->findLowestCostNode();

    // Keep load until lowest node is null (its mean finish)
    while (!is_null($node)){
      $cost = $this->costs[$node];
      $neighbors = $this->graph[$node];

      foreach ($neighbors as $neighbor => $weight){
        $newCost = $cost + $weight;
        if($this->costs[$neighbor] > $newCost){
          $this->costs[$neighbor] = $newCost;
          $this->parents[$neighbor] = $node;
        }
      }

      array_push($this->processed, $node);
      $node = $this->findLowestCostNode();
    }
  }

  /**
   * This method to return lowest node if we found it
   * @return int|string|null
   */
  private function findLowestCostNode(){
    $lowestCost = INF;
    $lowestCostNode = null;

    foreach ($this->costs as $node => $weight){
      if($weight < $lowestCost && !in_array($node, $this->processed)){
        $lowestCost = $weight;
        $lowestCostNode = $node;
      }
    }

    return $lowestCostNode;
  }

  public function printCost(): array
  {
    $this->dijkstraAlgorithm();

    return [
        $this->costs,
        $this->parents
    ];
  }
}

$data = [
  "start" => ["a" => 6, "b" => 2],
  "a" => ["c" => 5, "d" => 2],
  "b" => ["a" => 7, "c" => 2],
  "c" => ["finish" => 1],
  "d" => ["finish" => 3],
  "finish" => []
];

echo "Example 1: " . PHP_EOL;
// Shortest path weight is: start (2 =>) b (2 =>) c (1 =>) finish and weight is 5
print_r((new Dijkstra($data))->printCost());
echo PHP_EOL . "=================================" . PHP_EOL;