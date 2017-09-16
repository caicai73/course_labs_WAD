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
        <form method="POST" action="/home">
          {{csrf_field()}}
          
          <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
            <input name="fullname" type="text" class="form-control post_form" placeholder="Fullname" value="{{old('fullname')}}">
            
            @if ($errors->has('fullname'))
              <label class="errorInput">{{$errors->first('fullname')}}</label>
            @endif
          </div>
          
          <div class="form-group{{ $errors->has('title_post') ? ' has-error' : '' }}">
            <input name="title_post" type="text" class="form-control post_form" value="{{old('title_post')}}" placeholder="Title of post">
              
            @if ($errors->has('title_post'))
              <label class="errorInput">{{$errors->first('title_post')}}</label>
            @endif
          </div>
          
          <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
            <textarea name="message" class="form-control post_form" rows=5 placeholder="Type your message" value="{{old('message')}}"></textarea>
            
            @if ($errors->has('message'))
              <label class="errorInput">{{$errors->first('message')}}</label>
            @endif
          </div>
          
          <button type="submit" value="Create" class="btn darkgrey">Post</button>
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
                  <tr><th><a href="/home/view_comments/{{$post->id}}" class="links">View {{$count_comments}} comments</a></th></tr>
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
@endsection