@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Exercice</div>
                    <div class="panel-body">

                        @include('common.errors')

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('exercice/create') }}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('videoLink') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Video Link</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="videoLink" value="{{ old('videoLink') }}">

                                    @if ($errors->has('videoLink'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('videoLink') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Text</label>

                                <div class="col-md-6">
                                    <textarea type="text" class="form-control" name="text" value="{{ old('text') }}"></textarea>

                                    @if ($errors->has('text'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('hint') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Hint</label>

                                <div class="col-md-6">
                                    <textarea type="text" class="form-control" name="hint"></textarea>

                                    @if ($errors->has('hint'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('hint') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('script') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Script</label>

                                <div class="col-md-6">
                                    <textarea type="text" class="form-control" name="script"></textarea>

                                    @if ($errors->has('script'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('script') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-book"></i>Save Exercice
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
