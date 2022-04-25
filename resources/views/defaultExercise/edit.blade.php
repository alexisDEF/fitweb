@extends('adminlte::page')

@section('title', 'FitWeb')

@section('content_header')
    <h1 class="m-0 text-dark">Modifier cet exercice</h1>
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <form method="POST" action="{{route('defaultExercise.update',$defaultExercise->id)}}">
                        @method('PUT')
                        @csrf

                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$defaultExercise->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" value="{{$defaultExercise->description}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">Durée</label>
                                    <input type="number" class="form-control" id="duration" name="duration" value="{{$defaultExercise->duration}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">Poids</label>
                                    <input type="number" class="form-control" id="weight" name="weight" value="{{$defaultExercise->weight}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">Nombre de répétitions</label>
                                    <input type="number" class="form-control" id="repetition" name="repetition" value="{{$defaultExercise->repetition}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">Nombre de séries</label>
                                    <input type="number" class="form-control" id="serie" name="serie" value="{{$defaultExercise->serie}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">Durée de repos entre chaque série</label>
                                    <input type="number" class="form-control" id="restDuration" name="restDuration" value="{{$defaultExercise->restDuration}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">Type : muscu/cardio ?</label>
                                    <input type="text" class="form-control" id="type" name="type" value="{{$defaultExercise->type}}">
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary float-right">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@stop



