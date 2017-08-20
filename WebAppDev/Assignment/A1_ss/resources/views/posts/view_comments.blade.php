@extends('layouts.master')

@section('title')
    Skilti :: Speaks: View comments 
@endsection

@section('content')
    <div class="container basicFontStyle">
      {{-- Main content section --}}
      <div class="row jumbotron" style="box-shadow: 1px 5px 15px #C3C3C3">
        <div class="col-md-2"></div>
        <div class="col-md-8 post">
          <div class="col-md-1">
            <img src="{{ URL::asset("images/S_S_logo.png") }}" alt="Skilti::Speaks icon" class="logo" style="height:45px;width:42px">
          </div>
          <div class="col-md-8" style="padding-left:25px">
            <label id="title_heading"><strong>{{$post->title_post}}</strong></label><br>
            <label style="color:#373C88">By:: <u>{{$post->username}}</u></label> 
          </div>
          <div class="col-md-3">
            <li class="dropdown" style="list-style-type:none">
              <a href="#" class="dropdown-toggle navFont" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#F0C305;float:right">Post options <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url("edit_post/$post->id/edit") }}">Edit post</a></li>
                <li><a href="{{ url("delete_post_action/$post->id") }}">Delete post</a></li>
              </ul>
            </li>
          </div>
          <div class="col-md-12">
            <label class="message">{{$post->message}}</label>
            <br>
            <hr id="thinYellow">
          </div>
          <div class="col-md-12">
            <form method="post" action="/view_comments_action" class="form-inline">
              {{csrf_field()}}
              <div class="form-group">
                <input type="hidden" name="id" value="{{ $post->id }}">
                <input name="username" type="text" class="form-control post_form" placeholder="Username" required>
                <textarea name="message" class="form-control post_form" rows=1 cols=50 placeholder="Add a new comment" required></textarea>
              </div>
              <button type="submit" class="btn greyPur">Post</button>
              <br>
            </form>
            <br>
            {{--if there are more than one comment, it will display 'comments' otherwise will just print 'comment'--}}
            @if(count_comment($post->id) != 1)
              <p class="navFont" style="text-align:center;font-size:18px"><strong>>> {{ count_comment($post->id) }} Comments <<</strong></p>
            @else
              <p class="navFont" style="text-align:center;font-size:18px"><strong>>> {{ count_comment($post->id) }} Comment <<</strong></p>
            @endif
            @if($comments)
              @foreach($comments as $comment)
                <div class="message">
                  <label><strong style="color:#373C88">{{$comment->username}} says:</strong> {{$comment->message}}</label>
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
        
      </div>
    </div>
@endsection