<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoModel extends Model
{
    use HasFactory;
    protected $table="todo_models";
    protected $fillable = [
        'todo',
        "created_at",
        "updated_at",
    ];
}
