<?php

//require __DIR__ . '/../functions.php';
require 'Model.php';

class Task extends Model
{

    protected $table = 'tasks';

    // Constructor Property Promotion
    // public function __construct(
    //     public $title = '',
    //     public $completed = false
    // ) {
    // }

}
