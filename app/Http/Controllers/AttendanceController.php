<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Attendance;
use App\User;
use DB;

class AttendanceController extends Controller
{
    public function index()
    {
        if(auth()->user()->userType==2){
            $users=DB::select('select * from users where id=:id',['id'=>auth()->user()->id]);
            return view('attendance.index')->with('users',$users);
        }
        else{
            return view('error');
        }
    }

    public function create($id)
    {   
        if(auth()->user()->userType==2){
            $users=DB::select('select * from users where (batch1=:id1 or batch2=:id2) and userType=1',['id1'=>$id,'id2'=>$id]);
            return view('attendance.create')->with(['users'=>$users,'id'=>$id]);
        }
        else{
            return view('error');
        }
    }
    
    public function store(Request $request,$id)
    {
        $attendance= new Attendance;
        $users=DB::select('select * from users where (batch1=:id1 or batch2=:id2) and userType=1',['id1'=>$id,'id2'=>$id]);
        foreach($users as $user){
            $column=$user->id;
            $attendance->$column= $request->input($user->id);
        }
        $attendance->save();
        return redirect('/attendance')->with('success', 'Request  added');
    }

    public function view($id)
    {
        if(auth()->user()->userType==1){
            $users=DB::select('select * from attendances');
            return view('attendance.view')->with(['users'=>$users,'id'=>$id]);
        }
        else if(auth()->user()->userType==3){
            $stuID=DB::table('relationships')
            ->select('student_id')
            ->Where('parent_id', auth()->user()->id)
            ->value('parent_id');
            $users=DB::select('select * from attendances');
            return view('attendance.view')->with(['users'=>$users,'id'=>$id,'stuID'=>$stuID]);
        }
        else{
            return view('error');
        }
    }

}
