@extends('layouts.master')

@section('title')
    Skilti :: Speaks: View comments 
@endsection

@section('content')
  <div class="container basicFontStyle">
    {{-- Main content section --}}
    <div class="row jumbotron" style="box-shadow: 1px 5px 15px #C3C3C3">
      <div class="col-md-2"></div>
      @if($posts)
        <div class="col-md-8 post">
          <div class="col-md-1">
            <img src="{{ URL::asset("images/S_S_logo.png") }}" alt="Skilti::Speaks icon" class="logo" style="height:45px;width:42px">
          </div>
          <div class="col-md-8" style="padding-left:25px">
            <label id="title_heading"><strong>{{$posts->title_post}}</strong></label><br>
            <label style="color:#373C88">By:: <u>{{$posts->fullname}}</u></label> 
          </div>
          <div class="col-md-3">
            <li class="dropdown" style="list-style-type:none">
              <a href="#" class="dropdown-toggle navFont" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#F0C305;float:right">Post options <span class="caret"></span></a>
              <ul class="dropdown-menu">
                {{--<li><a href="{{ url("edit_post/$post->id/edit") }}">Edit post</a></li>
                <li><a href="{{ url("delete_post_action/$post->id") }}">Delete post</a></li>--}}
              </ul>
            </li>
          </div>
          <div class="col-md-12">
            <label class="message">{{$posts->message}}</label>
            <br>
            <hr id="thinYellow">
          </div>
          <div class="col-md-12">
            {{--if there are more than one comment, it will display 'comments' otherwise will just print 'comment'--}}
            <p class="navFont" style="text-align:center;font-size:18px"><strong>>> Comments <<</strong></p>
            @if($comments)
              @foreach($comments as $comment)
                <div class="message">
                  <label><strong style="color:#373C88">{{$comment->fullname}} says:</strong> {{$comment->message}}</label>
                  <a style="float:right;padding-right:10px" data-toggle="tooltip" data-placement="right" title="Delete" 
                  href="{{ url("delete_comment_action/$comment->id") }}"><button class="btn crossx"><strong>X</strong></button></a>
                </div>
                <br>
              @endforeach
            @else
              <p style="text-align:center;font-size:15px">No comments yet. Add a new comment by using the form above!</p>
            @endif
          </div>
        </div>
      @else
        no post
      @endif
    </div>
  </div>
@endsection