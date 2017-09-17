<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Privacy;
use Auth;

class PostController extends Controller
{
    /** 
     * Authenticates what the user sees
     * 
     * If user is not logged in, they will only see the homepage, login, register & documentation
    */
    public function __construct()
    {
        // $this->middleware('auth', ['except'=>'home']);
        // $this->middleware('auth', ['except'=>'ER_diagram']);
        // $this->middleware('auth', ['except'=>'assignment_doc']);
        // $this->middleware('auth', ['except'=> array(['/','ER_diagram', 'assignment_doc'])]);
        // $this->middleware('auth', ['except'=> ['home', 'ER_diagram', 'assignment_doc']]);
        // $this->middleware('auth', ['except' => array('/', 'ER_diagram', 'assignment_doc', 'register', 'login', )]);
    }
    // public function __construct() {
        // $this->middleware('auth', ['except'=> ['index', 'show']]);
        // $this->middleware('auth', ['only'=> array(['home', '/'])]);
        // $this->middleware('auth', ['except'=> array(['home', 'extra', 'ER_diagram', 'assignment_doc'])]);
    // }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::orderBy('id', 'desc')->get();
        // $count_comments = Comment::select('')->count();
        // $comments = $posts->comments()->with('user')->get();
        $posts = Post::where(['privacy_id' => 1])->orderBy('id', 'desc')->get();
        // $posts = Post::orderBy('id', 'desc')->get();
        $count_comments = Comment::select('posts', 'comments', 'comments.id', '=', 'post_id')->count();
        return view('posts.home', compact("count_comments"))->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.profile')->with('privacys', Privacy::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required|max:255',
            'title_post' => 'required|max:255',
            'message' => 'required|max:255',
            // 'privacy_id' => 'exists:privacy,id'
        ]);
        
        $post = new Post();
        $post->fullname = $request->fullname;
        $this->user_id = $request->user_id;
        $this->privacy_id = $request->privacy_id;
        $post->title_post = $request->title_post; 
        $post->message = $request->message;
        $post->save();
        // dd($post);
        return redirect("/profile/{{$post->id}}");
        // return redirect("/home/{{$post->id}}");
        // return redirect("/profile/{{ Auth::user()->id }}");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if(Auth::user()->id == $id){
        //     $posts = Post::find($id);
        //     return view('posts.profile')->with('posts', $posts);
        // } else {
        //     Auth::logout();
        //     return redirect('login');
        // }
        $posts = Post::find($id);
        return view('posts.profile')->with('posts', $posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit_post')->with('post', $post)->with('privacys', Privacy::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'fullname' => 'required|max:255',
            'title_post' => 'required|max:255',
            'message' => 'required|max:255',
            // 'manufacturer' => 'exists:manufacturers,id'
        ]);
        
        $post = Post::findOrFail($id);
        $post->fullname = $request->fullname;
        $post->title_post = $request->title_post; 
        $post->message = $request->message; 
        $post->save();
        // return redirect("/profile/{{$user->id}}");
        return redirect("/home/{{$post->id}}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return back();
        // return redirect("/profile/{{$user->id}}");
    }
}
