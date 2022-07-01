<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
    <head>
    <title>{{$links->name}}</title> 
    <link rel="stylesheet" href="{{ asset('reset.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style></style>
    </head>
    <body>
    <div class="question">
    <!-- 設問のループ -->
        @foreach ($questions as $question)
            <h1 class="title">{{$loop->iteration}}．この地名は何て読む？</h1>
            <div class="quiz-img-container">
                <img src="{{ asset(img/$question->image)}}" alt="">
            </div>
        <!-- 選択肢のループ -->
                    <ul id ="quiz-choices{{$question->id}}" class="choices-list">
                @foreach ($choices[$loop->index] as $choice)
                        <li id="choice{{$question->id}}_{{$loop->iteration}}"
                            onclick="clickfunction({{$question->id}},{{$loop->iteration}},{{$choice->valid}})">
                            {{$choice->name}}
                        </li>
                @endforeach
                    </ul>
        <!-- 選択肢のループ終わり -->
            <div name="answerBoxDiv" class="answerBoxDiv" id="answerbox-div">
                <h3 class="quiz-result-title"></h3>
                <p class="quiz-result-paragraph">
            </div>

                            <!-- コメントボックス -->
                <div id="comment_box{{ $question->id }}" class="comment-box hide">
                    <h3 id="comment_title{{ $question->id }}" class="comment-title"></h3>
                    <p id="comment_text{{ $question->id }}" class="comment-text"></p>
                </div>
        @endforeach
    <!-- 設問のループ終わり -->
    </div>
    <script src="{{ asset('main.js') }}"></script>

    </body>
</html>


