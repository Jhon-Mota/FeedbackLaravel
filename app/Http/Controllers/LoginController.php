<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function index() {
        return view('login');
    }

    public function loginProcess(LoginRequest $request) {
        
    

        $authenticated = Auth::attempt(['email' => $request->email, 
        'password' => $request->password]);

        if(!$authenticated) {
            back()->with('error', 'E-mail ou senha inválidos!');
        }

    }

}
