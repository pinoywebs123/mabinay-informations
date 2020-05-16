<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	
    public function user_list()
    {
    	$users = User::all();
    	return view('admin.user',compact('users'));
    }

    public function user_lock($id)
    {
    	$user_find = User::findOrFail($id);
    	$user_find->status_id = 0;
    	$user_find->save();
    	return redirect()->back()->with('success','User has been lock successfully!');
    }

    public function user_unlock($id)
    {
    	$user_find = User::findOrFail($id);
    	$user_find->status_id = 1;
    	$user_find->save();
    	return redirect()->back()->with('success','User has been Unlock successfully!');
    }

    public function user_edit(Request $request)
    {
    	$user_find = User::findOrFail($request->id);
    	return response()->json($user_find);
    }
}
