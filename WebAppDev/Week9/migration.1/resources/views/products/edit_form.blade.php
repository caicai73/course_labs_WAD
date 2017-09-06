@extends('layouts.app')

@section('title')
    Products Edit Form
@endsection

@section('content')
<div class="container">
    <h1>Edit Product Form</h1><br>
    <form method="POST" action="/product/{{$product->id}}">
        {{csrf_field()}}
        {{ method_field('PUT') }}
        <p>
            @if (count($errors) >0)
                <label style="padding-right:11.5px">Name:</label><input type="text" name="name" value="{{old('name')}}">
                <label style="color:red;font-style:italic">{{$errors->first('name')}}</label>
            @else
                <label style="padding-right:5px">Name:</label><input type="text" name="name" value="{{$product->name}}">
            @endif
        </p> 
        <p>
            @if (count($errors) >0)
                <label style="padding-right:11.5px">Price:</label><input type="text" name="price" value="{{old('price')}}">
                <label style="color:red;font-style:italic">{{$errors->first('price')}}</label>
            @else
                <label style="padding-right:11.5px">Price:</label><input type="text" name="price" value="{{$product->price}}">
            @endif
        </p>
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
        <input type="submit" value="Update"> 
    </form>
    <br>
    <a href='/product/{{$product->id}}'><button>Cancel</button></a>
</div>
@endsection