<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        return view('upload');
    }
    public function upload(Request $request){
        Item::create([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'email'=>$request->email,
            'file'=>$request->file 
        ]);
        return back()->with('msg', 'Your application has been sent successfully!');
      return $request->file('file')->store('public/uploads');
    }
}
