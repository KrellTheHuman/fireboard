<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtask extends Model {
    protected $fillable = [
        'task_id',
        'name',
        'description',
        'status',
        'hours_estimate',
        'user_id',
    ];

    public function task() {
        return $this->belongsTo(Task::class);
    }
}
