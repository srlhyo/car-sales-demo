<?php
require 'functions.php';


class Task
{
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

    public function isComplete()
    {
        return $this->completed;
    }
}

//constructed the object
// $task = new Task('go to the dentist');

// you did something and completed the task
// $task->complete();

// now the task is done
// dd($task->isComplete());


$tasks = [
    new Task('go to the dentist'),
    new Task('pay your bills'),
    new Task('watch tv'),
    new Task('call your mum')
];

$tasks[2]->complete();


require 'index.view.php';