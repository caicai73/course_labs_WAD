@extends('layouts.app')

@section('title')
    Products Show
@endsection

@section('content')
<div class="container">
    <h1>{{$product->name}}</h1> 
    <div class="col-md-12">
        <h4>Price: {{$product->price}}</h4> 
        <h4>Made by: {{$product->manufacturer->name}}</h4>
        <br>
        <a href='/product/{{$product->id}}/edit'><button class="btn" style="background-color:white">Edit</button></a>
        <p>
            <form method="POST" action="/product/{{$product->id}}"> 
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                <input type="submit" value="Delete" class="btn" style="background-color:white">
            </form>
        </p>
        <br>
        <a href="/product"><button class="btn" style="background-color:white">Go back to list</button></a>
    </div>
    
</div>
@endsection