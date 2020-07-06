<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;
use App\Post;
use App\PostImage;
use App\Comment;

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
        $posts = Post::orderBy('id','desc')->paginate(5);
    	return view('user.home',compact('posts'));
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
        $data = $request->except('_token');
        $data['user_id'] = Auth::id();

        if(!Session::has('imageList')){
            Post::create($data);
        }else{
            $post = Post::create($data);
            foreach ($request->session()->get('imageList') as $key => $value) {
                $post_image = new PostImage;
                $post_image->post_id = $post->id;  
                $post_image->image   = $value;
                $post_image->save();
            }
             Session::forget('imageList');
        }
        
       return back()->with('success','Post Created Successfully!');
       

       
       
    }

    public function show_post($post_id)
    {
        
        $find_post = Post::find($post_id);
        $comments = Comment::where('post_id', $post_id)->orderBy('id','desc')->get();
        if(!$find_post){
            return redirect()->back()->with('not_found','Post not found');
        }

        return view('user.post',compact('find_post','comments'));
       
    }
    public function create_comment(Request $request,$post_id)
    {
        
        $comment = new Comment;
        $comment->post_id = $post_id;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->back()->with('success','Commented Successfully!');
    }
}
