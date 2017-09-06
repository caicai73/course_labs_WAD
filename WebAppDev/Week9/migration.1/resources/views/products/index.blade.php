@extends('layouts.app') 

@section('title')
    Products 
@endsection 

@section('content') 
<div class="container">
    <h1>List of products</h1><br>
    <a href="/product/create"><button>Add new product</button></a>
    <ul>
        <br>
        @foreach ($products as $product)
            <a href="/product/{{$product->id}}"><li>{{ $product->name }}</li></a>
        @endforeach
    </ul>   
</div>
@endsection