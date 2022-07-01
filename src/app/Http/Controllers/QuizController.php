<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class QuizController extends Controller
{
    public function index_links(Request $request) 
    {
        $links = DB::table('big_questions')->get();
        return view('list', ['links' => $links]);
    }

    public function index_questions($id) 
    {
        $links = DB::table('big_questions')->first();

        $questions = DB::table('questions')
            ->where('big_question_id', $id)->get();

        $choices = [];

        foreach ($questions as $question) {
            array_push($choices, DB::table('choices')->where('question_id', $question->id)->get());
        }

        // $choices = DB::table('choices')
        //     // ->where('question_id', $questions['id'])
        //     ->get();

        return view('quiz', compact('questions', 'choices', 'links'));    
    }

    public function index2() {
    return view('quiz2');
    }
}
