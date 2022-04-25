@extends('adminlte::page')

@section('title', 'Fitweb')

@section('content_header')
    <h1 class="m-0 text-dark">Tableau de bord</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="m-1">Bienvenue, {{\Illuminate\Support\Facades\Session::get('userFirstname')}} !</h3>
                    <p class="m-3">"FitWeb" est une application de gestion pour l'équipe administrative de FitWeb. <br>Elle sert notamment à gérer et contrôler les utilisateurs,
                        les différents programmes et exercices que l'on trouve dans la base de donnnées. </p>
                </div>
            </div>
        </div>
    </div>
@stop
