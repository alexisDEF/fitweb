@extends('adminlte::page')

@section('title', 'FitWeb')

@section('content_header')
    <h1 class="m-0 text-dark">Ajouter un exercice pour {{$customer->name}}</h1>
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <form method="POST" action="{{route('program.store')}}">
                        @method('POST')
                        @csrf
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nom du programme</label>
                                    <input type="text" class="form-control" id="name" name="name" value="">
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
