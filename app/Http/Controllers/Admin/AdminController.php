<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Post;

class AdminController extends Controller
{
    public function home()
    {
    	$posts = Post::orderBy('id','desc')->paginate(5);
    	return view('admin.home',compact('posts'));
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/auth/login')->with('logout','success');
    }

}
