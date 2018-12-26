<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = ['title', 'content', 'user_id', 'project_id', 'due_at', 'status', 'board_column_id'];

    // Relation

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function column()
    {
        return $this->belongsTo(BoardColumn::class);
    }
}
