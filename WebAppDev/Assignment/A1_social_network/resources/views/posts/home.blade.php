@extends('layouts.master')

@section('title')
    Skilti :: Speaks 
@endsection

@section('content')
  <div class="container basicFontStyle">
    {{-- Main content section --}}
    <div class="jumbotron basicFontStyle">
      <div class="row basicFontStyle" >
        
        {{-- Form to add a new post --}}
        <div class="col-md-4">
          <label class="headings">Create a new post!</label>
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
        <div class="col-md-8">
          @if($posts)
            @foreach($posts as $post)
              <div class="col-md-12 post">
                <div class="col-md-12"> {{--Div for: icon and title--}}
                  <img src="images/S_S_logo.png" alt="Skilti::Speaks icon" class="logo" style="height:35px;width:32px">
                  {{$post->title_post}}
                </div>
                {{$post->username}}<br>
                {{$post->message}}
                {{$post->id}}
                <br>
                <div class="col-md-12">{{--For: buttons to edit, delete or view comments --}}
                  <table>
                    <tr>
                      <th><a href="" class="links">View comments (not implemented)</a></th>
                      <th><a href="{{ url('edit_post/$post->id') }}" class="links">Edit</a></th>
                      <th><a href="{{ url('delete_post_action/$post->id') }}" class="links_delete">Delete</a></th>
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

      {{-- Bootstrap core JavaScript --}}
  {{--================================================== --}}
  {{-- Placed at the end of the document so the pages load faster --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection