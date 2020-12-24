<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\Facades\Hashids;
use App\Referral;

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
    protected $redirectTo = '/dashboard';

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

    public function showRegistrationForm(Request $request)
    {
        if ($request->has('ref')) {
            session(['referrer' => $request->query('ref')]);
        }
        return view('auth.register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255',],
            'username' => ['required', 'string', 'max:255', 'unique:users', 'alpha_dash'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $parent = User::where('name', session()->pull('referrer'))->first();
        // Create user
        $user = User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'profile_pic' => null,
            'parent_id' => $parent ? $parent->id : null,
            'password' => Hash::make($data['password']),
        ]);

        // get the parent of the user
        // get the siblings of the user
      $siblings = $user->siblings($user);

        if (!$siblings->isEmpty()) {
            // get total siblings
           $totalSiblings = $siblings->count();
            // get the last siblings level
            $lastSibling = $siblings->last();
            $level = $lastSibling->level;

            if ($totalSiblings >= 1 && $totalSiblings <= 3) {
                $user->level = $level;
                $user->save();
            }

            if ($totalSiblings == 3) {
                $user->level = ++$level;
                $user->save();
            }
            
        }

        if ($siblings->isEmpty()) {
            $users = User::all()->count();
            if ($users <= 2) {
                $user->level = null;
                $user->save();
            } else{
                $user->level = 1;
                $user->save();
            }
        }

        $wallet = Wallet::create([
            'user_id' => $user->id,
            'investment_plan_id' => '0'
        ]);

        if ($parent != null) {
            Referral::create([
                'user_id' => $user->id,
                'referral_link' => 'http://www.cleverfxinvestor.com/register?ref=' . $user->name,
            ]);
        } else {
            Referral::create([
                'user_id' => $user->id,
                'referral_link' => 'http://www.cleverfxinvestor.com/register?ref=' . $user->name,
            ]);
        }


        return $user;
    }
}