<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    // Login Checker
    public function loginForm(Request $request)
    {
        if (session('user_logged_in')) {
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

        if ($data) {
            if ($data->email == $email && $data->password == $password) {
                $data->active = true;
                session(['user_logged_in' => true, 'user_id' => 999]);
                $data->save();
                return Redirect::route('movies');
            } else {
                return redirect()->back()->with('erInco', 'alert alert-danger ');
            }
        } else {
            return redirect()->back()->with('erAcc', 'alert alert-danger ');
        }
        return Redirect::route('signup.signin');
    }

    //REGISTER AN ACCOUNT
    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max60',
        ]);
        $email = $request['email'];
        $password = $request['password'];

        if ($email && $password) {
            $input['email'] = $email;
            $input['password'] = $password;
            $input['active'] = true;
            User::create($input);
            return view('/signup/step2');
        } else {
            return redirect()->back()->with('erInco', 'alert alert-warning');
        }
    }

    // Sign Up / Register an account
    public function signup(Request $request)
    {
        $email = $request->email;
        $data = User::where('email', $request->email)->first();
        if ($data && $data->email == $email) {
            return view('');
        } else {
            return view('/signup/step1', compact('email'));
        }
    }

    // Register an account exist
    public function regExist(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $data = User::where('email', $email)->first();
        if ($data && $data->email == $email && $data->password == $password) {
            return redirect('movies');
        } else {
            // return redirect()->to('/signup/password')->with('erInco', 'alert alert-warning');

        }
    }

    // Logout Session
    public function logout(Request $request)
    {
        if ($request->session()->has('user_logged_in')) {
            $request->session()->pull('user_logged_in');
            $request->session()->pull('user_id');
        }
        return Redirect::route('movies.login-form');
    }
}
