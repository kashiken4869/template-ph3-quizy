<?php

namespace App\Http\Controllers;

use App\BigQuestion;
use App\Question;
use App\Choice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class BigQuestionsController extends Controller
{
    public function index_links(Request $request) 
    {
        $links = BigQuestion::where('hide', 0)->get();
        return view('admin/big_questions/list', ['links' => $links]);
    }

        public function add_title(Request $request)
    {
        return view('admin.big_questions.add');
    }

    public function create_title(Request $request)
    {
        $param = [
            'name' => $request->name,
        ];
        BigQuestion::insert($param);
        return redirect('/admin/big_questions');
    
    }

    public function edit_title(Request $request)
    {
        $item = BigQuestion::where('id', $request->id)->first();
        return view('admin.big_questions.edit', ['form' => $item]);
    }

    public function update_title(Request $request)
    {
        $param = [
            'name' => $request->name,
        ];
        BigQuestion::where('id', $request->id)
            ->update($param);
        return redirect('/admin/big_questions');
    }


    public function delete_title($id)
    {
        $item = BigQuestion::find($id);
        // $item = BigQuestion::where('id', $request->id)->first();
        return view('admin.big_questions.delete', ['form' => $item]);
    }


    public function remove_title($id)
    {
        $bigQuestion = BigQuestion::find($id);
        // $bigQuestion = new BigQuestion();
        // $bigQuestion = BigQuestion::where('id', $request->id);
        $bigQuestion->hide = 1;
        $bigQuestion->save();
        // $user ->delete();
        return redirect('/admin/big_questions');
    }
}
