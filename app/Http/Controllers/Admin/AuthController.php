<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $cred = $request->only('email','password');
        $user = User::where('email',$request->email)->first();
        if($user->hasRole('admin'))
        {
            if(Auth::attempt($cred))
            {
                return redirect(route('admin.home'));
            }
        }
        Alert::error('Error', 'You are not Allowed');
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();

        return redirect(route('admin.loginPage'));
    }
}
