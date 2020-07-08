<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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

    public function show_post($post_id)
    {
        $find_post = Post::find($post_id);
        $comments = Comment::where('post_id', $post_id)->orderBy('id','desc')->get();
        if(!$find_post){
            return redirect()->back()->with('not_found','Post not found');
        }

        return view('admin.post',compact('find_post','comments'));
    }

    public function setting()
    {
        return view('admin.setting');
    }

    public function setting_check(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'new_password' => 'required',
            'verify_password' => 'required|same:new_password',
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $user = User::find(Auth::id());
        $user->update(['password' => bcrypt($request->verify_password)]);
        return back()->with('success','Updated Password Successfully!');
    }
}
