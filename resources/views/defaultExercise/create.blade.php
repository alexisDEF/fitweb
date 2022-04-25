@extends('adminlte::page')

@section('title', 'FitWeb')

@section('content_header')
    <h1 class="m-0 text-dark">Ajouter un exercice</h1>
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <form method="POST" action="{{route('defaultExercise.store')}}">
                        @method('POST')
                        @csrf
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" id="title" name="title" value="">
                                </div>
                                <div class="form-group">
                                    <label for="name">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" value="">
                                </div>
                                <div class="form-group">
                                    <label for="name">Durée</label>
                                    <input type="number" class="form-control" id="duration" name="duration" value="">
                                </div>
                                <div class="form-group">
                                    <label for="name">Poids</label>
                                    <input type="number" class="form-control" id="weight" name="weight" value="">
                                </div>
                                <div class="form-group">
                                    <label for="name">Nombre de répétitions</label>
                                    <input type="number" class="form-control" id="repetition" name="repetition" value="">
                                </div>
                                <div class="form-group">
                                    <label for="name">Nombre de séries</label>
                                    <input type="number" class="form-control" id="serie" name="serie" value="">
                                </div>
                                <div class="form-group">
                                    <label for="name">Durée de repos entre chaque série (en secondes)</label>
                                    <input type="number" class="form-control" id="restDuration" name="restDuration" value="">
                                </div>
                                <div class="form-group">
                                    <label for="name">Type : muscu/cardio ?</label>
                                    <input type="text" class="form-control" id="type" name="type" value="">
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
