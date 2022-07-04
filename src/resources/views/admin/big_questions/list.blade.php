@extends('layouts.app')

<?php

// if($_POST['list-ids']){
//     $list = $_POST['list-ids'];
//     //配列に格納
//     $lists = explode(',', $result);
//     $sql_sort='';
//     $sort= 1; 
//     foreach($lists as $id){
//         $sql_sort. =  ' WHEN '.$id.' THEN '.$sort;
//         $sort++;
//     }
//     $sql　= ' UPDATE テーブル名 SET ソートカラム名 = case IDカラム名'.$sql_sort.' END,';
//     $stmt = $dbh->prepare($sql);
//     $stmt->execute();
// }

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>クイズ一覧</title>

    <style>
        body {
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 100pt;
            text-align: right;
            color: #f6f6f6;
            margin: -50px 0px -100px 0px;
        }

        th {
            background-color: #999;
            color: #fff;
            padding: 10px 10px;
        }

        td {
            border: solid 1px #aaa;
            color: #999;
            padding: 25px 20px;
        }
    </style>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>


</head>

<body>
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <!-- <div class="card-header">Dashboard</div> -->

                    <!-- <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                    </div> -->
                    <form action="" method="post">
                        <table>
                            <thead>
                                <tr>
                                    <th>タイトル</th>
                                    <th>機能</th>
                                </tr>
                            </thead>
                            <tbody class="sortable">
                                @foreach ($links as $link)
                                <tr>
                                    <td>
                                        <a href="small_questions/{{$link->id}}">
                                            {{$link->name}}
                                        </a>
                                    </td>
                                    <td class="action_list">
                                        <a href="big_questions/edit/{{$link->id}}">
                                            名前を編集
                                        </a>
                                        <a href="big_questions/delete/{{$link->id}}">
                                            削除
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tdoby>
                        </table>
                        <input type="hidden" id="list-ids" name="list-ids" />
                        <button id="submit">更新</button>
                    </form>

                </div>
                <div class="add_title">
                    <a href="big_questions/add">
                        タイトルを追加
                    </a>
                </div>

            </div>
        </div>
    </div>
    @endsection
</body>

<script src="{{ asset('main.js') }}"></script>

<script>
    $(function() {
        $(".sortable").sortable();
        $(".sortable").disableSelection();
        $("#submit").click(function() {
            var listIds = $(".sortable").sortable("toArray");
            console.log(listIds);
            $("#list-ids").val(listIds);
            // $("form").submit();
        });
    });
</script>

</html>