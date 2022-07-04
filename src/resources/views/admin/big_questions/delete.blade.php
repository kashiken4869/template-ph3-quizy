@extends('layouts.helloapp')
 
@section('title', 'Delete')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    <form action="/admin/big_questions/delete/{{$form->id}}" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <!-- <tr>
            <th>name: </th>
            <td><input type="text" name="name" value="{{$form->name}}"></td>
        </tr> -->
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
    </form>
@endsection