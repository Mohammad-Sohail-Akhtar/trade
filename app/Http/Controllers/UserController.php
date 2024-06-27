<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('login');
    }

    public function register( Request $request){
        $user = new User ;
        
        $user->email = $request->email;
        $user->password = hash::make($request->password) ;

        $user->save();
        return redirect()->back()->with('success','User Registered Successfully');


    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard')->with('success', 'Login Successful');
        }
    
        return redirect()->back()->withErrors(['error' => 'Invalid email or password']);
    }



    public function dashboard(){
        return view('dashboard.index');
    }
    public function setting(){
        return view('dashboard.setting');
    }
    
}
