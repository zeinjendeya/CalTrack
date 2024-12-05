<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'food';

    protected $fillable = ['name', 'calories', 'carbs', 'protein', 'fat', 'sugar'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_food', 'food_id', 'user_id');
    }
}
