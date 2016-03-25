@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading">Well Done!</div>

                    <div class="panel-body">
                        You successfully completed the exercice {{$id}}!</br>
                        <a href="{{ url('/') }}">Please click here to see the exercices list.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
