@extends('layouts.master')

@section('title')
    Skilti :: Speaks 
@endsection

@section('content')
  <div class="container basicFontStyle">
    {{-- Main content section --}}
    <div class="row jumbotron basicFontStyle" style="box-shadow: 1px 5px 15px #C3C3C3">
      
      {{-- Form to add a new post --}}
      <div class="col-md-5">
        <p class="headings" style="text-align:center"><strong>>> Create a new post <<</strong></p>
        <hr>
        <form method="POST" action="/create_post_action">
          {{csrf_field()}}
          <div class="form-group">
            <input name="username" type="text" class="form-control post_form" placeholder="Username" required>
          </div>
          <div class="form-group">
            <input name="title_post" type="text" class="form-control post_form" placeholder="Title of post" required>
          </div>
          <div class="form-group">
            <textarea name="message" class="form-control post_form" rows=5 placeholder="Type your message" required></textarea>
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
              <div class="col-md-8" style="padding-left:25px">
                <label id="title_heading"><strong>{{$post->title_post}}</strong></label><br>
                <label style="color:#373C88">By:: <u>{{$post->fullname}}</u></label><br>
              </div>
              <div class="col-md-3">
                <li class="dropdown" style="list-style-type:none">
                  <a href="#" class="dropdown-toggle navFont" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#F0C305;float:right">Post options <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ url("edit_post/$post->id/edit") }}">Edit post</a></li>
                    <li><a href="{{ url("delete_post_action/$post->id") }}">Delete</a></li>
                  </ul>
                </li>
              </div>
              <div class="col-md-12">
                <label class="message">{{$post->message}}</label>
                <hr id="thinYellow">
                <br>
              </div>
            </div>
            
          @endforeach
        @else
          No posts found. Add a new post using the form to the left!
        @endif
      </div>
        
    </div>
  </div>
@endsection