@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
    <h1>{{$title}}</h1>
        <p>Esse é o mais novo aplicativo para você guardar suas risadas diárias!</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Registrar-se</a></p>
    </div>
@endsection