@extends('layouts.master')

@section('title')
  Item Detail
@endsection

@section('content')
  <h1>{{$item->summary}}</h1>
  {{$item->details}}
  <p><a href="{{ secure_url("delete_item_action/$item->id") }}">Delete item</a></p>
  <p><a href="{{ secure_url("update_item/$item->id") }}">Update item</a></p>
  <p><a href="/">Home</a></p>
@endsection