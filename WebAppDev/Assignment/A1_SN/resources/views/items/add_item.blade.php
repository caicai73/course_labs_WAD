@extends('layouts.master')

@section('title')
  Add Item Form
@endsection

@section('content')
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
@endsection
