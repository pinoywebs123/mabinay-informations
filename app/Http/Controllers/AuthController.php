<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function home()
    {
        if(!Auth::user()){
           return view('welcome');
        }else{
            
            if(Auth::user()->roles[0]['name'] == 'Admin'){
                return redirect()->route('admin_home');
            }else if(Auth::user()->roles[0]['name'] == 'User'){
                return redirect()->route('user_home');
            }
        }
    }
    public function login()
    {
        if(!Auth::user()){
           return view('member.login');
        }else{
            
            if(Auth::user()->roles[0]['name'] == 'Admin'){
                return redirect()->route('admin_home');
            }else if(Auth::user()->roles[0]['name'] == 'User'){
                return redirect()->route('user_home');
            }
        }

    	
    }


    public function loginCheck(Request $request)
    {
        
        
    	$data =$request->except('_token');
    	if(!Auth::attempt($data)){
            Session::forget('banned');
    		return redirect()->back()->with('invalid','invalid');
    	}else{
            
             if(Auth::user()->status_id == 0){
                Session::put('banned', 'User account has been locked');

               return redirect()->back();

              
            }
            Session::forget('banned');
            if(Auth::user()->roles[0]['name'] == 'Admin'){
                    return redirect()->route('admin_home');
                }else if(Auth::user()->roles[0]['name'] == 'User'){
                    return redirect()->route('user_home');
            }
    		
    	}
    }

    public function register()
    {
        return view('member.register');
    }

    public function registerCheck(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->status_id = 1;
        $user->password = bcrypt($request->password);
        $user->save();

        DB::table('role_user')->insert([
            'role_id'       => 2,
            'user_id'       => $user->id
        ]);
       
        
        return redirect('/auth/login')->with('register','success');
    }
}
