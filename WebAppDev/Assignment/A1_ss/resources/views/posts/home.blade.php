@extends('layouts.master')

@section('title')
    Skilti :: Speaks 
@endsection

@section('content')
  <div class="container basicFontStyle">
    {{-- Main content section --}}
    <div class="jumbotron basicFontStyle" style="box-shadow: 1px 5px 15px #C3C3C3">
      <div class="row basicFontStyle" >
        
        {{-- Form to add a new post --}}
        <div class="col-md-5">
          <p class="headings" style="text-align:center">>> Create a new post <<</p>
          <hr>
          <form method="post" action="/create_post_action">
            {{csrf_field()}}
            <div class="form-group">
              <input name="username" type="text" class="form-control post_form" placeholder="Username">
            </div>
            <div class="form-group">
              <input name="title_post" type="text" class="form-control post_form" placeholder="Title of post">
            </div>
            <div class="form-group">
              <textarea name="message" class="form-control post_form" rows=5 placeholder="Type your message"></textarea>
            </div>
            <button type="submit" class="btn darkgrey">Post</button>
          </form>  
        </div>
        
        {{-- For: Posts --}}
        <div class="col-md-7">
          @if($posts)
            @foreach($posts as $post)
              <div class="col-md-12 post">
                <div class="col-md-1">
                  <img src="images/S_S_logo.png" alt="Skilti::Speaks icon" class="logo" style="height:45px;width:42px">
                </div>
                <div class="col-md-11" style="padding-left:25px">
                  <label id="title_heading"><strong>{{$post->title_post}}</strong></label><br>
                  <label style="color:#373C88">By:: <u>{{$post->username}}</u></label><br>
                </div>
                <div class="col-md-12">
                  <label class="message">{{$post->message}}</label>
                  <hr id="thinYellow">
                  {{--For: buttons to edit, delete or view comments --}}
                  <table>
                    <tr><th><a href="{{ secure_url("/comments/$post->id") }}" class="links">View comments</a></th></tr>
                  </table> 
                  <table  style="float:right">
                    <tr>
                      <th><a href="{{ url("edit_post/$post->id") }}" class="links">Edit post</a></th>
                      <th><a href="{{ url("delete_post_action/$post->id") }}" class="links_delete">Delete</a></th>
                    </tr>
                  </table>
                </div>
              </div>
            @endforeach
          @else
            No posts found. Add a new post by using the form!
          @endif
        </div>
        
      </div>
    </div>
  </div>

      
@endsection