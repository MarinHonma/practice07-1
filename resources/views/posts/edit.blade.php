<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <meta charset="utf-8">
       <title>Blog</title>
       <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
            edit
        </x-slot>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
                <div class='content_title'>
                <h2>Title</h2>
                <input type="text" name="post[title]"  value="{{ $post->title }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <div class='content_body'>
                <h2>Body</h2>
                <input type="text" name="post[body]" value="{{ $post->body }}"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
        </div>
            <input type="submit" value="更新"/>
        </form>
        <div class='footer'>
            <a href="/posts/{{ $post->id }}">戻る</a>
    </body>
    </x-app-layout>
</html>