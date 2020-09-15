<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications=Notification::orderBy('created_at','desc')->get();
        return view('notifications.index')->with('notifications',$notifications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->userType==0 || auth()->user()->userType==2){
            return view('notifications.create');
        }
        else{
            return view('error');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'teachername' => 'required',
            'body' => 'required',
        ]);
        // Create Post
        $notification = new Notification;
        $notification->TeacherName = $request->input('teachername');
        $notification->body = $request->input('body');
        $notification->user_id = auth()->user()->id;
        $notification->save();
        return redirect()->route('notifications.index')->withSuccess(['Created Successfully!!']);        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notification = Notification::find($id);
        
        // Check for correct user
        if(auth()->user()->id !==$notification->user_id){
            return redirect('/notifications')->with('error', 'Unauthorized Page');
        }
        
        $notification->delete();
        return redirect('/notifications')->with('success', 'Post Removed');
    }
}
