<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Доска объявлений</title>
        <!-- Styles -->
        <style>
            .box1 {
                height: 256px;
                width: 256px;
                border: 5px solid orangered;
                padding: 50px;
                margin: 20px;
                }
        </style>
    </head>
    <body >
        <h1>Welcome!</h1>
        <div>Последние объявления</div>
        @foreach($posts as $post)
        <div class="box1">
                <p> Объявление № {{$post->id}}</p>
                <p> {{$post->name}}</p>
                <p font-size="12px"> {{$post->description}}</p>
                <p font-size="22px"> {{$post->category_name}}</p>
        </div>
        @endforeach
    </body>
</html>
