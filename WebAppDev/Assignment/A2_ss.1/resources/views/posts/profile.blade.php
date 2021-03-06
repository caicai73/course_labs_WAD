@extends('layouts.master')

@section('title')
    Skilti :: Speaks : Profile
@endsection

@section('content')
  <div class="container basicFontStyle">
    {{-- Main content section --}}
    <div class="row" >
      
      <div class="panel panel-default" style="box-shadow: 1px 5px 15px #C3C3C3">
        <div class="panel-heading" style="background-color:#666666;color:white">
          <h3 style="text-align:center">{{ Auth::user()->fullname }}'s Profile</h3>
        </div>
        <div class="panel-body">
          <div class="col-md-3 col-md-offset-1">
            <img src="/images/profile/cleo.png" style="width:150px; height:150px; float:right; border-radius:50%; margin-left:25px">
          </div>
          <div class="col-md-6">
            <br>
            <table style="font-size:18px;margin-left:40px">
              <tr>
                <td style="float:right">Fullname: </td>
                <td style="text-align:left">{{ Auth::user()->fullname }}</td>
              </tr>
              <tr>
                <td style="float:right">E-Mail Address: </td>
                <td style="text-align:left">{{ Auth::user()->email }}</td>
              </tr>
              <tr>
                <td style="float:right">Birthday: </td>
                <td style="text-align:left">{{ Auth::user()->dob }}</td>
                {{--<!--<td>{{ Auth::user()->age }}</td>-->--}}
                {{--<td>{{ $user->age() }} </td>--}}
                {{--<!--<td>\Carbon\Carbon::parse($user->dob)->diff(\Carbon\Carbon::now())->format('%y years');</td>-->--}}
              </tr>
            </table>
          </div>
          <div class="col-md-2">
              <a href="#"><button class="btn darkgrey">Add Friend</button></a><br>
              <a href="/friends/{{ Auth::user()->id }}"><button class="btn darkgrey">{{ Auth::user()->fullname }}'s Friend List</button></a>
              <br>
              <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="/profile/{{ Auth::user()->id}}">
                <div class="form-group">
                    <label>Upload a profile picture!</label>
                    <input type="file" name="profImg">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
                    <button type="submit" class="btn darkgrey">Upload Image</button></a><br>
                </div>
              </form>
          </div>
        </div>
      </div>
      
      <div class="panel panel-default" style="box-shadow: 1px 5px 15px #C3C3C3">
        <div class="panel-heading" style="background-color:#F7E287">
          <!--<h4 style="text-align:center">Here you can see public posts, posts from your friends and your private posts.</h4>-->
        </div>
        <div class="panel-body">
          {{-- Form to add a new post --}}
          <div class="col-md-5">
            <p class="headings" style="text-align:center"><strong>Create a new post</strong></p>
            <hr>
            <form method="POST" action="/profile/{{ Auth::user()->id}}">
              {{csrf_field()}}
              
              <input type="hidden" name="fullname" value="{{ Auth::user()->fullname }}"> 
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> 
              
              {{--<div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
                <input name="fullname" type="text" class="form-control post_form" placeholder="Fullname" value="{{old('fullname')}}">
                
                @if ($errors->has('fullname'))
                  <label class="errorInput">{{$errors->first('fullname')}}</label>
                @endif
              </div>--}}
              
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
              
              <p><select name="privacy_id" style="padding:10px">
                @foreach ($privacys as $privacy)
                    @if($privacy->id == old('privacy'))
                        <option value="{{$privacy->id}}" selected="selected">{{$privacy->name}}</option> 
                    @else
                        <option value="{{$privacy->id}}">{{$privacy->name}}</option>
                    @endif
                @endforeach
              </select></p>
              
              <div class="form-group">
                  <div class="col-md-4 col-md-offset-4">
                      <button type="submit" value="Create" class="btn darkgrey">
                          Post
                      </button>
                  </div>
              </div>
            </form>  
          </div>
          
          {{-- For: Posts --}}
          <div class="col-md-7">
            @if($posts)
              @foreach($posts as $post)
                <div class="col-md-12 post">
                  <div class="col-md-1">
                    <img src="images/profile/default.png" alt="Profile picture" class="logo" style="height:45px;width:45px">
                  </div>
                  <div class="col-md-8" style="padding-left:25px">
                    <label id="title_heading"><strong>{{ $post->title_post}}</strong></label><br>
                    <label style="color:#373C88">By:: <u>{{ $post->fullname }}</u></label><br>
                  </div>
                  <div class="col-md-3">
                    <li class="dropdown" style="list-style-type:none">
                      <a href="#" class="dropdown-toggle navFont" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#F0C305;float:right">Post options <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/home/{{$post->id}}/edit">Edit post</a></li>
                        <li>
                            <form method="POST" action="/profile/delete/{{$post->id}}"> 
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
@endsection