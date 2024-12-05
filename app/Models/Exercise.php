<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $table = 'exercise';

    protected $fillable = ['name', 'calories'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_exercise', 'exercise_id', 'user_id');
    }
}
