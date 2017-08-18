@extends('layouts.master')

@section('title')
    Skilti :: Speaks: Comments 
@endsection

@section('content')
    <div class="container basicFontStyle">
      <!-- Main content section -->
      <div class="jumbotron" style="box-shadow: 1px 5px 15px #C3C3C3">
        <div class="row" >
          <div class="col-md-3"></div>
          <div class="col-md-6 post">
            <div class="col-md-1">
              <img src="{{ URL::asset("images/S_S_logo.png") }}" alt="Skilti::Speaks icon" class="logo" style="height:45px;width:42px">
            </div>
            <div class="col-md-10" style="padding-left:25px">
              <label id="title_heading"><strong>{{$post->title_post}}</strong></label><br>
              <label style="color:#373C88">By:: <u>{{$post->username}}</u></label> 
            </div>
            <div class="col-md-1">
              <li class="dropdown" style="list-style-type:none">
                <a href="#" class="dropdown-toggle navFont" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#F0C305"><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ url("edit_post/$post->id") }}">Edit post</a></li>
                  <li><a href="{{ url("delete_post_action/$post->id") }}">Delete</a></li>
                </ul>
              </li>
            </div>
            <div class="col-md-12">
              <label class="message">{{$post->message}}</label>
              <br>
              <hr id="thinYellow">
            </div>
            <div class="col-md-12">
              <p class="navFont" style="text-align:center;font-size:18px">>> Comments <<</p>
              <form method="post" action="/comments_action" class="form-inline">
                {{csrf_field()}}
                <div class="form-group">
                  <input type="hidden" name="id" value="{{ $post->id }}">
                  <input name="username" type="text" class="form-control post_form" placeholder="Username">
                  <textarea name="message" class="form-control post_form" rows=1 cols=28 placeholder="Type your comment"></textarea>
                </div>
                <button type="submit" class="btn greyPur">Post</button>
                <br>
              </form> 
              <br>
              @if($comments)
                @foreach($comments as $comment)
                  <label class="message"><strong style="color:#373C88">{{$comment->username}} says:</strong> {{$comment->message}}</label><br>
                @endforeach
              @else
                No comments found. Add a new comment by using the form!
              @endif
            </div>
          </div>
        
        </div>
      </div>
    </div>
@endsection