@extends('adminlte::page')

@section('title', 'FitWeb - Programme')

@section('content_header')
    <h1 class="m-0 text-dark">
        Séance d'entrainement</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-9">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <h3>Programme n°{{$program->id}}</h3>


                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Intitulé</b> <span class="float-right">{{$program->name}}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Assigné à :</b> <span class="float-right">{{$program->user->lastname.' '.$program->user->firstname}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="card card-primary card-outline">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            Exercices
                        </h3>
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <a href="http://fitweb.test/program/defaultExercises/{{$program->id}}">Ajouter un exercice à ce programme</a>
                                </div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nom: activate to sort column descending" style="width: 184.625px;">Nom d'exercice</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nom: activate to sort column descending" style="width: 184.625px;">Description</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nom: activate to sort column descending" style="width: 184.625px;">Type de travail</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nom: activate to sort column descending" style="width: 184.625px;">Voir l'exercice en détail</th>
                                         </thead>
                                        <tbody>
                                        @foreach($program->default_exercises as $defaultExercise)
                                            <tr>

                                                <th>
                                                    {{$defaultExercise->title}}
                                                </th>
                                                <th>
                                                    {{$defaultExercise->description}}
                                                </th>
                                                <th>
                                                    {{$defaultExercise->type}}
                                                </th>
                                                <th>

                                                </th>

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
@stop
