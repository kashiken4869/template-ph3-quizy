<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>

<head>
    <title>{{optional($big_question)->name}}</title>
    <link rel="stylesheet" href="{{ asset('reset.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

            <script>
          $(function() {
              $(".sortable").sortable();
              $(".sortable").disableSelection();
              $("#submit").click(function() {
                var listIds = $(".sortable").sortable("toArray");
                console.log(listIds);
                $("#list-ids").val(listIds);
                // $("#list-ids").val(1);
                // $("form").submit();
              });
          });
        </script>
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
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <form action="" method="post">
        @csrf
        <div class="admin_question_container">
            <!-- 設問のループ -->
            @foreach ($questions as $question)
            <div class="admin_question">
                <!-- <h1 class="title">{{$loop->iteration}}</h1> -->
                <div class="admin-img-container">
                    <img src="../../img/{{$question->image}}" alt="">
                </div>
                <div class="small_setting">
                    <a href="/admin/small_questions/delete/{{$question->id}}">
                        設問を削除
                    </a>
                    <a href="/admin/choices/{{$question->id}}">
                        選択肢を編集
                    </a>
                </div>
            </div>
            @endforeach

            <input type="hidden" id="list-ids" name="list-ids" />
        </div>

        <input type="hidden" id="list-ids" name="list-ids" />

        </div>
        <div class="facility">
        <button id="submit">更新</button>
        <br>
        <a href="/admin/small_questions/{{ optional($big_question)->id }}/add">＋設問を追加</a>
        <br>
        <a href="/admin/big_questions">大問の一覧に戻る</a>
        </div>

    </form>
    @endsection

    <script src="{{ asset('main.js') }}"></script>

</body>

</html>