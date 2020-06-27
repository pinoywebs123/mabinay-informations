<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
   
    public $imageArr;
    public $atay;

    public function __construct()
    {
        $this->imageArr = array();
        $this->atay = array();

    }
   
    
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

    public function newsfeed(Request $request)
    {

        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);


       
        if(Session::has('imageList')) {
            Session::push('imageList', $imageName);
        } else {
            Session::put('imageList', array($imageName));
        }


   
        return response()->json(['success'=>$imageName]);
        
    }

    public function newsfeed_content(Request $request)
    {
        //return Session::forget('imageList');
        if(!Session::has('imageList')){
            return 'no images';
        }
        foreach ($request->session()->get('imageList') as $key => $value) {
            echo $value;
        }
        Session::forget('imageList');
       

       
       
    }
}
