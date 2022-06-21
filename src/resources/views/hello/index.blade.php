<html>
<head>
    <title>Hello/Index</title>
    <style>
    body { font-size:16pt; color:#999; }
    h1 { font-size: 100pt; text-align: right; color: #f6f6f6;
        margin: -50px 0px -100px 0px; }
    th {background-color: #999; color:#fff; padding:5px 10px; }
    td {border: solid 1px #aaa; color:#999; padding:5px 10px; }
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
    @if (Auth::check())
    <p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
    @else
    <p>※ログインしていません。
    <a href="/login">ログイン</a> |
    <a href="/register">登録</a>
    </p>
    @endif
        <table>
        <tr>
            <th>Name</th>
            <th>Mail</th>
            <th>Age</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
        </table>
    @endsection




    <!-- <form method="POST" action="/hello">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
    </form> -->
</body>
</html>