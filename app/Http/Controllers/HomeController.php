<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dash()
    {
        $blogs = Blog::all();
        $user = Auth::user();
        $today_user_foods = null;
        $today_user_exercise = null;
        // dd($user);
        if($user){
            $progress = $user->today_progress();
    
            if (!$progress) {
                $progress = $user->create_today_progress();
            }
    
            $today_user_foods = $user->today_user_food()->sum('calories');
            $today_user_exercise = $user->today_user_exercise()->sum('calories');
    
            // dd($today_user_foods, $today_user_exercise);
    
            return view('user.dash', compact('blogs', 'today_user_exercise', 'today_user_foods'),);
        } else {
            return view('user.dash', compact('blogs'));
        }
    }

    public function progress(User $user){
        // dd(auth()->user());
        if(auth()->user()){
            $completed_percentage = ceil($user->today_progress()->progress);
            $today_food = $user->today_food();
            $today_exercises = $user->today_exercise();
            $today_user_foods_sum = $user->today_user_food()->sum('calories');
            $today_user_exercise_sum = $user->today_user_exercise()->sum('calories');
            $today_user_exercise = $user->today_user_exercise();
            $today_user_foods = $user->today_user_food();
            // dd($today_exercises[0], $user->today_user_exercise()[0]);
            return view('user.progress', compact('completed_percentage', 'today_food', 'today_exercises','today_user_exercise', 'today_user_foods', 'today_user_foods_sum', 'today_user_exercise_sum'));
        } else {
            return redirect('/');
        }
    }
}
