<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Gate;
use Symfony\Component\HttpFoundation\Response;
class LoginController extends Controller
{
    public function LoginView(){
        return view('admin.pages.login');
    }
    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'username' =>'required',
            'password' =>'required|min:4',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors(['authentication_message' => 'Email and password is required.']);

        }
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {

            return redirect()->intended('/dashboard');
        } else {
            return redirect()->back()->withInput()->withErrors(['authentication_message' => 'Invalid email or password']);
        }







    }
    public function logout()
    {
        Auth::logout();
        return redirect()->intended('/login');

    }


}
