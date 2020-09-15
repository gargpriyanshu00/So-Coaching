<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\User;
use DB;

class ChatsController extends Controller
{
    public function index()
    {
        if(auth()->user()->userType==2){
            $users=DB::select('select * FROM users where userType=3');
            return view('chats.index')->with('users',$users);
        }
        else if(auth()->user()->userType==3){
            $users=DB::select('select * FROM users where userType=2');
            return view('chats.index')->with('users',$users);
        }
        else{
            return view('error');
        }
    }
    

    public function view($id)
    {
        if(auth()->user()->userType==2 || auth()->user()->userType==3){
            $chats = DB::select('select * from chats where to_user= :to_user and from_user= :from_user or to_user= :to_user2 and from_user= :from_user2',['to_user'=>auth()->user()->id,'from_user'=>$id,'to_user2'=>$id,'from_user2'=>auth()->user()->id]);
            return view('chats.view')->with(['chats'=> $chats,'id'=>$id]);
        }
        else{
            return view('error');
        }
    }


    public function store(Request $request,$id)
    {
        $this->validate($request, [
            'msgToSend' => 'required',
        ]);
        // chat create
        $chat = new Chat;
        $chat->to_user = $id;
        $chat->from_name = auth()->user()->name;
        $chat->body = $request->input('msgToSend');
        $chat->from_user = auth()->user()->id;
        $chat->save();
        $chats = DB::select('select * from chats where to_user= :to_user and from_user= :from_user or to_user= :to_user2 and from_user= :from_user2',['to_user'=>auth()->user()->id,'from_user'=>$id,'to_user2'=>$id,'from_user2'=>auth()->user()->id]);
        return view('chats.view')->with(['chats'=> $chats,'id'=>$id]);   
    }
}
