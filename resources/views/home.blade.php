@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Exercises</div>

                <div class="panel-body">

                    @include('common.errors')
                    @include('common.infos')

                    @if (count($exercices) > 0)

                        @foreach ($exercices as $exercice)
                        <div class="col-md-4 col-xs-12">
                            <div class="panel  {{ $progress>$exercice->id?'panel-success':''}} {{ $progress==$exercice->id?'panel-info':''}} {{ $progress<$exercice->id?'panel-default':''}}">
                                <div class="panel-heading">
                                    <h3 class="panel-title ft-size-14">{{$exercice->title}} <span class="glyphicon {{ $progress>$exercice->id?'glyphicon-ok':''}} {{ $progress==$exercice->id?'glyphicon-pencil':''}} {{ $progress<$exercice->id?'glyphicon-lock':''}}" aria-hidden="true"></span> {!! strlen($exercice->title)<35?"</br></br> ":""!!}</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="{!! asset('img/'.$exercice->id.'.jpg') !!}" class="img-responsive botmarg">

                                    <div class="mrg-top-20">
                                        <a class="mrg-top-20" href="{{ url('/exercice/get/'.$exercice->id) }}" ><button type="button" class="btn {{ $progress>$exercice->id?'btn-success':''}} {{ $progress==$exercice->id?'btn-info':''}} {{ $progress<$exercice->id?'btn-default':''}} center-block">Do it</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    @endif


                    <div class="col-md-4 col-xs-12 col-md-push-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title ft-size-14">More Exercises</br></br></h3>
                            </div>
                            <div class="panel-body">
                                <img src="{!! asset('img/+.jpg') !!}" class="img-responsive botmarg">

                                <div class="mrg-top-20">
                                    <a class="mrg-top-20" href="{{ url('/exercice/extra/') }}" ><button type="button" class="btn btn-success center-block">Go</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>




        </div>
    </div>
</div>
@endsection
