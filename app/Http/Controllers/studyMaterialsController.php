<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudyMaterial;

class studyMaterialsController extends Controller
{
    public function index()
    {
        if(auth()->user()->userType==1 ||auth()->user()->userType==2 ||auth()->user()->userType==3){
            $materials=StudyMaterial::orderBy('updated_at','desc')->get();
            return view('studyMaterial.index')->with('materials',$materials);
        }
        else {
            return view('error');
        }
    }

    public function create()
    {
        if(auth()->user()->userType==2){
            return view('studyMaterial.create');
        } 
        else{
            return view('error');
        }   
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'url' => 'nullable',
            'title' => 'required',
            'body' => 'required',
            'attachment' => 'nullable|max:1999'
        ]);
        // Handle File Upload
        if($request->hasFile('attachment')){
            // Get filename with the extension
            $filenameWithExt = $request->file('attachment')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('attachment')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('attachment')->storeAs('public/SM', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        // Create Post
        $material = new StudyMaterial;
        $material->title = $request->input('title');
        $material->name = $request->input('name');
        $material->body = $request->input('body');
        $material->url = $request->input('url');
        $material->target = $request->input('target');
        $material->attachment = $fileNameToStore;
        $material->save();
        return redirect('/studymaterial')->with('success', 'Material added');
    }
}
