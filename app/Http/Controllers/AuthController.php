<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web')->except('do_logout');
    }
    public function index()
    {
        return view('pages.admin.auth.main');
    }
    public function do_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);
        $user = User::where('email',$request->email)->first();
        if($user){
            if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect()->intended('dashboard');
            } else {
                return back()->with('LoginError', 'Password anda salah!'); 
            }
        } else{
            return back()->with('LoginError', 'Email anda belum terdaftar!');
        }
    }
    public function do_logout()
    {
        $user = Auth::guard('web')->user();
        Auth::logout($user);
        return redirect('auth');
    }
}