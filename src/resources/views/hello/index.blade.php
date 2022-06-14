<html>
<head>
    <title>Hello/Index</title>
    <style>
    body { font-size:16pt; color:#999; }
    h1 { font-size: 100pt; text-align: right; color: #f6f6f6;
        margin: -50px 0px -100px 0px; }
    </style>
</head>
<body>
    @extends('layouts.helloapp')

    @section('title', 'index')

    @section('menubar')
        @parent
        インデックスページ
    @endsection

    @section('content')
        <p>ここが本文のコンテンツです。</p>
        <p>Controller value<br>'message' = {{$message}}</p>
        <p>viewComposer value<br>'view_message' = {{$view_message}}
            </p>
    @endsection



    <!-- <form method="POST" action="/hello">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
    </form> -->
</body>
</html>