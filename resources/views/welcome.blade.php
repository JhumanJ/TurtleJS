@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">

                    Turtle JS is the platform designed to teach the basics of coding and give you the tools to become an active doer rather than a passive user. Are you ready for this adventure ? Then let's go !

                    <form action="{{ url('user/tutorial') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" class="form-control" name="id" value="{{$user->id}}"></imput>
                        <button type="submit" class="btn btn-info btn-sm center-block">Continue</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
