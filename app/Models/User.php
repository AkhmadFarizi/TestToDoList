<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'username', 'email'];
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
