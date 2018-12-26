<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoardColumn extends Model
{
    protected $table = 'board_columns';

    protected $fillable = ['name', 'project_id'];

    // Relation
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
