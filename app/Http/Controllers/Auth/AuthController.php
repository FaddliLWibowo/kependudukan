<?php

namespace App\Http\Controllers\Auth;

<<<<<<< HEAD
use App\Domain\Entities\User;
=======
<<<<<<< HEAD
use App\Domain\Entities\User;
=======
use App\User;
>>>>>>> da70df9879aaf16d5720abd9a8f2f231256eaabb
>>>>>>> origin/master
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Contracts\Auth\Guard     $auth
     * @param  \Illuminate\Contracts\Auth\Registrar $registrar
     *
=======
<<<<<<< HEAD
     * @param  \Illuminate\Contracts\Auth\Guard     $auth
     * @param  \Illuminate\Contracts\Auth\Registrar $registrar
     *
=======
     * @param  \Illuminate\Contracts\Auth\Guard  $auth
     * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
>>>>>>> da70df9879aaf16d5720abd9a8f2f231256eaabb
>>>>>>> origin/master
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
<<<<<<< HEAD
     * @param  array $data
     *
=======
<<<<<<< HEAD
     * @param  array $data
     *
=======
     * @param  array  $data
>>>>>>> da70df9879aaf16d5720abd9a8f2f231256eaabb
>>>>>>> origin/master
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        return Validator::make($data, [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
<<<<<<< HEAD
=======
=======
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            ]);
>>>>>>> da70df9879aaf16d5720abd9a8f2f231256eaabb
>>>>>>> origin/master
    }

    /**
     * Create a new user instance after a valid registration.
     *
<<<<<<< HEAD
     * @param  array $data
     *
=======
<<<<<<< HEAD
     * @param  array $data
     *
=======
     * @param  array  $data
>>>>>>> da70df9879aaf16d5720abd9a8f2f231256eaabb
>>>>>>> origin/master
     * @return User
     */
    public function create(array $data)
    {
        return User::create([
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
<<<<<<< HEAD
=======
=======
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            ]);
>>>>>>> da70df9879aaf16d5720abd9a8f2f231256eaabb
>>>>>>> origin/master
    }
}
