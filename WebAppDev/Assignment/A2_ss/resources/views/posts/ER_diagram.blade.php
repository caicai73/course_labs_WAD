@extends('layouts.master')

@section('title')
    ER Diagram
@endsection

@section('content')
    <div class="container basicFontStyle">
      {{-- Main content section --}}
      <div class="row jumbotron basicFontStyle" style="box-shadow: 1px 5px 15px #C3C3C3">
        <div class="docos">
            <p style="text-align:center;color:#373C88"><strong>ER Diagram for the database</strong></p>
            <hr>
            <img src="images/ERD.png" alt"ER diagram for the database" class="erd" style="width:800px">
        </div>  
      </div>
    </div>
@endsection