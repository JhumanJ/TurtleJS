@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-heading">Extra Exercises</div>

                    <div class="panel-body">
                        <img src="{!! asset('img/Home/index.png') !!}" class="center-block logo">
                        <p>Here is a list of extra exercice you can use to practice more.</p>
                        </br>
                        <p>Here is a short tutorial to show you how to train:</p>
                        <ul>
                            <li><a href="{{asset('pdf/How-to-Test-your-JavaScript-Programs.pdf')}}" target="_blank">How to train and use theses exercise sheets</a></li>
                        </ul>
                        <p>Exercices:</p>
                        <ul>
                            <li><a href="{{asset('pdf/Exercise Sheet 1.pdf')}}" target="_blank">More exercises for Chapter 1</a></li>
                            <li><a href="{{asset('pdf/Exercise Sheet 2.pdf')}}" target="_blank">More exercises for Chapter 2</a></li>
                            <li><a href="{{asset('pdf/Exercise Sheet 3.pdf')}}" target="_blank">More exercises for Chapter 3</a></li>
                            <li><a href="{{asset('pdf/Exercices sheet 4-5.pdf')}}" target="_blank">More exercises for Chapter 4-5</a></li>
                            <li><a href="{{asset('pdf/Exercise Sheet 6.pdf')}}" target="_blank">More exercises for Chapter 6</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
