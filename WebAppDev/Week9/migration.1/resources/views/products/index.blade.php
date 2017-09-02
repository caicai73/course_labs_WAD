@extends('layouts.master') 

@section('title')
    Products 
@endsection 

@section('content') 
<h1>List of products</h1>
<a href="/product/create"><button>Add new product</button></a>
<ul>
    @foreach ($products as $product)
        <a href="/product/{{$product->id}}"><li>{{ $product->name }}</li></a>
    @endforeach
</ul> 
@endsection