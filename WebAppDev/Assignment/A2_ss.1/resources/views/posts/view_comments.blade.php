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
          @if(Auth::guest())
          @else
            <div class="col-md-3">
              <li class="dropdown" style="list-style-type:none">
                <a href="#" class="dropdown-toggle navFont" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#F0C305;float:right">Post options <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/home/{{$posts->id}}/edit">Edit post</a></li>
                  <li>
                      <form method="POST" action="/profile/delete/{{$posts->id}}"> 
                        <a style="padding:5px 87px 5px 13px">
                          {{csrf_field()}}
                          {{ method_field('DELETE') }}
                          <input type="submit" value="Delete" class="btn-link">
                        </a>
                      </form>
                  </li>
                </ul>
              </li>
            </div>
          @endif
          <div class="col-md-12">
            <label class="message">{{$posts->message}}</label>
            <br><br>
            <hr id="thinYellow">
          </div>
          <div class="col-md-12">
            @if(Auth::guest())
            @else
              <form method="post" action="/userHome/view_comments/{{$posts->id}}">
                {{csrf_field()}}
                <div class="form-group">
                  <input type="hidden" name="id" value="{{ $posts->id }}">
                  <input type="hidden" name="fullname" value="{{ $posts->fullname }}">
                  <textarea name="message" class="form-control post_form" rows=1 cols=40 placeholder="Add a new comment"></textarea><br>
                  <button type="submit" class="btn greyPur" style="width:20%;margin-left:250px">Post</button>
                  <hr id="thinYellow">
                </div>
              </form>
            @endif
            {{--if there are more than one comment, it will display 'comments' otherwise will just print 'comment'--}}
            <p class="navFont" style="text-align:center;font-size:18px"><strong>>> Comments <<</strong></p>
            @if($comments)
              @foreach($comments as $comment)
                <div class="col-md-12 message" style="margin-bottom:10px">
                  <div class="col-md-10">
                    <label><strong style="color:#373C88">{{$comment->fullname}} says:</strong> {{$comment->message}}</label>
                  </div>
                  @if(Auth::guest())
                  @else
                    <div class="col-md-2">
                      <strong><form method="POST" action="/userHome/view_comments/delete/{{$comment->id}}"> 
                        <a>
                          {{csrf_field()}}
                          {{ method_field('DELETE') }}
                          <input type="submit" value="X" class="btn crossx">
                        </a> 
                      </form></strong>
                    </div>
                  @endif
                </div>
                <br>
              @endforeach
              {{ $comments->links() }}
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