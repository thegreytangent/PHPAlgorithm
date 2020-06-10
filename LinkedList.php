<?php

class Node {
  public $data = null;
  public $next = null;

  public function __construct($data) {
    $this->data = $data;
  }

}

class LinkedList {
  private $firstNode = null;
  private $total = 0;

  public function insert($data)
  {
    $newNode = new Node($data);
    if ($this->firstNode === null) {
        $this->firstNode = $newNode;
    } else {
      $currentNode = $this->firstNode;
      while ($currentNode->next !== null) {
        $currentNode = $currentNode->next;
      }
      $currentNode->next = $newNode;
    }
    // print_r($this);
  }

  public function display()
  {
    $currentNode = $this->firstNode;
    while ($currentNode !== null) {
         echo $currentNode->data . "\n";
        $currentNode = $currentNode->next;
    }
  }


}


$list = new LinkedList();
$list->insert(2);
$list->insert(1);
$list->display();








 ?>
