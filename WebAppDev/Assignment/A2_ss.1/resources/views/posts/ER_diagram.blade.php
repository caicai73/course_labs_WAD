@extends('layouts.master')

@section('title')
    ER Diagram
@endsection

@section('content')
    <div class="container basicFontStyle">
      {{-- Main content section --}}
      <div class="row">
        
        <div class="panel panel-default" style="box-shadow: 1px 5px 15px #C3C3C3">
            <div class="panel-heading" style="background-color:#F7E287">
              <h3 style="text-align:center;color:#373C88"><strong>ER Diagram for the database</strong></h3>
            </div>
            {{-- For: Public Posts --}}
            <div class="panel-body">
                <img src="images/Erdig.png" alt"ER diagram for the database" class="erd" style="width:1000px">
            </div>
        </div>
      
      </div>
    </div>
@endsection