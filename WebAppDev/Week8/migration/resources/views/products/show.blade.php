@extends('layouts.master')

@section('title')
    Products Show
@endsection

@section('content')
    <h1>{{$product->name}}</h1> 
    <p>Price: {{$product->price}}</p> 
    <p>Made by: {{$product->manufacturer->name}}</p>
    <p><a href='/product/{{$product->id}}/edit'>Edit</a></p> 
    <p>
        <form method="POST" action="/product/{{$product->id}}"> 
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <input type="submit" value="Delete">
        </form>
    </p>
@endsection