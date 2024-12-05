<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExerciseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function is_admin()
    {
        if (Auth::user()->email == 'admin@admin.com') {
            return true;
        } else {
            return false;
        }
    }

    // public function index()
    // {
    //     if($this->is_admin()){
    //         $exercises = Exercise::all();
    
    //         return view('admin.exercise.index', compact('exercises'));
    //     } else {
    //         return redirect('/');
    //     }
    // }

    public function add()
    {
        return view('admin.exercise.add');
        // if($this->is_admin()){
        // } else {
        //     return redirect('/');
        // }   
    }

    public function create()
    {
        $data = request()->validate([
            'name' => 'required',
            'calories' => 'required',
        ]);

        // dd($data);

        Exercise::create([
            'name' => $data['name'],
            'calories' => $data['calories'],
        ]);

        return redirect('/admin/exercise');
        // if($this->is_admin()){
        // } else {
        //     return redirect('/');
        // }
    }

    public function edit(Exercise $exercise)
    {
        return view('admin.exercise.edit', compact('exercise'));
        // if($this->is_admin()){
        // } else {
        //     return redirect('/');
        // }
    }

    public function update(Exercise $food)
    {
        // dd(request()->all());
        $data = request()->validate([
            'name' => 'required',
            'calories' => 'required',
        ]);

        $food->update($data);

        return redirect('/admin/exercise');
        // if($this->is_admin()){
        // } else {
        //     return redirect('/');
        // }
    }

    public function delete(Exercise $exercise)
    {
        // dd($exercise);
        $exercise->delete();
        return redirect('/admin/exercise');
        // if($this->is_admin()){
        // } else {
        //     return redirect('/');
        // }
    }
}
