<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function __construct()
    {
       // $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        return view('backend.login');
    }
    public function check(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('email',$request->email)->first();


        if (auth()->attempt($credentials)) {

            return redirect()->route('addProduct');

        }else{
            session()->flash('error', 'Invalid credentials');
            return redirect()->back();
        }
    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route('login');
    }
}