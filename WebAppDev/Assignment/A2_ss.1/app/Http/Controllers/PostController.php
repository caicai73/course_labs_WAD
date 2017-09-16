<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostController extends Controller
{
    
    // public function __construct() {
    //     // $this->middleware('auth', ['except'=> ['index', 'show']]);
    //     $this->middleware('auth', ['except'=> array(['index', 'show'])]);
    // }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::orderBy('id', 'desc')->get();
        $count_comments = Comment::select('')->count();
        return view('posts.home', compact("count_comments"))->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.home');
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
            // 'manufacturer' => 'exists:manufacturers,id'
        ]);
        
        $post = new Post();
        $post->fullname = $request->fullname;
        $post->title_post = $request->title_post; 
        $post->message = $request->message;
        $post->save();
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('posts.home')->with('posts', $posts);
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
        return view('posts.edit_post')->with('post', $post);
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
        return redirect("/home");
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
        return redirect("/home");
    }
}
