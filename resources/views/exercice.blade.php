@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('common.infos')
                <div class="panel panel-default">
                    <div class="panel-heading">{{$exercice->title}}</div>

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$exercice->videoLink}}?rel=0&amp;showinfo=0" frameborder="0"></iframe>
                    </div>

                    <div class="panel-body">

                        <p>{!! $exercice->text !!}</p>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Code:</label>
                            <textarea class="form-control" name="code" id="userInput" ></textarea>
                        </div>

                        <div class="alert alert-danger" id="error"><p>You made a mistake...</p></br><strong>Console Shows:</strong><p id="errMsg"></p></div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 mrg-btm-20 ">
                                <button onclick="test()" class="btn btn-success">Submit</button>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseHint" aria-expanded="false" aria-controls="collapseExample">
                                    Get Hint
                                </button>
                            </div>
                        </div>


                        <div class="col-md-12 mrg-top-20">
                            <div class="collapse" id="collapseHint">
                                <div class="well">
                                    <strong>Hint:</strong></br> {!! $exercice->hint !!}
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <form id="successForm" role="form" method="get" action="{{ url('exercice/success/'.$exercice->id)}}" >
        <input type="hidden" name="id" value="{{$exercice->id}}">
        <input type="hidden" name="success" value="success" >
    </form>

    <script>

        var $error = $( "#error" );
        var $errMsg = $("#errMsg");

        var $form = $( "#successForm" );

        $(document).ready(function() {
            $error.hide();
            $errMsg.append("ok");
        })

        function test()
        {
            var userInput = document.getElementById("userInput").value;

            try {
                eval(userInput);
            } catch(err) {
                $error.show();
                $errMsg.text(err +" .");
                return;
            }

            {!! $exercice->script !!}


        }
    </script>


@endsection
