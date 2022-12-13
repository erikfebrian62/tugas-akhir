<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_index(){
        return view('auth.login.index');
    }

    public function login_proces(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
           if(Auth::user()->role === 'user') {
            return redirect(Route('users.dashboard'));
           } else {
            return redirect(Route('admin.dashboard'));
           }
        }
        return back()->with('Error', 'email atau password salah!!!');
    }
}
