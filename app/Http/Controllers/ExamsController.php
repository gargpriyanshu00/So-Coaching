<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exam;
use App\User;
use App\Question;
use DB;

class ExamsController extends Controller
{
    public function index()
    {
        $exams=DB::select('select * FROM exams');
            return view('exams.index')->with('exams',$exams);
    }

}
