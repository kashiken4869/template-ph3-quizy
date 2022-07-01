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
 
@section('title', 'Show')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
    @if ($items != null)
        @foreach($items as $item)
        <table width="400px">
            <tr><th width="50px">id: </th><td width="50px">{{$item->id}}</td></tr>
            <tr><th width="50px">name: </th><td>{{$item->name}}</td></tr>
        </table>
        @endforeach
    @endif
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection

</body>
</html>