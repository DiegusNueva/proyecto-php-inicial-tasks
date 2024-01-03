<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title',
        'color',
        'completed',
    ];
    // tasks
    // protected $table = 'tasks';

    // Constructor Property Promotion
    // public function __construct(
    //     public $title = '',
    //     public $completed = false
    // ) {
    // }

}
