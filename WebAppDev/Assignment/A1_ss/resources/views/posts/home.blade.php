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
                  {{--will check if there are no comments, 1 comment, or more than one comment--}}
                  @if(count_comment($post->id) == 0)
                    <tr><th><a href="{{ secure_url("/view_comments/$post->id") }}" class="links">No comments yet. Add one!</a></th></tr>
                  @elseif(count_comment($post->id) != 1)
                    <tr><th><a href="{{ secure_url("/view_comments/$post->id") }}" class="links">View {{ count_comment($post->id) }} comments</a></th></tr>
                  @else
                    <tr><th><a href="{{ secure_url("/view_comments/$post->id") }}" class="links">View {{ count_comment($post->id) }} comment</a></th></tr>
                  @endif
                </table> 
                <table  style="float:right">
                  <tr>
                    <th><a href="{{ url("edit_post/$post->id/edit") }}" class="links">Edit post</a></th>
                    <th><a href="{{ url("delete_post_action/$post->id") }}" class="links_delete">Delete</a></th>
                  </tr>
                </table>
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