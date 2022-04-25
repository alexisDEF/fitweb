@extends('adminlte::page')

@section('title', 'FitWeb')

@section('content_header')
    <h1 class="m-0 text-dark">FitWeb</h1>
@stop

@section('content')
    <style>
        label {text-align : center}
    </style>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                {{-- fiche utilisateur --}}
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <h3 class="profile-username text-center">{{$customer->firstname}}</h3>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Nom</b> <span class="float-right">{{$customer->lastname}}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Prénom</b> <span class="float-right">{{$customer->firstname}}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email</b> <span class="float-right">{{$customer->email}}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Inscrit le :</b> <span class="float-right">{{$customer->created_at}}</span>
                                    </li>
                                </ul>

                                <!--<a href="http://fitweb.test/customer/{{$customer->id}}/edit" class="btn btn-primary btn-block"><b>Modifier</b></a>-->
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="card">
                        <form method="POST" action="http://fitweb.test/customer/addProgram/{{$customer->id}}">
                            @method('POST')
                            @csrf
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <label class="text-center">Ajouter une séance pour {{$customer->firstname}}</label>
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
    </div>
@stop

