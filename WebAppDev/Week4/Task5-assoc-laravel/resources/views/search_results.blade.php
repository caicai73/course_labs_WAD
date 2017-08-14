@extends('layouts.master')

@section('title')
  Search results
@endsection

@section('content')
    <h2>Australian Prime Ministers.</h2>
    <!--<h4>Search results for {{$name}} {{$year}} {{$state}}</h4>-->
    @if (!empty($name))  
      <h4>Search results for {{$name}}</h4>
    @elseif (!empty($year))
      <h4>Search results for {{$year}}</h4>
    @else
      <h4>Search results for {{$state}}</h4>
    @endif
    
    <a href="/WebAppDev/Week4/Task5-assoc-laravel/public/">Search Again</a><br>
    
    @if (count($pms) == 0)
      <p>No results found</p>
    @else   
      <table class="bordered">
      <br>
        <thead>
          <tr><th>No.</th><th>Name</th><th>From</th><th>To</th><th>Duration</th><th>Party</th><th>State</th></tr>
        </thead>
        <tbody>
          @foreach($pms as $pm)
            <tr>
              <td>{{$pm['index']}}</td>
              <td>{{$pm['name']}}</td>
              <td>{{$pm['from']}}</td>
              <td>{{$pm['to']}}</td>
              <td>{{$pm['duration']}}</td>
              <td>{{$pm['party']}}</td>
              <td>{{$pm['state']}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
@endsection