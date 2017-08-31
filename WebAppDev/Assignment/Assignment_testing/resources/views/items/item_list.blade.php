@extends('layouts.master')

@section('title')
  Item List
@endsection

@section('content')
  <div class="col-md-12">
    <div class="col-md-6">
      <h1>Add Item</h1>
      <form method="post" action="/add_item_action">
      {{csrf_field()}}   {{--protects the website from malicious attacks (cross-site forgery)--}}
        <p>
          <label>Summary:</label> 
          <input type="text" name="summary">
        </p>
        <p>
          <label>Details:</label> 
          <textarea name="details"></textarea>
        </p>
        <input type="submit" value="Add Item">
        <button><a href="/">Cancel</a></button>
      </form>
    </div>
    <div class="col-md-6">
      <h1>Items</h1>
      @if($items)
        <ul>
        @foreach($items as $item)
          <div>
            <h1>{{$item->summary}}</h1>
            {{$item->details}}
            <p><a href="{{ url("delete_item_action/$item->id") }}">Delete item</a></p>
            <p><a href="{{ url("update_item/$item->id") }}">Update item</a></p>
            <p><a href="/">Home</a></p>
          </div>
        @endforeach
        </ul>
      @else
        No item found
      @endif
    </div>
  </div>
@endsection