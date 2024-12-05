<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'age',
        'gender',
        'goal_weight',
        'weight',
        'height',
        'calorie_goal'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function food()
    {
        return $this->belongsToMany(Food::class, 'user_food', 'user_id', 'food_id');
    }

    public function exercise()
    {
        return $this->belongsToMany(Exercise::class, 'user_exercise', 'user_id', 'exercise_id');
    }

    function progress()
    {
        return $this->hasMany(Progress::class);
    }

    public function today_progress()
    {
        return $this->progress()->whereDate('created_at', today())->first();
    }

    public function create_today_progress()
    {
        return $this->progress()->create([
            'user_id' => $this->id,
            'progress' => 0,
            'reached' => false,
            'created_at' => now(),
            // Add other progress attributes here
        ]);
    }

    public function today_food()
    {
        return $this->belongsToMany(Food::class, 'user_food')->whereDate('user_food.created_at', today())->get();
    }

    public function today_exercise()
    {
        return $this->belongsToMany(Exercise::class, 'user_exercise')->whereDate('user_exercise.created_at', today())->get();
    }

    public function today_user_food()
    {
        return DB::table('user_food')->select('food_id', 'calories')->where('user_id', $this->id)->whereDate('created_at', today())->get();
        // return $this->belongsToMany(Food::class, 'user_food')->whereDate('user_food.created_at', today())->get();
    }

    public function today_user_exercise()
    {
        return DB::table('user_exercise')->select('exercise_id', 'calories')->where('user_id', $this->id)->whereDate('created_at', today())->get();
    }
}
