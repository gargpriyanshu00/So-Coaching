<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;
use App\Answer;
use DB;

class QuestionsController extends Controller
{
    public function view($id)
    {
        $answers=DB::select('select * from answers');
        $questions = DB::select('select * from questions where quiz_id= :exam_id',['exam_id'=>$id]);
        return view('questions.view')->with(['questions'=>$questions,'id'=>$id])->with('answers',$answers);
    }
    public function create()
    {
        return view('questions.result');
    }

    public function result(Request $request) {
        $data = $request->all();
        $answers_array = [];
        $correct_answers_array = [];
        $question_count = 0;
        $correct_answers_count =0;
        foreach ($data as $key => $datum) {
            if($key != '_token' && $key != 'invisible') {
                $answers_array[$key] = $datum;
                $correct_answers_array[] =  json_decode(DB::table('answers')->where('is_correct',1 )->get(), true);
                $question_count++;
            }
        }

        foreach ($data as $key ) {
            if($key == '1') {
                $correct_answers_count++;
            }
        }


        return view('questions.result', compact('data', 'correct_answers_count', 'question_count'));
    }
}
