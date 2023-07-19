<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    // Login Checker
    public function loginForm(){
        return view('signup.signup');
    }

    // LOGIN AN ACCOUNT
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:60',
        ],[
            'email.required' => 'Please enter a valid email or phone number.',
            'password.required' => 'Your password must contain between 4 and 60 characters.',
        ]);

        $email = $request->email;
        $password = $request->password;
        $data = User::where('email', $email)->first();

        if ($data) {
            if ($data->email == $email && $data->password == $password) {
                $data->active = true;
                $data->save();
                return redirect('movies');
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
            return view('/signup/step1',compact('email'));
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

    // Logout 
    public function logout(string $id)
    {
        $user = User::find($id);
        $user->active = false;
        $user->save();

        return redirect()->to('/');
    }
    //
}
