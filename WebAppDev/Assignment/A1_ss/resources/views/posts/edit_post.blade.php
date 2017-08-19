@extends('layouts.master')

@section('title')
    Skilti :: Speaks: Edit post 
@endsection

@section('content')
    <div class="container basicFontStyle">
      <!-- Main content section -->
      <div class="row jumbotron" style="box-shadow: 1px 5px 15px #C3C3C3">
        <div class="col-md-3"></div>
        <!-- Form to add a new post -->
        <div class="col-md-6 post_section">
          <p class="headings" style="text-align:center"><strong>>> Edit your post <<</strong></p>
          <hr>
          <form method="post" action="/edit_post_action">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{ $post->id }}"> 
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" name="username" class="form-control post_form" value="{{ $post->username }}">
            </div>
            <div class="form-group">
              <label for="title_post">Title:</label>
              <input type="text" name="title_post" class="form-control post_form" value="{{ $post->title_post }}">
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea name="message" class="form-control post_form" rows=5>{{ $post->message }}</textarea>
            </div>
            <a><button type="submit" class="btn darkgrey">Save</button></a>
          </form>  
          <a href='{{ secure_url("/") }}'><button class="btn darkgrey" style="float:left">Cancel</button></a>
        </div>

      </div>
    </div>

        {{-- Bootstrap core JavaScript --}}
    {{--================================================== --}}
    {{-- Placed at the end of the document so the pages load faster --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection