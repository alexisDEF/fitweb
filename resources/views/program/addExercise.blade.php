@extends('adminlte::page')

@section('title', 'FitWeb')

@section('content_header')
    <h1 class="m-0 text-dark">Liste des exercices</h1>
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nom: activate to sort column descending" style="width: 184.625px;">Nom</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nom: activate to sort column descending" style="width: 184.625px;">Description</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 67.0156px;"></th></tr>
                                            </thead>
                                            <tbody>
                                            @foreach($defaultExercises as $defaultExercise)
                                                <tr>
                                                    <td>
                                                        {{$defaultExercise->title}}
                                                    </td>
                                                    <td>
                                                        {{$defaultExercise->description}}
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-xs btn-default" href="{{route("defaultExercise.show",$defaultExercise)}}">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a class="btn btn-xs btn-info" href="http://fitweb.test/program/addExercise/{{$programId}}/{{$defaultExercise->id}}">+</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop