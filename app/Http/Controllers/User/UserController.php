<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    
    public function home()
    {
    	return view('user.home');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/auth/login')->with('logout','success');
    }

    public function message()
    {
    	return view('user.inbox');
    }
}
