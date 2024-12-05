<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Exercise;
use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    protected $redirectTo = '/admin/login';

    public function redirectTo()
    {
        if (auth()->guard('admin')->check()) {
            return '/admin';
        } else {
            return '/admin/login';
        }

    }

    public function register_ad()
    {
        return view('admin.auth.register');
    }

    public function make_admin()
    {
        $data = request()->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admin'],
            'password' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // dd($data);

        $admin = Admin::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
        ]);

        return redirect('/admin/login');
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function signin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        // dd($credentials);

        if (Auth::guard('admin')->attempt($credentials)) {
            $admin = Admin::where('email', $credentials['email'])->first();
            // dd($admin);
            $match = Hash::check($credentials['password'], $admin['password']);
            // dd($match);
            if ($match) {
                $request->session()->regenerate();

                return redirect()->intended('/admin');
                // dd('here');
            }
        } else {
            // dd('wrong email');
            return redirect('/admin/login')->withErrors([
                'email' => 'The provided credentials do not match our records.',
                'password' => 'Incorrect input'
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

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
        // dd(Auth::guard('admin')->check());
        $users = User::count() - 1;
        $exercises = Exercise::count();
        $food = Food::count();
        $logged = User::where('remember_token', 'not null')->get()->count();

        return view('admin.admin', compact('users', 'exercises', 'food', 'logged'));
        // if($this->is_admin()){
        // } else {
        //     return redirect('/');
        // }
    }

    public function list_users()
    {
        $users = User::where('email', '!=', 'admin@admin.com')->get();
        return view('admin.users.list', compact('users'));
        // if($this->is_admin()){    
        // }else{
        //     return redirect('/');
        // }
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
        // if($this->is_admin()){
        //     // dd($user);
        // }else{
        //     return redirect('/');
        // }
    }

    public function delete(User $user)
    {
        // dd($user);
        $user->delete();
        return redirect('/admin/users');
        // if ($this->is_admin()) {
        // } else {
        //     return redirect('/');
        // }
    }
}
