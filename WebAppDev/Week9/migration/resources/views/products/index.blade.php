@extends('layouts.master') 

@section('title')
    Products 
@endsection 

@section('content') 
<div>
    <h1>Create a new product</h1> 
    @if (count($errors) >0)
        <div class="alert_message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/product">
        {{csrf_field()}}
        
        <p><label>Name: </label><input type="text" name="name" value="{{old('name')}}"></p> 
        <p><label>Price: </label><input type="text" name="price" value="{{old('price')}}"></p> 
        <p><select name="manufacturer">
        @foreach ($manufacturers as $manufacturer)
            @if($manufacturer->id == old('manufacturer'))
                <option value="{{$manufacturer->id}}" selected="selected">{{$manufacturer->name}}</option> 
            @else
                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
            @endif
        @endforeach
        </select></p>
        <input type="submit" value="Create"> 
    </form>
</div>

<div>
    <h1>Products</h1>
    @foreach($products as $product)
        <h2>{{$product->name}}</h2> 
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
    @endforeach
</div>
@endsection