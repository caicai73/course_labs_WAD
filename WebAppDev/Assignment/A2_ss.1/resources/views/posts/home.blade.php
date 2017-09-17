@extends('layouts.master')

@section('title')
    Skilti :: Speaks 
@endsection

@section('content')
  <div class="container basicFontStyle">
    <div class="row">
        
      {{-- Main content section --}}
      <div class="panel panel-default" style="box-shadow: 1px 5px 15px #C3C3C3">
        <div class="panel-heading" style="background-color:#F7E287">
          <h3 style="text-align:center">Timeline</h3>
          <h4 style="text-align:center">Here you can see all public posts</h4>
        </div>
        {{-- For: Public Posts --}}
        <div class="panel-body">
          <div class="col-md-8 col-md-offset-2">
            @if($posts)
              @foreach($posts as $post)
                <div class="col-md-12 post" style="margin-bottom:5px">
                  <div class="col-md-1">
                    <img src="images/S_S_logo.png" alt="Profile Picture" class="logo" style="height:45px;width:42px">
                  </div>
                  <div class="col-md-8" style="padding-left:25px">
                    <label id="title_heading"><strong>{{$post->title_post}}</strong></label><br>
                    <label style="color:#373C88">By:: <u>{{$post->fullname}}</u></label><br>
                  </div>
                  <div class="col-md-3">
                    <li class="dropdown" style="list-style-type:none">
                      <a href="#" class="dropdown-toggle navFont" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#F0C305;float:right">Post options <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/home/{{$post->id}}/edit">Edit post</a></li>
                        <li>
                            <form method="POST" action="/home/{{$post->id}}"> 
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
                  <div class="col-md-12">
                    <label class="message">{{$post->message}}</label>
                    <hr id="thinYellow">
                    {{--For: buttons to edit, delete or view comments --}}
                    <table>
                      {{--will count comments--}}
                      <tr><th><a href="/userHome/view_comments/{{$post->id}}" class="links">View {{$count_comments}} comments</a></th></tr>
                    </table>
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
        
    </div>
  </div>
@endsection