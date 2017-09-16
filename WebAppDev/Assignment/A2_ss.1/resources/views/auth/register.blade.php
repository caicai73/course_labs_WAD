@extends('layouts.master')

@section('content')
<div class="container basicFontStyle">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align:center;background-color:#F7E287"><strong>Register</strong></div>
                <div class="panel-body" style="margin-left:50px;margin-right:50px">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
                            <input name="fullname" type="text" class="form-control post_form" placeholder="Fullname" value="{{old('fullname')}}" autofocus>

                            @if ($errors->has('fullname'))
                                <label class="errorInput">{{$errors->first('fullname')}}</label>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input name="email" type="email" class="form-control post_form"  placeholder="E-mail Address" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <label class="errorInput">{{$errors->first('email')}}</label>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <input name="dob" type="date" class="form-control post_form" value="{{ old('dob') }}">

                            @if ($errors->has('dob'))
                               <label class="errorInput">{{$errors->first('dob')}}</label>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control post_form" name="password" placeholder="Password">

                            @if ($errors->has('password'))
                                <label class="errorInput">{{$errors->first('password')}}</label>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input name="password_confirmation" type="password" class="form-control post_form" placeholder="Confirm Password">
                            
                            @if ($errors->has('password'))
                                <label class="errorInput">{{$errors->first('password')}}</label>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn3 yelley">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
