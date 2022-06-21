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

@section('title', 'Person.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
    <tr ><th>Person</th><th>Board</th></tr>
    @foreach ($hasItems as $item)
        <tr>
            <td>{{$item->getData()}}</td>
            <td>
                <table width="100%">
                @foreach ($item->boards as $obj)
                    <tr>
                        <td>{{$obj->getData()}}</td>
                    </tr>
                @endforeach
                </table>
            </td>
        </tr>
    @endforeach
    </table>
    <div style="margin:10px;"></div>
    <table>
        <tr><th>Person</th></tr>
        @foreach ($noItems as $item)
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
        @endforeach
    </table>
@endsection

</body>
</html>