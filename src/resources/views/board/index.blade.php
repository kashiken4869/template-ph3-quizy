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

@section('title', 'Board.index')

@section('menubar')
    @parent
    ボード・ページ
@endsection

@section('content')
    <table>
        <tr><th>Message</th><th>Name</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->message}}</td>
                <td>{{$item->person->name}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection

</body>
</html>