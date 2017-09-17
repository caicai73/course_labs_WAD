<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Privacy;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('auth', ['except'=>'home']);
        // $this->middleware('auth', ['except'=>'ER_diagram']);
        // $this->middleware('auth', ['except'=>'assignment_doc']);
        // $this->middleware('auth', ['only'=> array(['userHome'])]);
        // $this->middleware('auth', ['except'=> ['home', 'ER_diagram', 'assignment_doc']]);
        // $this->middleware('auth', ['except' => array(['home', 'extra', 'assignment_doc'])]);
    }
    
    /** 
     * Authenticates what the user sees
     * 
     * If user is not logged in, they will only see the homepage, login, register & documentation
    */
    // public function __construct() {
        // $this->middleware('auth', ['except'=> ['index', 'show']]);
        // $this->middleware('auth', ['only'=> array(['home', '/'])]);
        // $this->middleware('auth', ['except'=> array(['home', 'extra', 'ER_diagram', 'assignment_doc'])]);
    // }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
        
    //     // return view('posts.home');
    //     $posts = Post::orderBy('id', 'desc')->get();
    //     // $count_comments = Comment::select('')->count();
    //     $count_comments = Comment::select('posts', 'comments', 'comments.id', '=', 'post_id')->count();
    //     // $count_comments =  Comment::select('')->where('id', $post_id)->count();
    //     return view('posts.userHome', compact("count_comments"))->with('posts', $posts);
    // }
    
    /**
     * Show the ER diagram.
     *
     * @return \Illuminate\Http\Response
     */
    public function diagram()
    {
        return view('posts.ER_diagram');
    }
    
    /**
     * Show the assignment documentation.
     *
     * @return \Illuminate\Http\Response
     */
    public function document()
    {
        return view('posts.assignment_doc');
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
