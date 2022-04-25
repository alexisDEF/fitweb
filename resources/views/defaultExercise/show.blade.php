@extends('adminlte::page')

@section('title', 'FitWeb')

@section('content_header')
    <h1 class="m-4 text-dark">Détail de l'exercice N°{{$defaultExercise->id}}</h1>
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <h3 class="profile-username text-center">{{$defaultExercise->title}}</h3>

                                    <ul class="list-group list-group-unbordered mb-4">
                                        <li class="list-group-item">
                                            <b>Description</b> <span class="float-right">{{$defaultExercise->description}}</span>
                                        </li>
                                        @if($defaultExercise->duration != null)
                                            <li class="list-group-item">
                                                <b>Durée</b> <span class="float-right">{{$defaultExercise->duration}} seconde(s)</span>
                                            </li>
                                        @endif
                                        @if($defaultExercise->repetition != null)
                                            <li class="list-group-item">
                                                <b>Nombre de répétition</b> <span class="float-right">{{$defaultExercise->repetition}} </span>
                                            </li>
                                        @endif
                                        @if($defaultExercise->weight != null)
                                            <li class="list-group-item">
                                                <b>Poids</b> <span class="float-right">{{$defaultExercise->weight}} kg </span>
                                            </li>
                                        @endif
                                        @if($defaultExercise->serie != null)
                                            <li class="list-group-item">
                                                <b>Nombre de série(s)</b> <span class="float-right">{{$defaultExercise->serie}} </span>
                                            </li>
                                        @endif
                                        @if($defaultExercise->restDuration != null)
                                            <li class="list-group-item">
                                                <b>Temps de repos</b> <span class="float-right">{{$defaultExercise->restDuration}} seconde(s) </span>
                                            </li>
                                        @endif
                                        <li class="list-group-item">
                                            <b>Type : muscu/cardio</b> <span class="float-right">{{$defaultExercise->type}} </span>
                                        </li>
                                    </ul>

                                    <a href="{{route("defaultExercise.edit",$defaultExercise->id)}}" class="btn btn-primary btn-block"><b>Modifier</b></a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop



