@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Escrito em {{$post->created_at}} por {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        <a href="/posts" class="btn btn-info">Voltar</a>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Editar</a>
        <hr>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Deletar', ['class'=> 'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
    @endif
@endsection
