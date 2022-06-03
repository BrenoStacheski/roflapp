@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <hr>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3>
                        <small>Escrito em {{$post->created_at}} por {{$post->user}}</small>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
        {{$posts->links()}}
    @else
        <p>Não encontrado postagens</p>
    @endif
@endsection