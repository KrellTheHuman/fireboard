<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'description',
        'due_date',
        'contact_name',
        'contact_email',
        'contact_phone',
        'dev_url',
        'live_url',
    ];

    public function short_date() {
        return substr($this->attributes['due_date'], 5, 5);
    }

    public function subtasks() {
        return $this->hasMany(Subtask::class);
    }

    public function subtask_count() {
        return $this->subtasks()->where('task_id', '=', $this->attributes['id'])->count();
    }

    public function subtask_count_completed() {
        return $this->subtasks()->where('task_id', '=', $this->attributes['id'])->where('status', '=', 'completed')->count();
    }
}
