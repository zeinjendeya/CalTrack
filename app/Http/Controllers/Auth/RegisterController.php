<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Progress;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'age' => 'required',
            'gender' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'goal_weight' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        //1.27 pa active as a standard
        //TEE for men  = 864 − 9.72 × age + PA* × (14.2 × weight + 503 × height)
        //TEE for women  = 387 − 7.31 × age + PA* × (10.9 × weight + 660.7 × height)
        $calorie_goal = 0;
        if($data['gender'] == 'F'){
            $calorie_goal = 387 - 7.31 * $data['age']+ 1.27 * (10.9 * $data['weight'] + 660.7 * $data['height']);
        } else if ($data['gender'] == 'M'){
            $calorie_goal = 864 - 9.72 * $data['age'] + 1.27 * (14.2 * $data['weight'] + 503 * $data['height']);
        }
        // dd($calorie_goal);
        
        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'weight' => $data['weight'],
            'height' => $data['height'],
            'goal_weight' => $data['goal_weight'],
            'calorie_goal' => $calorie_goal
        ]);

        Progress::create([
            'user_id' => $user->id,
            'progress' => 0,
            'reached' => false,
        ]);

        return $user;
    }
}
