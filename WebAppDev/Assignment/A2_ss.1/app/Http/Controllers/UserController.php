<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\User;
use App\Privacy;
use Auth;
use DateTime;
use Image;

class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('auth', ['except'=>'home']);
        $this->middleware('auth', ['except'=>'ER_diagram']);
        $this->middleware('auth', ['except'=>'assignment_doc']);
        // $this->middleware('auth', ['only'=> array(['userHome'])]);
        // $this->middleware('auth', ['except'=> ['home', 'ER_diagram', 'assignment_doc']]);
        // $this->middleware('auth', ['except' => array(['home', 'extra', 'assignment_doc'])]);
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $posts = Post::orderBy('id', 'desc')->get();
        $posts = Post::where(['privacy_id' => 1])->orderBy('id', 'desc')->get();
        // $posts2 = Post::where(['privacy_id' => 1])->get();
        // $count_comments = Comment::select('posts.id', '=', 'comments.post_id' && 'posts.id', '=', '?')->count();
        $count_comments = Comment::select('posts', 'comments', 'comments.id', '=', 'post_id')->count();
        return view('posts.userHome', array('user' => Auth::user()), compact("count_comments"))->with('posts', $posts);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        // if(Auth::user()->id == $id){
        //     $posts = Post::orderBy('id', 'desc')->get();
        //     $count_comments = Comment::select('')->count();
        //     return view('posts.profile', array('user' => Auth::user()), compact("count_comments"))->with('posts', $posts)->with('privacys', Privacy::all());
        // } else {
        //     Auth::logout();
        //     return redirect('login');
        // }	
        $users = User::find($id);
        $posts = Post::where(['fullname' => ($users->fullname)])->orderBy('id', 'desc')->get();
        // $posts = Post::orderBy('id', 'desc')->get();
        $count_comments = Comment::select('')->count();
        return view('posts.profile', array('users' => Auth::user()), compact("count_comments"))->with('posts', $posts)->with('privacys', Privacy::all());
    }
    
    /**
     * Show the Friends List.
     *
     * @return \Illuminate\Http\Response
     */
    public function friends($id)
    {
        // if(Auth::user()->id == $id){
        //     // $users = User::find($id);
        //     $users = User::all();
        //     return view('posts.friends')->with ('users', $users);
        // } else {
        //     Auth::logout();
        //     return redirect('login');
        // }
        $users = User::all();
        return view('posts.friends')->with ('users', $users);
    }
    
    public function update_profile(Request $request)
    {
        if($request->hasFile('profImg')){
            $profImg = $request->file('profImg');
            $filename = time() . '.' . $profImg->getClientOriginalExtension();
            Image::make($profImg)->resize(300, 300)->save( public_path('/images/profile/' . $filename)); 
            
            $user = Auth::user();  //authenticates the user to uplaod files.
            $user->profImg = $filename; 
            $user->save();
            
        }
        
        //refreshes and shows the profile page after image is uploaded
         return view('/profile/{{$user->id}}', array('user' => Auth::user()));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function age($id)
    {
        // $user = User::find($id);
        // dd($user);
        // $dob = new DateTime($birth);
        // $now_date = new DateTime;
        // $interval = $dob->diff($now_date); // $interval is a DateInterval
    }
    
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('posts.friends')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
