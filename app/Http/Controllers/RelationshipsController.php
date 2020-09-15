<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relationship;

class RelationshipsController extends Controller
{

    public function index(){
        if(auth()->user()->userType==0){
            return view('admin.addRelation');
        }
        else{
            return view('error');
        }
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'parent_id' => 'required',
            'student_id' => 'required',
        ]);
        // Create Relationship
        $relationship = new Relationship;
        $relationship->parent_id = $request->input('parent_id');
        $relationship->student_id = $request->input('student_id');
        $relationship->save();
        return redirect('/MemberLogin')->withSuccess(['Created Successfully!!']);
    }

}
