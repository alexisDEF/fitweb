@extends('adminlte::page')

@section('title', 'FitWeb')

@section('content_header')
    <h1 class="m-0 text-dark">Tableau de bord</h1>
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            <a class="btn btn-info" href="http://fitweb.test/defaultExercise/create">Ajouter un exercice par défaut</a>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
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
                                                        <a class="btn btn-xs btn-default" href="{{route("defaultExercise.edit",$defaultExercise)}}">
                                                            <i class="fa fa-pen"></i>
                                                        </a>
                                                        <a type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#myModal_{{ $defaultExercise->id }}"><i class="fa fa-trash"></i></a>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal_{{ $defaultExercise->id }}" role="dialog">
                                                            <div class="modal-dialog">
                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Supprimer</h4>
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Voulez vous définitivement supprimer cet exercice ?&nbsp;<i>({{$defaultExercise->title}})</i></p>
                                                                    </div>
                                                                    <div class="modal-footer d-flex justify-content-between">
                                                                        <a class="btn btn-info btn-danger" href="http://fitweb.test/defaultExercise/delete/{{$defaultExercise->id}}">Confirmer</a>
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
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