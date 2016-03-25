@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$exercice->title}}</div>

                    <div class="panel-body">
                        <div class="alert alert-danger">
                            <strong>Sorry! You didn't unlock this exercice yet!</strong>
                            <a href="{{ url('/') }}">Please click here to see the exercices list.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
