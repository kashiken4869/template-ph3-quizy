@extends('layouts.helloapp')
 
@section('title', 'add')

@section('menubar')
    @parent
    都道府県問題新規作成ページ
@endsection

@section('content')
    <form action="/admin/big_questions/add" method="post">
    <table>
        @csrf
        <tr>
            <th>title: </th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
    </form>
@endsection
