@extends('layouts.helloapp')
 
@section('title', 'Delete')

@section('menubar')
    @parent
    設問削除ページ
@endsection

<link rel="stylesheet" href="{{ asset('style.css') }}">


@section('content')
    <form action="/admin/small_questions/delete/{{$question->id}}" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$question->id}}">

        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
    </form>
@endsection