@extends('layouts.app')

@section('content')

    {{--  Edit Modal  --}}

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Edit Exercice</h4>
                </div>
                <form method="POST" role="form" action="{{ url('/exercice/update') }}">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Title:</label>
                            <input type="text" class="form-control" name="title" id="modalTitle">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Video Link:</label>
                            <input type="text" class="form-control" name="videoLink" id="modalVideoLink">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Text:</label>
                            <textarea type="text" class="form-control" name="text" id="modalText"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Hint:</label>
                            <textarea type="text" class="form-control" name="hint" id="modalHint"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Script:</label>
                            <textarea type="text" class="form-control" name="script" id="modalScript"></textarea>
                        </div>

                        <input type="hidden" class="form-control" name="id" id="modalId"></imput>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    @include('common.errors')



                        <div class="panel-heading">
                            <i class="fa fa-book"></i> Exercices List
                        </div>

                        <div class="panel-body">

                            @if (count($exercices) > 0)


                            <table class="table table-striped delivery-table">

                                <!-- Table Headings -->
                                <thead>
                                <th>Title</th>
                                <th>Video Link</th>
                                <th>Text</th>
                                <th>Hint</th>
                                <th>Script</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                                </thead>

                                <!-- Table Body -->
                                <tbody>
                                @foreach ($exercices as $exercice)

                                    <tr>
                                        <!-- Task Name -->
                                        <td class="table-text">
                                            <div>{{ $exercice->title }}</div>
                                        </td>

                                        <td class="table-text">
                                            <div>{{ $exercice->videoLink }}</div>
                                        </td>

                                        <td class="table-text">
                                            <div>{{ strlen($exercice->text)>100 ? substr(($exercice->text),0,100).'...' : $exercice->text }}</div>
                                        </td>

                                        <td class="table-text">
                                            <div>{{ strlen($exercice->hint)>100 ? substr(($exercice->hint),0,100).'...' : $exercice->hint }}</div>
                                        </td>

                                        <td class="table-text">
                                            <div>{{ strlen($exercice->script)>100 ? substr(($exercice->script),0,50).'...' : $exercice->script}}</div>
                                        </td>

                                        <td class="table-text">
                                            <button type="button" class="btn btn-primary btn-sm center-block" data-toggle="modal" data-target="#editModal" data-title="{{$exercice->title}}" data-videoLink="{{$exercice->videoLink}}" data-text="{{$exercice->text}}" data-hint="{{$exercice->hint}}" data-script="{{$exercice->script}}" data-id="{{$exercice->id}}"><i class="fa fa-pencil"></i> Edit</button>
                                        </td>

                                        <td class="table-text">
                                            <form action="{{ url('exercice/delete') }}" method="POST">
                                                {!! csrf_field() !!}
                                                <input type="hidden" class="form-control" name="id" value="{{$exercice->id}}"></imput>
                                                <button type="submit" class="btn btn-danger btn-sm center-block"><i class="fa fa-times"></i> Cancel</button>
                                            </form>
                                        </td>


                                    </tr>

                                @endforeach
                                </tbody>
                            </table>

                            @else
                                <div>No exercices yet.</div>
                            @endif
                        </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        $('#editModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient = button.data('title'); // Extract info from data-* attributes
            var modal = $(this);

            modal.find('.modal-body #modalTitle').val(recipient);

            recipient = button.data('videolink');
            modal.find('.modal-body #modalVideoLink').val(recipient);

            recipient = button.data('text');
            modal.find('.modal-body #modalText').val(recipient);

            recipient = button.data('hint');
            modal.find('.modal-body #modalHint').val(recipient);

            recipient = button.data('script');
            modal.find('.modal-body #modalScript').val(recipient);

            recipient = button.data('id');
            modal.find('.modal-body #modalId').val(recipient);
        })
    </script>

@endsection
