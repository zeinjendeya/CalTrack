<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // public function is_admin()
    // {
    //     if (Auth::user()->email == 'admin@admin.com') {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    public function index()
    {
        // dd('here');
        $foods = Food::all();

        return view('admin.food.index', compact('foods'));
        // if ($this->is_admin()) {
        // } else {
        //     return redirect('/');
        // }
    }

    public function add()
    {
        return view('admin.food.add');
        // if ($this->is_admin()) {
        // } else {
        //     return redirect('/');
        // }
    }

    public function create()
    {
        $data = request()->validate([
            'name' => 'required',
            'calories' => 'required',
            'carbs' => 'required',
            'protein' => 'required',
            'fat' => 'required',
            'sugar' => 'required'
        ]);

        // dd($data);

        Food::create([
            'name' => $data['name'],
            'calories' => $data['calories'],
            'carbs' => $data['carbs'],
            'protein' => $data['protein'],
            'fat' => $data['fat'],
            'sugar' => $data['sugar']
        ]);

        return redirect('/admin/food');
        // if ($this->is_admin()) {
        // } else {
        //     return redirect('/');
        // }
    }

    public function edit(Food $food)
    {
        return view('admin.food.edit', compact('food'));
        // if ($this->is_admin()) {
        // } else {
        //     return redirect('/');
        // }
    }

    public function update(Food $food)
    {
        // dd(request()->all());
        $data = request()->validate([
            'name' => 'required',
            'calories' => 'required',
            'carbs' => 'required',
            'protein' => 'required',
            'fat' => 'required',
            'sugar' => 'required'
        ]);

        $food->update($data);

        return redirect('/admin/food');
        // if ($this->is_admin()) {
        // } else {
        //     return redirect('/');
        // }
    }

    public function delete(Food $food)
    {
        $food->delete();
        return redirect('/admin/food');
        // if ($this->is_admin()) {
        // } else {
        //     return redirect('/');
        // }
    }
}
