<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerificationController extends Controller
{
    public function notice(){
        return view('auth.verify.index');
    }


    public function verify(EmailVerificationRequest $request){
        $request->fulfill();
        return redirect(route('dashboard'))->with('notice', 'Verifikasi berhasil:)');
    }       

    public function send(Request $request){
        $request->user()->sendEmailVerificationNotification();

        return back()->with('notif', 'Verification berhasil dikirim ulang.');
    }
}
