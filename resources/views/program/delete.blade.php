@extends('adminlte::page')

@section('title', 'FitWeb')

@section('content_header')
    <h1 class="m-0 text-dark">Suppression d'un programme</h1>
@stop

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0 text-dark">Supprimer le programme : {{$program->name}}</h1>
            <h4 class="m-3 text-dark">Créé par {{$program->user->firstname.' '.$program->user->lastname}}</h4>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            Confirmer la suppression de ce programme
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="{{route('program.index')}}" class="btn btn-default float-left">
                                Annuler
                            </a>
                            <a href="http://fitweb.test/program/delete/{{$program->id}}" class="btn btn-default float-left">
                                Oui
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop


