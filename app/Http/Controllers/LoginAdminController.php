<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginAdminController extends Controller
{
    //
    public function loginForm()
    {
        return view('admin.loginform');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->username;
        $password = $request->password;
        $admin = Admin::where('username', $username)->first();
        // $admin = Admin::all();
        if($admin && $admin->username == $username && $admin->password == $password){
            session(['admin_logged_in'=>true, 'admin_id'=>123]);
            return Redirect::route('admin.dashboard');
        }
        return Redirect::route('admin.login-form');

    }

    public function logout(Request $request)
    {
        if($request->session()->has('admin_logged_in')){
            $request->session()->pull('admin_logged_in');
            $request->session()->pull('admin_id');
        }
        return Redirect::route('admin.login-form');        
    }
}
