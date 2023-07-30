@extends('app')
@section('content')
    <div class="posts">
        <p>Последние объявления</p>

        @foreach($posts as $post)
        <div class="box">
            <h3> Объявление № {{$post->id}}</h3>
            <p> {{$post->name}}</p>
            <p> {{$post->description}}</p>
            <p> {{$post->category_name}}</p>
        </div>
        @endforeach
    </div>
@endsection