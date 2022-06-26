<?php

namespace App\Http\Controllers;

use App\BigQuestion;
use App\Question;
use App\Choice;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;



class QuizController extends Controller
{
    // public function index_links(Request $request) 
    // {
    //     $links = DB::table('big_questions')->get();
    //     return view('list', ['links' => $links]);
    // }
    public function index_links(Request $request) 
    {
        $links = BigQuestion::all();
        return view('list', ['links' => $links]);
    }

    public function index_questions($id) 
    {
        // $links = DB::table('big_questions')->first();
        $links = BigQuestion::first();
        $questions = Question::
            where('big_question_id', $id)->get();
        // $questions = DB::table('questions')
        //     ->where('big_question_id', $id)->get();
        $choices = [];
        foreach ($questions as $question) {
            array_push($choices, Choice::where('question_id', $question->id)->get());
            // array_push($choices, DB::table('choices')->where('question_id', $question->id)->get());
        }
        // $choices = DB::table('choices')
        //     // ->where('question_id', $questions['id'])
        //     ->get();
        return view('quiz', ['questions' => $questions, 'choices' => $choices, 'links' => $links]);    
    }

}
