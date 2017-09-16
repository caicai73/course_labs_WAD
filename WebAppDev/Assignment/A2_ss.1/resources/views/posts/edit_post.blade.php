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
          <form method="POST" action="/home/{{$post->id}}">
            {{csrf_field()}}
            {{ method_field('PUT') }}
            <input type="hidden" name="id" value="{{ $post->id }}"> 
            <div class="form-group">
              <label for="title_post">Fullname: {{ $post->fullname }}</label>
              <input type="hidden" name="fullname" value="{{ $post->fullname }}">
            </div>
            <div class="form-group">
              @if (count($errors) > 0)
                <label for="title_post">Title:</label>
                <input name="title_post" type="text" class="form-control post_form" value="{{ old('title_post') }}">
                <label class="errorInput">{{$errors->first('title_post')}}</label><br>
              @else
                <label for="title_post">Title:</label>
                <input type="text" name="title_post" class="form-control post_form" value="{{ $post->title_post }}">
              @endif
              
            </div>
            <div class="form-group">
              @if (count($errors) > 0)
                <label for="message">Message:</label>
                <textarea name="message" type="text" class="form-control post_form" rows=5>{{ old('message') }}</textarea>
                <label class="errorInput">{{$errors->first('message')}}</label><br>
              @else
                <label for="message">Message:</label>
                <textarea name="message" class="form-control post_form" rows=5>{{ $post->message }}</textarea>
              @endif
            </div>

            <a><button type="submit" value="Update" class="btn darkgrey">Save</button></a>
          </form>
          <a href='{{ secure_url("/") }}'><button class="btn darkgrey" style="float:left">Cancel</button></a>
        </div>

      </div>
    </div>
@endsection