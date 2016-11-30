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

    public function subtasks() {
        return $this->hasMany(Subtask::class);
    }
}
