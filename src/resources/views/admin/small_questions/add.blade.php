@extends('layouts.helloapp')
 
@section('title', 'add')

@section('menubar')
    @parent
    設問新規作成ページ
@endsection

@section('content')
    <form action="" method="post" enctype="multipart/form-data">
            @csrf
        <tr>
            <th>画像を登録: </th>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </form>
@endsection
