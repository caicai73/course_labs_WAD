@extends('layouts.master')

@section('title')
    Skilti :: Speaks : Friend's List 
@endsection

@section('content')
  <div class="container basicFontStyle">
    {{-- Main content section --}}
    <div class="row">
      
      <div class="panel panel-default" style="box-shadow: 1px 5px 15px #C3C3C3">
        <div class="panel-heading" style="background-color:#666666;color:white">
          <h3 style="text-align:center">{{ Auth::user()->fullname }}'s Friend's List</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-3" style="padding:10px">
                <div class="col-md-12 post" style="text-align:center">
                    <img src="images/profile/{{ Auth::user()->profImg }}" style="width:60px; height:60px">
                    <h3>John Smith</h3>
                    <br/>
                    <a href="#"><button class="btn darkgrey">Add Friend</button></a>
                </div>
            </div>
            <div class="col-md-3" style="padding:10px">
                 <div class="col-md-12 post" style="text-align:center">
                    <img src="images/profile/{{ Auth::user()->profImg }}" style="width:60px; height:60px">
                    <h3>Vera Wang</h3>
                    <br/>
                    <a href="#"><button class="btn darkgrey">Add Friend</button></a>
                </div>
            </div>
            <div class="col-md-3" style="padding:10px">
                 <div class="col-md-12 post" style="text-align:center">
                    <img src="images/profile/cleo.png" style="width:60px; height:60px">
                    <h3>Cleo</h3>
                    <br/>
                    <a href="#"><button class="btn darkgrey">Add Friend</button></a>
                </div>
            </div>
            @foreach($users as $user)
                <div class="col-md-3" style="padding:10px">
                     <div class="col-md-12 post" style="text-align:center">
                        <img src="images/profile/{{ Auth::user()->profImg }}" style="width:60px; height:60px">
                        <a><h3>{{--$users->fullname--}}</h3></a>
                        <br/>
                        <a href="#"><button class="btn darkgrey">Add Friend</button></a>
                    </div>
                </div>
            @endforeach
        </div>
      </div>
      
    </div>
  </div>
@endsection