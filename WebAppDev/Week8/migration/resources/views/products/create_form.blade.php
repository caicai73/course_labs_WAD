@extends('layouts.master')

@section('title')
    Products Create form
@endsection

@section('content')
    <form method="POST" action="/product">
        {{csrf_field()}}
        <h1>Create Product Form</h1> 
        <p><label>Name: </label><input type="text" name="name"></p> 
        <p><label>Price: </label><input type="text" name="price"></p> 
        <p><select name="manufacturer">
        @foreach ($manufacturers as $manufacturer)
            <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option> 
        @endforeach
        </select></p>
        <input type="submit" value="Create"> 
    </form>
@endsection