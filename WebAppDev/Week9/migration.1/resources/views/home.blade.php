@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <br><br>
                    Click the button below to see the Products list.<br><br>
                    <a href='/product'><button>Product list</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
