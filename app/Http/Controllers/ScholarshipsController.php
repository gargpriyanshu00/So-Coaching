<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;

class ScholarshipsController extends Controller
{
    public function index()
    {
        if(auth()->user()->userType==0){
            $scholarships=Scholarship::orderBy('marks','desc')->get();
            return view('scholarships.index')->with('scholarships',$scholarships);
        }
        else{
            return view('error');
        }
    }

    public function create()
    {
        if(auth()->user()->userType==1){
            return view('scholarships.create');
        }
        else{
            return view('error');
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'marks' => 'required',
            'email' => 'required',
            'number' => 'required'
        ]);
        // Create Post
        $scholarship = new Scholarship;
        $scholarship->user_id=auth()->user()->id;
        $scholarship->name = $request->input('name');
        $scholarship->email = $request->input('email');
        $scholarship->marks = $request->input('marks');
        $scholarship->phone = $request->input('number');
        $scholarship->save();
        return redirect('/MemberLogin')->with('success', 'Request  added');
    }
}
