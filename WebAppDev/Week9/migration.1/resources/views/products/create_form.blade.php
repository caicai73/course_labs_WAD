@extends('layouts.app')

@section('title')
    Products Create form
@endsection

@section('content')
<div class="container">
    <h1>Create a new product</h1><br>
    @if (count($errors) >0)
        <div style="color:red;font-style:italic">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/product">
        {{csrf_field()}}
        
        <p><label style="padding-right:5px">Name:</label><input type="text" name="name" value="{{old('name')}}"></p> 
        <p><label style="padding-right:11.5px">Price:</label><input type="text" name="price" value="{{old('price')}}"></p> 
        <p><select name="manufacturer" style="height:5px">
        @foreach ($manufacturers as $manufacturer)
            @if($manufacturer->id == old('manufacturer'))
                <option value="{{$manufacturer->id}}" selected="selected">{{$manufacturer->name}}</option> 
            @else
                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
            @endif
        @endforeach
        </select></p>
        <br>
        <input type="submit" value="Create">
    </form>
    <a href='/product'><button>Cancel</button></a>
</div>
@endsection