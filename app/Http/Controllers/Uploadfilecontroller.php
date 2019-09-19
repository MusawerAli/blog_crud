<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uploadfilecontroller extends Controller
{
    public function index(){
        return view('upload');
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'select_file'   =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $request->file('select_file');
         $newname = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("images"),$newname);
            return back()->with('success','Image uplaoded Success')->with('path',$newname);
            
        }
}
