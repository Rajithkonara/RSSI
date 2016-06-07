@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <img src="{{asset('img/home.jpg')}}" class="img-rounded" alt="Cinque Terre" width="900" height="236">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
