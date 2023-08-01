<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    // Login Checker
    public function loginForm(Request $request)
    {
        // CHECK SUB
        // $data = User::where('id', session('user_id'))->first();
        if (session('user_logged_in') ) {
            return Redirect::route('movies');
        }
        return view('movies.index');
    }
    public function signIn(Request $request)
    {
        if (session('user_logged_in')) {
            return Redirect::route('movies');
        }
        return view('movies.signin');
    }

    // LOGIN AN ACCOUNT
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:60',
        ], [
            'email.required' => 'Please enter a valid email or phone number.',
            'password.required' => 'Your password must contain between 4 and 60 characters.',
        ]);

        $email = $request->email;
        $password = $request->password;
        $data = User::where('email', $email)->first();

        if ($data && $data->count() >0) {
            $hashed_password = $data->password;
            if ($data->email == $email && Hash::check($password, $hashed_password) && $data->subscription !=true) {
                $data->active = true;
                session(['user_logged_in' => $data->email, 'user_id' => $data->id]);
                $data->save();
                return Redirect::route('movies');
            } else {
                return redirect()->back()->with('errIn', 'Incorrect password. Please try again or you can');
            }
        } else {
            session(['user_temp_in' => $email]);
            return redirect()->back()->with('errAcc', "Sorry, we can't find an account with this email address. Please try again or");
        }
        return Redirect::route('signin');
    }

    // REGISTER FORM
    public function regForm(Request $request)
    {
        $data = User::where('email', session('user_temp_in'));
        if ($data->count() > 0) {
            if(session('user_logged_in') && session('user_password_in')){
                return Redirect::route('movies.login-form');
            }
            return view('movies.signup.password');
        }
        return Redirect::route('movies.login-form');
    }
    //REGISTER AN ACCOUNT
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:60',
        ], [
            'email.required' => 'Please enter a valid email or phone number.',
            'password.required' => 'Your password must contain between 4 and 60 characters.',
        ]);

        $email = $request->email;
        $password = $request->password;
        $hashed_password = Hash::make($password);
        $data = User::where('email', $email)->first();

        if ($data && $data->count() > 0) {
            session(['user_temp_in' => $email]);
            return redirect()->back()->with('errex', 'Looks like that account already exists.<br> Sign into that account or try using a different email.');
        } else {

            $user = User::create([
                'email' => $email,
                'password' => $hashed_password,
                'active' => true,
            ]);

            $id = $user->id;
            session(['user_logged_in' => $email, 'user_id' => $id, 'user_password_in'=>$hashed_password]);
            $request->session()->pull('user_temp_in');
            return Redirect::route('chooseplan');
        }
        return Redirect::route('regForm');
    }

    // Sign Up\In / Register an account
    public function signup(Request $request)
    {
        $email = $request->email;
        $data = User::where('email', $request->email)->first();
        if ($data && $data->email == $email) {
            session(['user_temp_in' => $data->email]);
            return redirect('/password');
        } else {
            session(['user_temp_in' => $email]);
            return redirect('regForm');
        }
    }

    // Register an account exist
    public function regExist(Request $request)
    {
        $email = session('user_temp_in');
        $password = $request->password;
        $data = User::where('email', $email)->first();
        $hashed_password = $data->password;
        if ($data->email == $email && Hash::check($password, $hashed_password) ) {
            // ACCESS TO MOVIES
            session(['user_logged_in' => $data->email, 'user_id' => $data->id]);
            $data->active = true;
            $data->save();
            // SESSION TEMP
            $request->session()->pull('user_temp_in');
            return redirect('movies');
        } else {
            return redirect()->back()->with('erInco', ' ');
        }
    }

    // Logout Session
    public function logout(Request $request)
    {
        $data = User::where('id', session('user_id'))->first();
        $request->session()->pull('user_temp_in');
        if ($request->session()->has('user_logged_in')) {
            $data->active = false;
            $data->save();
            $request->session()->pull('user_logged_in');
            $request->session()->pull('user_id');
        }
        return Redirect::route('movies.login-form');
    }
}
