<?php

namespace App;

// App

// Laravel
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = ['name', 'started_at'];

    // Relation
    public function client()
    {
        return $this->belongsToMany(Client::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function columns()
    {
        return $this->hasMany(BoardColumn::class);
    }
}
