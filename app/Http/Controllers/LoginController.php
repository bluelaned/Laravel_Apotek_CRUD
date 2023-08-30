<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Login;

class LoginController extends Controller
{

    public function register()
    {
        return view('register');
    }
      
    public function register_action(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:login', 
            'password' => 'required',
        ]);

        $user = new Login();
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
    
    public function login(){
        return view('login');
    }
    
    public function login_action(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.index');
        }

        return redirect()->route('login')->with('error', 'Invalid credentials.');
    }
    

    
    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return Redirect('/');
    }
}


