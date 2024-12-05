<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function profile(User $user)
    {
        return view('user.profile', compact('user'));
    }

    public function edit(User $user)
    {

        return view('user.edit_profile', compact('user'));
    }

    public function update(User $user)
    {
        $data =  request()->validate([
            'age' => 'required',
            'gender' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'goal_weight' => 'required',
            'calorie_goal' => ''
        ]);

        if ($data['calorie_goal'] == $user->calorie_goal) {
            if ($data['gender'] == 'F') {
                $data['calorie_goal'] = 387 - 7.31 * $data['age'] + 1.27 * (10.9 * $data['weight'] + 660.7 * $data['height']);
            } else if ($data['gender'] == 'M') {
                $data['calorie_goal'] = 864 - 9.72 * $data['age'] + 1.27 * (14.2 * $data['weight'] + 503 * $data['height']);
            } else {
                $data['calorie_goal'] = 0;
            }
        }

        $user->update($data);

        return redirect('/profile/' . $user->id);
    }

    public function list_food(User $user)
    {
        $foods = Food::all();
        return view('user.food.list', compact('foods', 'user'));
    }

    public function add_amounts(User $user)
    {
        $data = request()->all();
        $foods = Food::whereIn('id', $data['selected_foods'])->get();

        return view('user.food.amount', compact('user', 'foods'));
    }

    public function food_process(User $user)
    {
        $data = request()->all();
        $calories = 0;

        foreach ($data['amounts'] as $key => $value) {
            $food_item = Food::where('id', '=', $key)->first();
            DB::table('user_food')->insert([
                'user_id' => $user->id,
                'food_id' => $key,
                'calories' => $value * $food_item->calories,
                'created_at' => now()
            ]);


            $calories += ($value * $food_item->calories);
        }

        $progress = $user->today_progress();

        $exercise_burnt_cals = $user->today_user_exercise()->sum('calories');

        $new_progress = (($calories - $exercise_burnt_cals) / Auth::user()->calorie_goal) * 100;
        $progress->update([
            'user_id' => $user->id,
            'progress' => $new_progress,
            'reached' => $new_progress == 100 ? true : false,
        ]);
        return redirect('/' . $user->id . '/food');
    }

    public function list_exercise(User $user)
    {
        $exercises = Exercise::all();
        return view('user.exercise.list', compact('exercises', 'user'));
    }

    public function add_time(User $user)
    {
        $data = request()->all();
        // dd($data);
        $exercises = Exercise::whereIn('id', $data['selected_exercises'])->get();

        return view('user.exercise.time', compact('user', 'exercises'));
    }

    public function exercise_process(User $user)
    {
        $data = request()->all();
        $calories = 0;

        foreach ($data['times'] as $key => $value) {
            $exercise = Exercise::where('id', '=', $key)->first();
            DB::table('user_exercise')->insert([
                'user_id' => $user->id,
                'exercise_id' => $key,
                'calories' => $value * $exercise->calories,
                'created_at' => now()
            ]);


            $calories += ($value * $exercise->calories);
        }

        $progress = $user->today_progress();

        $food_calories = $user->today_user_food()->sum('calories');
        

        $new_progress = (($food_calories - $calories) / Auth::user()->calorie_goal) * 100;
        $progress->update([
            'user_id' => $user->id,
            'progress' => $new_progress,
            'reached' => $new_progress == 100 ? true : false,
        ]);
        return redirect('/' . $user->id . '/exercise');
    }
}
