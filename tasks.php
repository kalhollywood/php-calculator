<?php


class Task {
  public $description;

  public $completed = false;

  public function __construct($description)
  {
  $this->description = $description;
  }
  public function complete()
  {
    $this->completed = true;
  }

  public function isComplete() {
    return $this->completed;
  }
  public function description() {
    return $this->description;
  }
}

$tasks = [
  new Task('Go to the store'),
  new Task('Finish tutorial'),
  new Task('Clean my room')
];

$tasks[0]->complete();



 // require 'index.view.php';
