<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function subtasks() {
        return $this->hasMany(Subtask::class);
    }
}
